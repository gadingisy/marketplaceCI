<?php

class Categories_page extends CI_Controller{

    public function index(){
        
        $this->load->model('Model_gerbang');
        $data['row']= $this->Model_gerbang->get_nama_kategori();  
        $data['row2']= $this->Model_gerbang->get_nama_kategori2();  
      
       
      $this->load->view('categories.php',$data);
   }
  
    public function kategori($id_produk){
        
        $this->load->model('Model_gerbang');
        $data['row']= $this->Model_gerbang->get_nama_kategori();  
        $data['row2']= $this->Model_gerbang->get_nama_kategori2();  
    $data['produk'] = $this->Model_gerbang->get_barang($id_produk);
       
      $this->load->view('categories-page.php',$data);
   }
 
}
?>