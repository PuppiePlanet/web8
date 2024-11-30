<?php

namespace App\Models;

use CodeIgniter\Model;

class TutoresModel extends Model
{
    protected $table = 'tutores'; // Nombre de la tabla principal
    protected $primaryKey = 'id_tutor'; // Clave primaria
    protected $allowedFields = [
        'nombres_tutor', 'apellidos_tutor', 'correo_tutor', 'alias', 'cod_pais',
        'fono_tutor', 'direccion_tutor', 'token_tutor', 'pass_tutor', 'fecha_registro_tutor'
    ];

    // Obtiene la información completa de un tutor, incluyendo su país
    public function getTutor($id_tutor)
    {
        return $this->select('tutores.*, M_paises.*')
            ->join('M_paises', 'tutores.cod_pais = M_paises.cod_pais')
            ->where('tutores.id_tutor', $id_tutor)
            ->findAll();
    }

    // Obtiene un registro único de un tutor con datos del país (similar a getTutor)
    public function obtieneDatosTutor($id_tutor)
    {
        return $this->select('tutores.*, M_paises.*')
            ->join('M_paises', 'tutores.cod_pais = M_paises.cod_pais', 'left')
            ->where('tutores.id_tutor', $id_tutor)
            ->first();
    }

    // Actualiza los datos de un tutor
    public function edita($set, $id_tutor)
    {
        return $this->update($id_tutor, $set);
    }

    // Verifica si un alias está repetido, excluyendo el tutor actual
    public function aliasRepetido($id_tutor, $alias)
    {
        return $this->where('id_tutor !=', $id_tutor)
            ->where('alias', $alias)
            ->countAllResults();
    }
}
