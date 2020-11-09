<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    
  public function __construct()
  {
		parent::__construct();
		$this->load->model(['Model_gerbang']);
  }

  public function index()
  {
		
			$this->load->model('Model_gerbang');
			$data['data'] = $this->Model_gerbang->get_produk();
			$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
		$data['title'] = 'Gerbang Lamongan - Tempat Jual & Beli Terbaik';

		$this->load->view('blog.php',$data);
	}
	
	
  public function blog_details()
  {
		$data['data'] = $this->Model_gerbang->get_produk();
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
	$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
	$data['title'] = 'Gerbang Lamongan - Tempat Jual & Beli Terbaik';
		$this->load->view('blog_details.php', $data);
  }

}


/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
