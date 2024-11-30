<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tutores'; // Nombre de la tabla
    protected $primaryKey = 'id_tutor'; // Clave primaria
    protected $allowedFields = [ // Campos permitidos para inserts/updates
        'rut_tutor', 'nombres_tutor', 'apellidos_tutor', 'direccion_tutor', 'ciudad_tutor',
        'cod_pais', 'fono_tutor', 'correo_tutor', 'token_tutor', 'pass_tutor',
        'fecha_registro_tutor', 'estado', 'plan', 'validacion', 'codigo_validacion',
        'imagen', 'alias', 'cuenta', 'genero', 'web', 'presentacion',
        'fecha_nacimiento', 'intentos_fallidos', 'bloqueado_hasta'
    ];

    // Login: Verifica si el email y contraseña coinciden
    public function login($email, $password)
    {
        $result = $this->where('correo_tutor', $email)
            ->where('pass_tutor', $password)
            ->first();

        return $result ? true : false;
    }

    // Verifica si existe un tutor con los filtros proporcionados
    public function if_exists(array $filters)
    {
        $result = $this->where($filters)->first();
        return $result ? true : false;
    }

    // Obtiene información de un tutor según filtros
    public function get(array $filters)
    {
        return $this->where($filters)->first();
    }

    // Actualiza registros con filtros y valores dados
    public function updateData(array $set, array $filters)
    {
        return $this->where($filters)->set($set)->update();
    }

    // Actualiza un tutor por su `id_tutor`
    public function actualiza(array $set, $id_tutor)
    {
        return $this->update($id_tutor, $set);
    }

    // Inserta un nuevo registro en la tabla `tutores`
    public function inserta(array $values)
    {
        return $this->insert($values) ? true : false;
    }

    // Obtiene el token y otros datos del tutor por su correo
    public function get_token($email)
    {
        $query = $this->db->table($this->table)
            ->select("
                id_tutor, rut_tutor, nombres_tutor, apellidos_tutor, direccion_tutor,
                ciudad_tutor, cod_pais, fono_tutor, correo_tutor, token_tutor,
                pass_tutor, fecha_registro_tutor, estado, plan, validacion,
                codigo_validacion, imagen, alias, cuenta, genero, web,
                presentacion, fecha_nacimiento, intentos_fallidos,
                IFNULL(bloqueado_hasta, 0) AS bloqueado_hasta,
                CASE 
                    WHEN IFNULL(
                        TIMESTAMPDIFF(MINUTE, NOW(), bloqueado_hasta), 
                        0
                    ) > 0 THEN LPAD(TIMESTAMPDIFF(MINUTE, NOW(), bloqueado_hasta) % 60, 2, '0') 
                    ELSE 0
                END AS diferencia_bloqueo
            ")
            ->where('correo_tutor', $email)
            ->get();

        return $query->getRowArray();
    }
}
