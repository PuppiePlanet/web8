<?php

namespace App\Controllers;

use App\Models\Mantenedor\PaisModel;
use App\Models\TutoresModel;
use App\Libraries\Template;




class Wall extends BaseController
{
    protected $paisModel;
    protected $tutoresModel;

    public function __construct()
    {
     
        // Cargar modelos
        $this->paisModel = new PaisModel();
        $this->tutoresModel = new TutoresModel();

        // Verificar sesión
        $session = session();
        if (!$session->get('id_tutor')) {
            return redirect()->to('/signin')->send(); // Redirigir si no hay sesión
        }
        $this->template = new Template();
    }

    public function index()
    {
        $session = session();
        $email_usuario = $session->get('correo_tutor');

        if (empty($email_usuario)) {
            return redirect()->to('/signin');
        }

        $nombres_tutor = $session->get('nombres_tutor');
        $apellidos_tutor = $session->get('apellidos_tutor');
        $nick_tutor = $session->get('alias');

        if (empty($nombres_tutor) || empty($apellidos_tutor) || empty($nick_tutor)) {
            return redirect()->to('/settings');
        }
        $this->template->load('Feed/feed');
        
    }

    public function feedvideo()
    {
        $session = session();
        $email_usuario = $session->get('correo_tutor');

        if (empty($email_usuario)) {
            return redirect()->to('/signin');
        }

        $nombres_tutor = $session->get('nombres_tutor');
        $apellidos_tutor = $session->get('apellidos_tutor');
        $nick_tutor = $session->get('alias');

        if (empty($nombres_tutor) || empty($apellidos_tutor) || empty($nick_tutor)) {
            return redirect()->to('/settings');
        }

         template_load('Feed/feed_con_video');
    }

    public function feedori()
    {
        $session = session();
        $email_usuario = $session->get('correo_tutor');

        if (empty($email_usuario)) {
            return redirect()->to('/signin');
        }

        $nombres_tutor = $session->get('nombres_tutor');
        $apellidos_tutor = $session->get('apellidos_tutor');
        $nick_tutor = $session->get('alias');

        if (empty($nombres_tutor) || empty($apellidos_tutor) || empty($nick_tutor)) {
            return redirect()->to('/settings');
        }
        template_load('Feed/feed_original');        
        
    }

    public function carrusel()
    {
        
         template_load('Feed/carrusel_historia');
    }

    public function carrusel_media()
    {
         template_load('Feed/carrusel_media');
    }
}
