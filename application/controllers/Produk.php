<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller{

    public function __construct(){
     
        parent::__construct();
        $this->load->model(['Model_produk']);
        
     
    }
       
    
    public function lihatpenjual(){
        $data['title'] = 'Data penjual';
         $data['row'] = $this->Model_produk->get_penjual();
       
    }
    public function lihatproduk(){
        $data['title'] = 'Data Produk';
         $data['row'] = $this->Model_produk->get();
       $this->load->view('admin/lihatproduk',$data);
    }
    public function lihatkategori(){
        $data['title'] = 'Data Kategori';
         $data['row'] = $this->Model_produk->get_kategori();
    }
    

    public function tambahproduk(){
        $item = new stdClass();
        $item->id_produk = null;
       // $item->id_kat = null;
       // $item->id_penjual = null;
        $item->nama_produk = null;
        $item->deskripsi_produk = null;
        $item->berat_produk = null;
        $item->ukuran_produk = null;
        $item->harga_produk = null;
        $item->gambar_produk = null;
        $item->thumb_produk1 = null;
        $item->thumb_produk2 = null;
        $item->thumb_produk3 = null;
   
        $item->slug_produk = null;
        
        $kategori = $this->Model_produk->get_kategori();
        $penjual= $this->Model_produk->get_penjual();
        
        $data = array(
                    'page' => 'tambahproduk',
                    'row' => $item,
                    'kategori' => $kategori,
                     'penjual' => $penjual
        );
        $data['title'] = 'Form Tambah Produk';
        $this->load->view('admin/_partials/head',$data);
        $this->load->view('admin/_partials/navbar_add');
        $this->load->view('admin/tambahproduk', $data);          
        $this->load->view('admin/_partials/footer');
    
    }

    public function process(){

        $post = $this->input->post(null, TRUE);
        if(isset($_POST['tambahproduk']))
        {
            $data = array();

                
            $config['upload_path'] = './assets/upload/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2400';
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';
   

            $this->load->library('upload', $config);
     
            $post['gambar_produk'] = $this->input->post('gambar_produk');
            $post['thumb_produk1'] = $this->input->post('thumb_produk1');
            $post['thumb_produk2'] = $this->input->post('thumb_produk2');
            $post['thumb_produk3'] = $this->input->post('thumb_produk3');
       
            if (!$this->upload->do_upload('gambar_produk')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $fileData = $this->upload->data();
                $post['gambar_produk'] = $fileData['file_name'];
            }

            if (!$this->upload->do_upload('thumb_produk1')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk1'] = $fileData['file_name'];
            
            }

            if (!$this->upload->do_upload('thumb_produk2')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk2'] = $fileData['file_name'];
            
            }

            if (!$this->upload->do_upload('thumb_produk3')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk3'] = $fileData['file_name'];
            
            }

          
            // Verify the data using print_r($data); die;
            // print_r($post);
            // die;
            $result = $this->Model_produk->tambahproduk($post);
     
            if ($result) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('Produk/tambahproduk');
            } else {
                if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('flash','Disimpan');
            }
            redirect('Produk/lihatproduk');
            }     
            
  
        } else if(isset($_POST['editproduk'])) {

            $config['upload_path'] = './assets/upload/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2400';
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';
   

            $this->load->library('upload', $config);
     
            $post['gambar_produk'] = $this->input->post('gambar_produk');
            $post['thumb_produk1'] = $this->input->post('thumb_produk1');
            $post['thumb_produk2'] = $this->input->post('thumb_produk2');
            $post['thumb_produk3'] = $this->input->post('thumb_produk3');
       
            if (!$this->upload->do_upload('gambar_produk')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $fileData = $this->upload->data();
                $post['gambar_produk'] = $fileData['file_name'];
            }

            if (!$this->upload->do_upload('thumb_produk1')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk1'] = $fileData['file_name'];
            
            }

            if (!$this->upload->do_upload('thumb_produk2')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk2'] = $fileData['file_name'];
            
            }

            if (!$this->upload->do_upload('thumb_produk3')) {
                $error = array('error' => $this->upload->display_errors()); 
                
            } else {
                $fileData = $this->upload->data();
                $post['thumb_produk3'] = $fileData['file_name'];
            
            }

          
            // Verify the data using print_r($data); die;
            // print_r($post);
            // die;
            $result = $this->Model_produk->edit($post);
     
            if ($result) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('Produk/tambahproduk');
            } else {
                if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('flash','Disimpan');
            }
            redirect('Produk/lihatproduk');
            }     
           
        }
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('flash','Disimpan');
        }
      
        echo "<script>window.location='".site_url('Produk/lihatproduk')."';</script>";
    
    }

    public function edit($id){
        $query = $this->Model_produk->get($id);
        $kategori = $this->Model_produk->get_kategori();
        $penjual = $this->Model_produk->get_penjual();
        if ($query->num_rows() > 0){
            $produk = $query->row();
            $data = array (
                'page' => 'editproduk',
                'row' => $produk,
                'kategori' => $kategori,
                'penjual' => $penjual
            );
            $data['title'] = 'Form Edit Produk';
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/tambahproduk', $data);          
            $this->load->view('admin/_partials/footer');
            $this->load->view('admin/_partials/js');
        } else {
            echo "<script>alert('Data tidak ditemukan!');</script>";   
         
            echo "<script>window.location='".site_url('Produk/lihatproduk')."';</script>";
        }
    }

    public function hapusproduk($id_produk){
        $this->Model_produk->hapusproduk($id_produk);
       $this->session->set_flashdata('flash','Data Sudah Dihapus');
       redirect('Produk/lihatproduk');
    }

}

?>
