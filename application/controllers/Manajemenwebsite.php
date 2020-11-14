<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Manajemenwebsite
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Manajemenwebsite extends CI_Controller
{
    
	public function __construct(){
     
		parent::__construct();
		$this->load->model(['Model_produk']);
		
 
}

	public function uploadbanner(){

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['uploadbanner']))
		{
				$data = array();		
				$config['upload_path'] = './assets/upload/images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']  = '2400';
				$config['max_width']  = '2024';
				$config['max_height']  = '2024';
				$this->load->library('upload', $config);
 
				$post['hero_iklan'] = $this->input->post('hero_iklan');
		
				if (!$this->upload->do_upload('hero_iklan')) {
						$error = array('error' => $this->upload->display_errors());
				} else {
						$fileData = $this->upload->data();
						$post['hero_iklan'] = $fileData['file_name'];
				}			
				// Verify the data using print_r($data); die;
				// print_r($post);
				// die;
				$result = $this->Model_produk->uploadbanner($post);
 				
				if ($result) {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('Overview/manajemenwebsite');
				} else {
						if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('flash','Disimpan');
				}
				redirect('Overview/manajemenwebsite');
				}     
		}
	}

	public function hapusbanner($id_iklan)
	{
		$this->Model_produk->hapusbanner($id_iklan);
		$this->session->set_flashdata('flash', 'Data Sudah Dihapus');
		redirect('Overview/manajemenwebsite');
	}

	public function publishbanner($id_iklan)
	{
		$this->Model_produk->publish($id_iklan);
		$this->session->set_flashdata('flash', 'di Publish');
		redirect('Overview/manajemenwebsite');
	}
	public function dontpublishbanner($id_iklan)
	{
		$this->Model_produk->dontpublish($id_iklan);
		$this->session->set_flashdata('flash', 'di Batalkan');
		redirect('Overview/manajemenwebsite');
	}

}


/* End of file Manajemenwebsite.php */
/* Location: ./application/controllers/Manajemenwebsite.php */
