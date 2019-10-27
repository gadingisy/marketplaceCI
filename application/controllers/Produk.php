
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
        $item->jumlah_produk = null;
        $item->ukuran_produk = null;
        $item->harga_produk = null;
        $item->gambar_produk = null;
        $item->thumb_produk1 = null;
        $item->slug_produk = null;
        
      
        
        // $config['upload_path'] = './assets/upload/images/thumbs';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size']  = '2400';
        // // $config['max_width']  = '2024';
        // // $config['max_height']  = '2024';
        
        // $this->load->library('upload', $config);
        
        // if ( ! $this->upload->do_upload('gambar_produk')){
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/lihatproduk', $error);
        // }
        // else{
        // $file = $this->upload->data();
        
    
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
            $config['upload_path'] = './assets/upload/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '2400';
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';
       
            $gambar_produk = "gambar_produk";

            $this->load->library('upload', $config);

       
                    if ($this->upload->do_upload('gambar_produk')){

                        $post['gambar_produk'] = $this->upload->data('file_name');
                        $this->Model_produk->tambahproduk($post);                
                            if($this->db->affected_rows() > 0){
                                $this->session->set_flashdata('flash','Disimpan');
                            }
                            redirect('Produk/lihatproduk');
                            
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->flashdata('error', $error);
                        redirect('Produk/tambahproduk');
                    }
                    // } else {
                       
                    //     $post['gambar_produk'] = $this->upload->data['file_name'];
                    //     $this->Model_produk->tambahproduk($post);                
                    //         if($this->db->affected_rows() > 0){
                    //             $this->session->set_flashdata('flash','Disimpan');
                    //         }
                    //         redirect('Produk/lihatproduk');
                
        } else if(isset($_POST['editproduk'])) {
            $this->Model_produk->edit($post);
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
    
    
    //  public function hapus($id_penjual){
    //      $this->Model_gerbang->hapusdatapenjual($id_penjual);
    //      $this->session->set_flashdata('flash','Data Sudah Dihapus');
    //      redirect('Overview/lihatdata');
    //  }
    //  public function edit($id_penjual){
    //     $data['title'] = 'Form Ubah Penjual';
    //     $data['data'] = $this->Model_gerbang->getDataByID($id_penjual);
    //     $data['jk'] = ['Laki-Laki','Perempuan'];

    //     $this->form_validation->set_rules('nama_penjual','Nama','required');
    //     $this->form_validation->set_rules('hp_penjual','No HP','integer','required');
    //     $this->form_validation->set_rules('alamat_penjual','Alamat','required');
    //     $this->form_validation->set_rules('facebook_penjual','Facebook','required');
    //     $this->form_validation->set_rules('instagram_penjual','Instagram','required');
    //     if($this->form_validation->run() == FALSE){
    //         $this->load->view('admin/_partials/head',$data);
    //         $this->load->view('admin/_partials/navbar_add');
    //         $this->load->view('admin/ubah_penjual',$data);          
    //         $this->load->view('admin/_partials/footer');
    //     } else {
    //        $this->Model_gerbang->ubah_data_penjual();
    //        $this->session->set_flashdata('flash', 'Data sudah diubah');
    //        redirect('Overview/lihatdata');
    //     }
    // }

    // public function tambahkategori(){
    //     $data['title'] = 'Form Tambah Kategori';
    //     $this->form_validation->set_rules('nama_kat','Nama','required');
    //     $this->form_validation->set_rules('jenis_kat','Jenis','required');
    //     $this->form_validation->set_rules('slug_kat','Slug','required');
    //     $data['jenis'] = ['Barang','Jasa'];
    //     if($this->form_validation->run() == FALSE){
    //         $this->load->view('admin/_partials/head',$data);
    //         $this->load->view('admin/_partials/navbar_add');
    //         $this->load->view('admin/tambahkategori');          
    //         $this->load->view('admin/_partials/footer');
    //     } else {
    //        $this->Model_gerbang->tambahkategori();
    //        $this->session->set_flashdata('flash', 'Data sudah ditambahkan');
    //        redirect('Overview/lihatkategori');
    //     }
    // }

    // public function editkategori($id_kat){
    //     $data['title'] = 'Form Ubah Kategori';
    //     $data['data'] = $this->Model_gerbang->getDataByIDKat($id_kat);
    //     $data['jenis'] = ['Barang','Jasa'];

    //     $this->form_validation->set_rules('nama_kat','Nama','required');
    //     $this->form_validation->set_rules('jenis_kat','Jenis','required');
    //     if($this->form_validation->run() == FALSE){
    //         $this->load->view('admin/_partials/head',$data);
    //         $this->load->view('admin/_partials/navbar_add');
    //         $this->load->view('admin/ubah_kat',$data);          
    //         $this->load->view('admin/_partials/footer');
    //     } else {
    //        $this->Model_gerbang->ubahkategori();
    //        $this->session->set_flashdata('flash', 'Data sudah diubah');
    //        redirect('Overview/lihatkategori');
    //     }
    // }
    // public function hapuskategori($id_kat){
    //     $this->Model_gerbang->hapuskategori($id_kat);
    //     $this->session->set_flashdata('flash','Data Sudah Dihapus');
    //     redirect('Overview/lihatkategori');
    // }
  
}

?>