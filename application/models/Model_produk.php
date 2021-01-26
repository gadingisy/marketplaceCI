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
	public function get_artikel($id_artikel = null){
		$this->db->from('tb_artikel');
		if($id_penjual != NULL) {
		  $this->db->where('id_artikel', $id_artikel);
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
//  print_r($this->db->last_query());
// 	die;
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


 public function getbanner($tipe){
	if ($tipe == 'banner'){
		$this->db->from('tb_manajemen_website');
		$query = $this->db->get();
		return $query;
	} else if ($tipe == 'iklan1' ){
		$this->db->from('tb_iklan1');
		$query = $this->db->get();
		return $query;
	} else if($tipe == 'iklan2'){
		$this->db->from('tb_iklan2');
		$query = $this->db->get();
		return $query;
	}

}
 
 public function uploadbanner($post){
  $data = [
                  'hero_iklan'  => $post['hero_iklan'],
                  'alt_hero'  => $post['alt_hero']
   ];
 
 $this->db->insert('tb_manajemen_website',$data);
	}

	
	public function uploadiklan1($post){
	
		$data = [
										'gambar_iklan1'  => $post['gambar_iklan1'],
										'alt_iklan1'  => $post['alt_iklan1']
		 ];
	 
	 $this->db->insert('tb_iklan1',$data);
		}

	public function uploadiklan2($post){
	
		$data = [
			'gambar_iklan2'  => $post['gambar_iklan2'],
			'alt_iklan2'  => $post['alt_iklan2']
		 ];
	 
	 $this->db->insert('tb_iklan2',$data);
	}

		public function hapusbanner($id_iklan,$tipe){
			if ($tipe == 'banner'){
			$this->db->where('id_iklan', $id_iklan);
			$this->db->delete('tb_manajemen_website');
			} else if($tipe == 'iklan1'){
				$this->db->where('id_iklan1', $id_iklan);
				$this->db->delete('tb_iklan1');
			} else if($tipe == 'iklan2'){
				$this->db->where('id_iklan2', $id_iklan);
				$this->db->delete('tb_iklan2');
			}
		}
	
	
	public function publish($id,$tipe)
	{
		if ($tipe == 'banner'){
		$publish_status = array('published' => 'publish');    
		$this->db->where('id_iklan', $id);
		$this->db->update('tb_manajemen_website', $publish_status); 
		} else if($tipe == 'iklan1'){
			$publish_status = array('published' => 'publish');    
			$this->db->where('id_iklan1', $id);
			$this->db->update('tb_iklan1', $publish_status); 
		} else if($tipe == 'iklan2'){
			$publish_status = array('published' => 'publish');    
			$this->db->where('id_iklan2', $id);
			$this->db->update('tb_iklan2', $publish_status); 
		}
		
		}
		public function dontpublish($id,$tipe)
	{
		if ($tipe == 'banner'){
		$publish_status = array('published' => 'batal');    
		$this->db->where('id_iklan', $id);
		$this->db->update('tb_manajemen_website', $publish_status); 
	} else if($tipe == 'iklan1'){
		$publish_status = array('published' => 'batal');    
		$this->db->where('id_iklan1', $id);
		$this->db->update('tb_iklan1', $publish_status); 
	} else if($tipe == 'iklan2'){
		$publish_status = array('published' => 'batal');    
		$this->db->where('id_iklan2', $id);
		$this->db->update('tb_iklan2', $publish_status); 
	}
		
		}
		
}
