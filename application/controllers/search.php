
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller{

    public function __construct(){
     
        parent::__construct();
        $this->load->model(['Model_gerbang']);
    }
	   
public function index(){
	$this->load->view('cari_produk');
}
  
}

?>
