<?php

if (!function_exists('template_load')) {
    /**
     * Carga una vista con encabezado y pie de página.
     *
     * @param string $view Nombre de la vista principal.
     * @param array $data Datos a pasar a la vista.
     * @param string $titulo Título de la página.
     */
    function template_load(string $view, array $data = [], string $titulo = '')
    {
        $data['titulo'] = $titulo;

        // Cargar encabezado
        echo view('template/header', ['titulo' => $titulo]);

        // Cargar vista principal
        echo view($view, $data);

        // Cargar pie de página
        echo view('template/footer');
    }
}
