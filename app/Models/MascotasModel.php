<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotasModel extends Model
{
    protected $table = 'mascotas'; // Tabla principal
    protected $primaryKey = 'id_mascota'; // Clave primaria
    protected $allowedFields = [
        'id_tutor', 'nombre_m', 'cod_especie', 'cod_raza', 'fecha_nacimiento', 
        'foto_m', 'peso', 'observaciones'
    ]; // Campos permitidos para operaciones de inserción/actualización
    protected $useTimestamps = true; // Activa created_at y updated_at
    protected $createdField = 'fecha_creacion';
    protected $updatedField = 'fecha_actualizacion';

    /**
     * Obtiene todas las mascotas de un tutor.
     *
     * @param int $id_tutor ID del tutor.
     * @return array Lista de mascotas.
     */
    public function getMascotasTutor($id_tutor)
    {
        return $this->select('mascotas.*, M_especies.especie, M_razas.raza')
            ->join('M_especies', 'mascotas.cod_especie = M_especies.cod_especie', 'left')
            ->join('M_razas', 'mascotas.cod_raza = M_razas.cod_raza', 'left')
            ->where('mascotas.id_tutor', $id_tutor)
            ->orderBy('mascotas.nombre_m', 'ASC')
            ->findAll();
    }

    /**
     * Obtiene los detalles de una mascota.
     *
     * @param int $id_mascota ID de la mascota.
     * @return array|null Información de la mascota o null si no se encuentra.
     */
    public function getDetalleMascota($id_mascota)
    {
        return $this->select('mascotas.*, M_especies.especie, M_razas.raza')
            ->join('M_especies', 'mascotas.cod_especie = M_especies.cod_especie', 'left')
            ->join('M_razas', 'mascotas.cod_raza = M_razas.cod_raza', 'left')
            ->where('mascotas.id_mascota', $id_mascota)
            ->first();
    }

    /**
     * Inserta una nueva mascota.
     *
     * @param array $data Datos de la mascota.
     * @return bool|int ID del registro insertado o false en caso de error.
     */
    public function insertarMascota(array $data)
    {
        return $this->insert($data) ? $this->getInsertID() : false;
    }

    /**
     * Actualiza los datos de una mascota.
     *
     * @param int $id_mascota ID de la mascota.
     * @param array $data Datos a actualizar.
     * @return bool True si se actualizó correctamente, false en caso contrario.
     */
    public function actualizarMascota($id_mascota, array $data)
    {
        return $this->update($id_mascota, $data);
    }

    /**
     * Elimina una mascota.
     *
     * @param int $id_mascota ID de la mascota.
     * @return bool True si se eliminó correctamente, false en caso contrario.
     */
    public function eliminarMascota($id_mascota)
    {
        return $this->delete($id_mascota);
    }

    /**
     * Busca mascotas por nombre.
     *
     * @param string $nombre Nombre o parte del nombre de la mascota.
     * @return array Lista de mascotas que coincidan con el nombre.
     */
    public function buscarMascotasPorNombre($nombre)
    {
        return $this->like('nombre_m', $nombre)
            ->orderBy('nombre_m', 'ASC')
            ->findAll();
    }

    /**
     * Obtiene el conteo de mascotas asociadas a un tutor.
     *
     * @param int $id_tutor ID del tutor.
     * @return int Cantidad de mascotas.
     */
    public function contarMascotasTutor($id_tutor)
    {
        return $this->where('id_tutor', $id_tutor)->countAllResults();
    }
}
