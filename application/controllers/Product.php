<?php

class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_gerbang');
        
    }
    public function produk($id_item){
		$this->load->model('Model_gerbang');
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
        $data['item'] = $this->Model_gerbang->get_item($id_item);
        $data['randomdata'] = $this->Model_gerbang->random_item($id_item);
        $this->load->view('product-details.php',$data);
    }
}

?>
