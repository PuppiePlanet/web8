<?php

namespace App\Models\Mantenedor;

use CodeIgniter\Model;

class CiudadModel extends Model
{
    protected $table = 'm_ciudades'; // Tabla principal
    protected $primaryKey = 'id_ciudad'; // Clave primaria (si aplica)
    protected $allowedFields = ['nombre', 'cod_pais']; // Campos permitidos para operaciones de insert/update

    /**
     * Obtiene una lista de ciudades basadas en filtros.
     *
     * @param array $filters Filtros para la consulta.
     * @return array Lista de ciudades.
     */
    public function getCiudades(array $filters)
    {
        return $this->where($filters)
            ->orderBy('nombre', 'ASC')
            ->findAll();
    }
}
