<?php
/**
 *
 */
  class Papeleria extends CI_Controller
  {
      function __construct()
      {
        parent::__construct();
        {

        }
        //Invocar al padre del constrcutor
      }
      //Renderizacion de la vista qu emuestra lso desayunos
      public function productos(){
        $this->load->view('header');
        $this->load->view('papeleria/productos');
        $this->load->view('footer');
      }
      public function promociones(){
        $this->load->view('header');
        $this->load->view('papeleria/promociones');
        $this->load->view('footer');
      }
      public function nosotros(){
        $this->load->view('header');
        $this->load->view('papeleria/nosotros');
        $this->load->view('footer');
      }
      public function contactos(){
        $this->load->view('header');
        $this->load->view('papeleria/contactos');
        $this->load->view('footer');
      }


  }
?>
