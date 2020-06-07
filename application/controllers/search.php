
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller{

    public function __construct(){
     
        parent::__construct();
        $this->load->model(['Model_gerbang']);
    }

	public function index(){

		$keyword = $this->input->post('keyword');
		$this->load->model('Model_gerbang');
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
		$data['products']=$this->Model_gerbang->cari_barang($keyword);

		

		$this->load->view('searchView',$data);
	}
  
}

?>
