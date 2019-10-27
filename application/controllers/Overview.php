<?php

class Overview extends CI_Controller{
        
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_gerbang');
        
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
    public function lihatproduk(){
        $data['title'] = "Data Produk";
        $this->load->model('Model_gerbang');
        $data['data']=  $this->Model_gerbang->get_produk();  
       
        // $data = array( 'data' => $data );
        $this->load->view('admin/lihatproduk.php', $data);
    }
    public function lihatkategori(){
        $data['title'] = "Data Kategori";
        $this->load->model('Model_gerbang');
        $data['data']= $this->Model_gerbang->get_kategori();  
        $this->load->view('admin/lihatkategori.php', $data);
       
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

    public function tambahproduk(){
        $data['title'] = 'Form Tambah Produk';
        $data['kategori'] = $this->Model_gerbang->get_produk();

        $this->form_validation->set_rules('nama_produk','Nama','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/_partials/head',$data);
            $this->load->view('admin/_partials/navbar_add');
            $this->load->view('admin/tambahproduk', $data);          
            $this->load->view('admin/_partials/footer');
            var_dump($data);
        } else {
           $this->Model_gerbang->tambahproduk();
           $this->session->set_flashdata('flash', 'Data sudah ditambahkan');
           redirect('Overview/lihatproduk');
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
}

?>