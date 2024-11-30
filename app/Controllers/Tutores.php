<?php

namespace App\Controllers;

use App\Models\TutoresModel;
use App\Models\MascotasModel;
use App\Models\Mantenedor\PaisModel;
use App\Models\Mantenedor\CiudadModel;

class Tutores extends BaseController
{
    protected $tutoresModel;
    protected $mascotasModel;
    protected $paisModel;
    protected $ciudadModel;

    public function __construct()
    {
        $this->tutoresModel = new TutoresModel();
        $this->mascotasModel = new MascotasModel();
        $this->paisModel = new PaisModel();
        $this->ciudadModel = new CiudadModel();

        $session = session();
        if (!$session->get('id_tutor')) {
            return redirect()->to('/signin')->send();
        }
    }

    // CARGA VISTA MOSTRAR DATOS DE TUTOR Y MASCOTAS
    public function index()
    {
        $id_tutor = 1;
        $bodyDato = "";

        // Obtener datos del tutor
        $datos = $this->tutoresModel->getTutor($id_tutor);

        $data['id_tutor'] = $id_tutor;
        $path = base_url('img_tutores') . '/';

        foreach ($datos as $dato) {
            $bodyDato .= '<p><img src="' . $path . $dato['imagen'] . '" width="30%" /></p>';
            $bodyDato .= '<p>Nombre completo: ' . $dato['nombres_tutor'] . ' ' . $dato['apellidos_tutor'] . '</p>';
            $bodyDato .= '<p>Alias: @' . $dato['alias'] . '</p>';
            $bodyDato .= '<p>Rut: ' . $dato['rut_tutor'] . '</p>';
            $bodyDato .= '<p>Dirección: ' . $dato['direccion_tutor'] . '</p>';
            $bodyDato .= '<p>Ciudad: ' . $dato['ciudad_tutor'] . '</p>';
            $bodyDato .= '<p>País: ' . $dato['nombre'] . ' (' . $dato['iso2'] . ')</p>';
            $bodyDato .= '<p>Fono: (' . $dato['phone_code'] . ') ' . $dato['fono_tutor'] . '</p>';
            $bodyDato .= '<p>Correo: ' . $dato['correo_tutor'] . '</p>';
            $bodyDato .= '<p>Fecha de registro: ' . $dato['fecha_registro_tutor'] . '</p>';
            $bodyDato .= '<p>Plan: ' . $dato['plan'] . '</p>';
        }

        $data['tutor'] = $bodyDato;

        // Obtener mascotas del tutor
        $bodyTabla = "";
        $registros = $this->mascotasModel->getMascotasTutor($id_tutor);
        $path2 = base_url('img_mascotas') . '/';

        foreach ($registros as $registro) {
            $bodyTabla .= '<tr>';
            $bodyTabla .= '<td><img src="' . $path2 . $registro['foto_m'] . '" width="80%" /></td>';
            $bodyTabla .= '<td>' . $registro['nombre_m'] . '</td>';
            $bodyTabla .= '<td>' . $registro['especie'] . '</td>';
            $bodyTabla .= '<td>' . $registro['raza'] . '</td>';
            $bodyTabla .= '<td><a class="btn btn-primary btn-puppie-color" href="' . base_url('mascotas/ver/' . $registro['id_mascota']) . '">Ver</a></td>';
            $bodyTabla .= '<td><a class="btn btn-primary btn-puppie-color" href="' . base_url('mascotas/editar/' . $registro['id_mascota']) . '">Editar</a></td>';
            $bodyTabla .= '<td><a class="btn btn-primary btn-puppie-color" href="' . base_url('mascotas/muro/' . $registro['id_mascota']) . '">Muro</a></td>';
            $bodyTabla .= '</tr>';
        }

        $data['mascotas'] = $bodyTabla;

        return view('Tutores/Ver', $data);
    }

    // CARGA VISTA EDITAR CONTRASEÑA DE TUTOR
    public function editarc($id_tutor)
    {
        $data = $this->tutoresModel->obtieneDatosTutor($id_tutor);
        $titulo = "Editar Contraseña";

        return view('Tutores/Editarc', compact('data', 'titulo'));
    }

    // CARGA VISTA EDITAR DATOS DE TUTOR
    public function editard($id_tutor)
    {
        $data = $this->tutoresModel->obtieneDatosTutor($id_tutor);
        $titulo = "Editar Datos";

        // Construir combo de países
        $comboCountries = "";
        $countries = $this->paisModel->get();
        foreach ($countries as $country) {
            $selected = ($data['cod_pais'] == $country['cod_pais']) ? "selected" : "";
            $comboCountries .= '<option value="' . $country['cod_pais'] . '" ' . $selected . '>' . $country['nombre'] . ' ' . $country['iso2'] . '</option>';
        }

        $data['stringCombo'] = $comboCountries;

        return view('Tutores/Editard', compact('data', 'titulo'));
    }

    // CARGA VISTA CAMBIAR FOTO PERFIL DE UN TUTOR
    public function foto_perfil($id_tutor)
    {
        $datos['id_tutor'] = $id_tutor;
        $titulo = "Foto Perfil";

        return view('Tutores/Foto', compact('datos', 'titulo'));
    }

    // GUARDA FOTO DE PERFIL DE UN TUTOR
    public function subir_foto()
    {
        $config = new \Config\UploadConfig();
        $path = $config->uploadTutorPath;
        $pathUrl = $config->uploadTutorUrl;
        $id_tutor = session()->get('id_tutor');

        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = 'us_' . $id_tutor . '_' . uniqid() . '.' . $file->getExtension();
            if ($file->move($path, $newName)) {
                $values = ['imagen' => $newName];
                if ($this->tutoresModel->edita($values, $id_tutor)) {
                    session()->set('imagen', $newName);
                    return $this->response->setJSON([
                        'response' => 'success',
                        'newImagePath' => $pathUrl . $newName,
                    ]);
                }
            }
        }

        return $this->response->setJSON(['response' => 'error']);
    }
}
