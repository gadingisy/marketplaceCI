<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_gerbang extends CI_Model{
    public function get_data(){
       return $this->db->get('tb_penjual')->result_array();
    }
    public function get_kategori(){
      return $this->db->get('tb_kategori')->result_array();
   }

   public function get_nama_kategori(){
    $this->db->select('*');
    $this->db->from('tb_kategori');
    $this->db->where('jenis_kat', 'Barang');
  $query = $this->db->get();
  return $query;
 }
 public function get_barang($id_produk){
$query = $this->db->query("select tb_kategori.id_kat,tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual from tb_produk join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual join tb_kategori on tb_kategori.id_kat = tb_produk.id_kat WHERE tb_kategori.slug_kat = '$id_produk'");

return $query->result();

}

public function get_item($id_item){
  $query = $this->db->query("select tb_produk.*,tb_kategori.nama_kat,tb_penjual.*,tb_kategori.slug_kat from (tb_produk) join (tb_kategori) on tb_kategori.id_kat = tb_produk.id_kat join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual where tb_produk.id_produk = $id_item");
  return $query->result();
  }

public function random_item($id_item){
  $query = $this->db->query("select tb_produk.*,tb_penjual.nama_penjual from tb_produk join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual where id_produk <> $id_item order by rand() limit 4");
  return $query->result();
}

 public function get_nama_kategori2(){
  $this->db->select('*');
  $this->db->from('tb_kategori');
  $this->db->where('jenis_kat','Jasa');
$query = $this->db->get();
return $query;
}
   
   public function get_produk(){
    $this->db->select('tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual,tb_kategori.slug_kat');
    $this->db->from('tb_produk');
    $this->db->join('tb_kategori','tb_kategori.id_kat = tb_produk.id_kat');
    $this->db->join('tb_penjual','tb_penjual.id_penjual = tb_produk.id_penjual');
    $this->db->order_by("id_produk", "desc");
    $this->db->limit(8); 
  $query = $this->db->get();
  return $query;
 }

   public function tambah_data_penjual($data){

   
    $this->db->insert('tb_penjual',$data);
  }
    public function tambahkategori(){

      $data = array(
                     'nama_kat'  => $this->input->post('nama_kat', true),
                     'jenis_kat'  => $this->input->post('jenis_kat', true),
                     'slug_kat' => $this->input->post('slug_kat',true)
                );
      $this->db->insert('tb_kategori',$data);
    }
    public function tambahproduk(){

      $data = array(
                     'nama_produk'  => $this->input->post('nama_produk', true),
                    
                     'deskripsi_produk'  => $this->input->post('deskripsi_produk', true),
                     'jumlah_produk' => $this->input->post('jumlah_produk',true),
                     'ukuran_produk'  => $this->input->post('ukuran_produk', true),
                     'harga_produk'  => $this->input->post('harga_produk', true),
                     'gambar_produk' => $this->input->post('gambar_produk',true),
                     'slug_produk' => $this->input->post('slug_produk',true)
                );
                
      $this->db->insert('tb_produk',$data);
    }
    public function hapusdatapenjual($id_penjual){
       $this->db->where('id_penjual', $id_penjual);
       $this->db->delete('tb_penjual');
     }
     public function hapuskategori($id_kat){
      $this->db->where('id_kat', $id_kat);
      $this->db->delete('tb_kategori');
    }

     public function getDataByID($id_penjual){
       return $this->db->get_where('tb_penjual', ['id_penjual' => $id_penjual]) -> row_array();
     }

     public function getDataByIDKat($id_kat){
      return $this->db->get_where('tb_kategori', ['id_kat' => $id_kat]) -> row_array();
    }
    public function getDataByIDprod($id_produk){
      return $this->db->get_where('tb_produk', ['id_produk' => $id_produk]) -> row_array();
    }

   

     public function ubah_data_penjual($data){

   
      $this->db->where('id_penjual', $this->input->post('id_penjual'));
      $this->db->update('tb_penjual',$data);
    }
  
    public function ubahkategori(){

      $data = array(
                      'nama_kat'  => $this->input->post('nama_kat', true),
                      'jenis_kat'  => $this->input->post('jenis_kat', true),
                      'slug_kat' => $this->input->post('slug_kat',true)
                    
                );
      $this->db->where('id_kat', $this->input->post('id_kat'));
      $this->db->update('tb_kategori',$data);
    }



}
