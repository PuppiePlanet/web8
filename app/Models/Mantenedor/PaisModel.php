<?php

namespace App\Models\Mantenedor;


use CodeIgniter\Model;

class PaisModel extends Model
{
    protected $table = 'M_paises'; // Nombre de la tabla
    protected $primaryKey = 'id_pais'; // Clave primaria (si la tabla tiene una)
    protected $allowedFields = ['nombre']; // Campos permitidos para inserts/updates

    // Obtiene la lista de países ordenados alfabéticamente
    public function get()
    {
        return $this->orderBy('nombre', 'ASC')->findAll();
    }
}
