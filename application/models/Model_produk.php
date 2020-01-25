<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_produk extends CI_Model{

        
    public function __construct(){
        parent::__construct();
        $this->load->database();
        
    }
    
    public function get_penjual($id_penjual = null){
      $this->db->from('tb_penjual');
      if($id_penjual != NULL) {
        $this->db->where('id_penjual', $id_penjual);
      }
      $query = $this->db->get();
      return $query;
    }
    public function get_kategori($id_kat = null){
      $this->db->from('tb_kategori');
      if($id_kat!= NULL) {
        $this->db->where('id_kat', $id_kat);
      }
      $query = $this->db->get();
      return $query;
   }
    public function get($id_produk = null){
      $this->db->select('tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual,tb_kategori.slug_kat');
      $this->db->from('tb_produk');
      $this->db->join('tb_kategori','tb_kategori.id_kat = tb_produk.id_kat');
      $this->db->join('tb_penjual','tb_penjual.id_penjual = tb_produk.id_penjual');
    if($id_produk != NULL) {
      $this->db->where('id_produk', $id_produk);
    }
    $query = $this->db->get();
    return $query;
 
  }
 

 public function tambahproduk($post){
  $data = [
                  'nama_produk'  => $post['nama_produk'],
                  'id_kat'  => $post['kategori'],
                      'id_penjual'  => $post['penjual'],
                  'deskripsi_produk'  => $post['deskripsi_produk'],
                  'berat_produk' => $post['berat_produk'],
                  'ukuran_produk'  => $post['ukuran_produk'],
                  'harga_produk'  => $post['harga_produk'],
                 'gambar_produk' => $post['gambar_produk'],
                'thumb_produk1' => $post['thumb_produk1'],
                'thumb_produk2' => $post['thumb_produk2'],
                'thumb_produk3' => $post['thumb_produk3'],                   
                'slug_produk' => $post['slug_produk']
                
   ];
 
   $this->db->insert('tb_produk',$data);
  
  }

  public function edit($post){
    $data = [
      'nama_produk'  => $post['nama_produk'],
      'id_kat'  => $post['kategori'],
         'id_penjual'  => $post['penjual'],
      'deskripsi_produk'  => $post['deskripsi_produk'],
      'berat_produk' => $post['berat_produk'],
     'ukuran_produk'  => $post['ukuran_produk'],
     'harga_produk'  => $post['harga_produk'],
     'gambar_produk' => $post['gambar_produk'],
     'thumb_produk1' => $post['thumb_produk1'],
     'thumb_produk2' => $post['thumb_produk2'],
     'thumb_produk3' => $post['thumb_produk3'], 
    'slug_produk' => $post['slug_produk']
     
];
     $this->db->where('id_produk', $post['id_produk']);
     $this->db->update('tb_produk',$data);
    
    }

  public function getDataByIDprod($id_produk){
    return $this->db->get_where('tb_produk', ['id_produk' => $id_produk]) -> row_array();
  }
  public function hapusproduk($id_produk){
   $this->db->where('id_produk', $id_produk);
  $this->db->delete('tb_produk');
 }
}



