<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registrasi extends CI_Controller{
   public function __construct(){
      parent::__construct();
      $this->load->model('Model_gerbang');
       $this->load->model(['Model_produk']);
  }
    public function index(){
    
      $this->form_validation->set_rules('nama_penjual','Nama','required');
      $this->form_validation->set_rules('hp_penjual','No HP','numeric','required');
      $this->form_validation->set_rules('alamat_penjual','Alamat','required');
      $this->form_validation->set_rules('no_ktp','Nomor KTP','required');
 
      $this->form_validation->set_rules('facebook_penjual','Facebook','required');
      $this->form_validation->set_rules('instagram_penjual','Instagram','required');

    

      if($this->form_validation->run() == FALSE){
          $this->load->view('formregistrasi.php');
      } else {
          $config['upload_path'] = './assets/upload/images/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']  = '2400';
      $config['max_width']  = '2024';
      $config['max_height']  = '2024';

      $this->load->library('upload', $config);
      $this->upload->initialize($config);
              
             if ( ! $this->upload->do_upload('foto_ktp'))
             {
                     $error = array('error' => $this->upload->display_errors());
                     print_r($error);
             }
             else
             {
              $fileData = $this->upload->data();
              $post['foto_ktp'] = $fileData['file_name'];
             }
       $gambar = $post['foto_ktp'];
          $data = array(
              'nama_penjual'  => $this->input->post('nama_penjual', true), 
              'alamat_penjual'  => $this->input->post('alamat_penjual', true), 
             'hp_penjual' => $this->input->post('hp_penjual', true), 
             'jk_penjual' => $this->input->post('jk_penjual'),
             'facebook_penjual' => $this->input->post('facebook_penjual', true),
             'no_ktp' => $this->input->post('no_ktp', true),
             'instagram_penjual' => $this->input->post('instagram_penjual', true),
             'foto_ktp' => $gambar
         );
        
         $this->Model_gerbang->tambah_data_penjual($data);
         $this->session->set_flashdata('flash', 'Terimakasih telah mendaftarkan diri Anda, kami akan menghubungi Anda secepatnya');
         $this->load->view('formsetelahregistrasi.php');
      }
   }
  
}
?>
