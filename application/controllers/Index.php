<?php

class Index extends CI_Controller{
        
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->model('Model_gerbang');
        $data['data'] = $this->Model_gerbang->get_produk();
        $data['row']= $this->Model_gerbang->get_nama_kategori();  
        $data['row2']= $this->Model_gerbang->get_nama_kategori2();  

        $this->load->view('jambrong.php',$data);
    }
   
}

?>