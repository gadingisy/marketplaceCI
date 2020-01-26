<?php

class Categories_page extends CI_Controller{
	private $perPage = 9;	
	public function __construct(){
     
        parent::__construct();
        $this->load->model(['Model_gerbang']);
        
     
    }
	public function index($id_produk){
        
		$this->load->model('Model_gerbang');
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
		$data['produk'] = $this->Model_gerbang->get_barang($id_produk);
		$data['breadcrumb'] = $this->Model_gerbang->breadcrumb($id_produk);
	
	$this->load->view('categories-page.php',$data);

        
}
				
}
?>
