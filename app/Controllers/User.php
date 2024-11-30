<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        // Validar entrada
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $validation->getErrors(),
            ])->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST);
        }

        // Obtener credenciales
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Verificar usuario en la base de datos
        $data = $this->userModel->get_token($email);

        if ($data) {
            $token = $data['token_tutor'];
            $pass_tutor = $data['pass_tutor'];
            $intentos_fallidos = $data['intentos_fallidos'];
            $bloqueado_hasta = $data['bloqueado_hasta'];
            $diferencia_bloqueo = $data['diferencia_bloqueo'];
            $validacion = $data['validacion'];
            $id_tutor = $data['id_tutor'];

            // Verificar si la cuenta está bloqueada
            if ($diferencia_bloqueo != 0) {
                $mensaje = "Su cuenta está bloqueada. Intente nuevamente en $diferencia_bloqueo minutos.";
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => $mensaje,
                ])->setStatusCode(ResponseInterface::HTTP_FORBIDDEN);
            }

            // Verificar contraseña
            $contrasena_con_salt = $token . $password;
            if (password_verify($contrasena_con_salt, $pass_tutor)) {
                if ($validacion === 'REALIZADA') {
                    // Establecer la sesión
                    session()->set($data);

                    // Restablecer intentos fallidos
                    $this->userModel->actualiza(['intentos_fallidos' => 0], $id_tutor);

                    return $this->response->setJSON([
                        'status' => 'success',
                        'message' => 'Login exitoso!',
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Parece que tu correo aún no ha sido validado.',
                    ])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
                }
            } else {
                // Gestionar intentos fallidos
                $intentos_fallidos++;
                $mensaje = 'Ha ingresado credenciales incorrectas.';
                $set = [];

                if ($intentos_fallidos >= 3) {
                    $set['bloqueado_hasta'] = date('Y-m-d H:i:s', strtotime('+10 minutes'));
                    $set['intentos_fallidos'] = 0;
                    $mensaje = 'Su cuenta está temporalmente bloqueada. Intente nuevamente después de 10 minutos.';
                } else {
                    $set['intentos_fallidos'] = $intentos_fallidos;
                }

                // Actualizar intentos fallidos o bloqueo
                $this->userModel->actualiza($set, $id_tutor);

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => $mensaje,
                ])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
            }
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Ha ingresado credenciales incorrectas!',
            ])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }
}
