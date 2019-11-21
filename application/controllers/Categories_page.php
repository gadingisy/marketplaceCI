<?php

class Categories_page extends CI_Controller{
  
    public function lihatkategori($id_produk){
        $this->load->model('Model_gerbang');
        $data['row']= $this->Model_gerbang->get_nama_kategori();  
        $data['row2']= $this->Model_gerbang->get_nama_kategori2();  
    $data['produk'] = $this->Model_gerbang->get_barang($id_produk);
       
      $this->load->view('categories-page.php',$data);
   }
 
}
?>