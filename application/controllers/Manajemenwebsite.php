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
				
				if ($this->input->post('tipe_iklan') == 'banner'){
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
			} else 	if ($this->input->post('tipe_iklan') == 'iklan1'){
			
				$post['gambar_iklan1'] = $this->input->post('gambar_iklan1');
		
				if (!$this->upload->do_upload('gambar_iklan1')) {
						$error = array('error' => $this->upload->display_errors());
				} else {
						$fileData = $this->upload->data();
						$post['gambar_iklan1'] = $fileData['file_name'];
				}			
				// Verify the data using print_r($data); die;
				// print_r($post);
				// die;
				
				$result = $this->Model_produk->uploadiklan1($post);
 				
				if ($result) {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('Overview/iklan1');
				} else {
						if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('flash','Disimpan');
				}
				redirect('Overview/iklan1');
				} 
			}
			else 	if ($this->input->post('tipe_iklan') == 'iklan2'){
			
				$post['gambar_iklan2'] = $this->input->post('gambar_iklan2');
		
				if (!$this->upload->do_upload('gambar_iklan2')) {
						$error = array('error' => $this->upload->display_errors());
				} else {
						$fileData = $this->upload->data();
						$post['gambar_iklan2'] = $fileData['file_name'];
				}			
				// Verify the data using print_r($data); die;
				// print_r($post);
				// die;
				
				$result = $this->Model_produk->uploadiklan2($post);
 				
				if ($result) {
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('Overview/iklan2');
				} else {
						if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('flash','Disimpan');
				}
				redirect('Overview/iklan2');
				} 
			}
		}
	}


	public function publishbanner($id_iklan)
	{
		$tipe = 'banner';
		$this->Model_produk->publish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Publish');
		redirect('Overview/manajemenwebsite');
	}
	public function dontpublishbanner($id_iklan)
	{
		$tipe = 'banner';
		$this->Model_produk->dontpublish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Batalkan');
		redirect('Overview/manajemenwebsite');
	}

	
	public function hapusbanner($id_iklan)
	{
		$tipe = 'banner';
		$this->Model_produk->hapusbanner($id_iklan, $tipe);
		$this->session->set_flashdata('flash', 'Data Sudah Dihapus');
		redirect('Overview/manajemenwebsite');
	}

	public function publishiklan1($id_iklan)
	{
		$tipe = 'iklan1';
		$this->Model_produk->publish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Publish');
		redirect('Overview/iklan1');
	}
	public function publishiklan2($id_iklan)
	{
		$tipe = 'iklan2';
		$this->Model_produk->publish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Publish');
		redirect('Overview/iklan2');
	}

	public function dontpublishiklan1($id_iklan)
	{
		$tipe = 'iklan1';
		$this->Model_produk->dontpublish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Batalkan');
		redirect('Overview/iklan1');
	}

	public function dontpublishiklan2($id_iklan)
	{
		$tipe = 'iklan2';
		$this->Model_produk->dontpublish($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'di Batalkan');
		redirect('Overview/iklan2');
	}

	public function hapusiklan1($id_iklan)
	{
		$tipe = 'iklan1';
		$this->Model_produk->hapusbanner($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'Data Sudah Dihapus');
		redirect('Overview/iklan1');
	}

	public function hapusiklan2($id_iklan)
	{
		$tipe = 'iklan2';
		$this->Model_produk->hapusbanner($id_iklan,$tipe);
		$this->session->set_flashdata('flash', 'Data Sudah Dihapus');
		redirect('Overview/iklan2');
	}
}


/* End of file Manajemenwebsite.php */
/* Location: ./application/controllers/Manajemenwebsite.php */
