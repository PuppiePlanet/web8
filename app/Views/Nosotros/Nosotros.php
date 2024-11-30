<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

  public function __construct(){
    parent::__construct();      
  }

  public function index(){
    echo 'nosotros';
  }
  public function privacidad(){   
    
   $this->load->view('Politicas/privacidad');     
  }

  public function condiciones(){   
    $this->load->view('Politicas/condiciones');
   
  }
}