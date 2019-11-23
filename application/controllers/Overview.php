<?php

class Overview extends CI_Controller{
        
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_gerbang');
         $this->load->model(['Model_produk']);
    }
    public function index() {
        $data['title'] = "Dashboard Admin";
        $this->load->view('admin/overview.php',$data);
     
    }
    public function lihatdata(){
        $data['title'] = "Data Penjual";
        $this->load->model('Model_gerbang');
        $data['data']=  $this->Model_gerbang->get_data();  
        $this->load->view('admin/lihat-data.php', $data);
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
    public function tambah(){
        $data['title'] = 'Form Tambah Penjual';
        $this->form_validation->set_rules('nama_penjual','Nama','required');
        $this->form_validation->set_rules('hp_penjual','No HP','integer','required');
        $this->form_validation->set_rules('alamat_penjual','Alamat','required');
       
        $this->form_validation->set_rules('facebook_penjual','Facebook','required');
        $this->form_validation->set_rules('instagram_penjual','Instagram','required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/tambah_penjual');          
            $this->load->view('admin/_partials/footer');
        } else {
           $this->Model_gerbang->tambah_data_penjual();
           $this->session->set_flashdata('flash', 'Data sudah ditambahkan');
           redirect('Overview/lihatdata');
        }
    }

 
    
     public function hapus($id_penjual){
         $this->Model_gerbang->hapusdatapenjual($id_penjual);
         $this->session->set_flashdata('flash','Data Sudah Dihapus');
         redirect('Overview/lihatdata');
     }
     public function edit($id_penjual){
        $data['title'] = 'Form Ubah Penjual';
        $data['data'] = $this->Model_gerbang->getDataByID($id_penjual);
        $data['jk'] = ['Laki-Laki','Perempuan'];

        $this->form_validation->set_rules('nama_penjual','Nama','required');
        $this->form_validation->set_rules('hp_penjual','No HP','integer','required');
        $this->form_validation->set_rules('alamat_penjual','Alamat','required');
        $this->form_validation->set_rules('facebook_penjual','Facebook','required');
        $this->form_validation->set_rules('instagram_penjual','Instagram','required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/ubah_penjual',$data);          
            $this->load->view('admin/_partials/footer');
        } else {
           $this->Model_gerbang->ubah_data_penjual();
           $this->session->set_flashdata('flash', 'Data sudah diubah');
           redirect('Overview/lihatdata');
        }
    }

    public function tambahkategori(){
        $data['title'] = 'Form Tambah Kategori';
        $this->form_validation->set_rules('nama_kat','Nama','required');
        $this->form_validation->set_rules('jenis_kat','Jenis','required');
        $this->form_validation->set_rules('slug_kat','Slug','required');
        $data['jenis'] = ['Barang','Jasa'];
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/tambahkategori');          
            $this->load->view('admin/_partials/footer');
        } else {
           $this->Model_gerbang->tambahkategori();
           $this->session->set_flashdata('flash', 'Data sudah ditambahkan');
           redirect('Overview/lihatkategori');
        }
    }

    public function editkategori($id_kat){
        $data['title'] = 'Form Ubah Kategori';
        $data['data'] = $this->Model_gerbang->getDataByIDKat($id_kat);
        $data['jenis'] = ['Barang','Jasa'];

        $this->form_validation->set_rules('nama_kat','Nama','required');
        $this->form_validation->set_rules('jenis_kat','Jenis','required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/ubah_kat',$data);          
            $this->load->view('admin/_partials/footer');
        } else {
           $this->Model_gerbang->ubahkategori();
           $this->session->set_flashdata('flash', 'Data sudah diubah');
           redirect('Overview/lihatkategori');
        }
    }
    public function hapuskategori($id_kat){
        $this->Model_gerbang->hapuskategori($id_kat);
        $this->session->set_flashdata('flash','Data Sudah Dihapus');
        redirect('Overview/lihatkategori');
    }
    
    public function tambahproduk(){
        $item = new stdClass();
        $item->id_produk = null;
       // $item->id_kat = null;
       // $item->id_penjual = null;
        $item->nama_produk = null;
        $item->deskripsi_produk = null;
        $item->jumlah_produk = null;
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
                redirect('Overview/tambahproduk');
            } else {
                if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('flash','Disimpan');
            }
            redirect('Overview/lihatproduk');
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
            $result = $this->Model_produk->editproduk($post);
     
            if ($result) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('Overview/tambahproduk');
            } else {
                if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('flash','Disimpan');
            }
            redirect('Overview/lihatproduk');
            }     
           
        }
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('flash','Disimpan');
        }
      
        echo "<script>window.location='".site_url('Overview/lihatproduk')."';</script>";
    
    }

    public function editproduk($id){
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
         
            echo "<script>window.location='".site_url('Overview/lihatproduk')."';</script>";
        }
    }

    public function hapusproduk($id_produk){
        $this->Model_produk->hapusproduk($id_produk);
       $this->session->set_flashdata('flash','Data Sudah Dihapus');
       redirect('Overview/lihatproduk');
    }
}

?>