
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
		$this->load->model('Model_gerbang');
			// Per page limit
		$this->perPage = 4;
        
    }
    public function index($id_item){
		$this->load->model('Model_gerbang');
		$data['row']= $this->Model_gerbang->get_nama_kategori();  
		$data['row2']= $this->Model_gerbang->get_nama_kategori2();  
        $data['item'] = $this->Model_gerbang->get_item($id_item);
        $data['randomdata'] = $this->Model_gerbang->random_item($id_item);
        $this->load->view('product-details.php',$data);
	}
	
	
}

?>
