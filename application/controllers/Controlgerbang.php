<?php

class Controlgerbang extends CI_Controller{
        
    public function __construct(){
        parent::__construct();
    }
    public function index() {
        $this->load->view('jambrong.php');
    }
    public function data(){
      $this->load->model('Model_gerbang');
      $data['data']=  $this->Model_gerbang->get_data();

      $this->load->view('cek_data.php', $data);
    }
}

?>