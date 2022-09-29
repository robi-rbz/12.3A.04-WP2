<?php

class Belajar extends CI_Controller
{
     public function index()
     {
          $this->load->view('welcome_message');
     }
     public function parsing()
     {
          //$data['bio'] = "Nama Saya Robi";
          $data = array(
               'nama' => "Robi Aziz",
               'pekerjaan' => "Dosen"
          );

          $this->load->view('view_belajar', $data);
     }
}
