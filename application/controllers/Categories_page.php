<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Categories_page extends CI_Controller{

	public function __construct(){
     
        parent::__construct();
        $this->load->model(['Model_gerbang']);
        
       // Per page limit
	   $this->limit = 9;
    }
	public function index($id_produk){
        
		$this->load->model('Model_gerbang');
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
		$data['produk'] = $this->Model_gerbang->get_barang($id_produk);
		$data['breadcrumb'] = $this->Model_gerbang->breadcrumb($id_produk);
		$config["per_page"] = 9;
		
 
		$offset = ($this->uri->segment(4))? $this->uri->segment(4) : 0;;
		$data['semua_pengguna'] = $this->Model_gerbang->hitung_barang($id_produk,$config["per_page"],$offset);
		$config['base_url'] = base_url() . "Categories_page/index/$id_produk/";
		$config['total_rows'] = $this->Model_gerbang->get_All($id_produk)->num_rows();
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active" aria-current="page"> <a class="page-link">';
		$config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
	
	
		$this->load->view('categories-page.php',$data);
		$this->load->view('search.php',$data);
}

}
?>
