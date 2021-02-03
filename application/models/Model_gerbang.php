<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_gerbang extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('tb_penjual')->result_array();
	}
	public function get_artikel()
	{
		$this->db->select('*');
		$this->db->from('tb_artikel');
		$this->db->join('tb_kategori','tb_kategori.id_kat = tb_artikel.id_artikel_kategori');
		$this->db->join('tb_penjual','tb_penjual.id_penjual = tb_artikel.id_penjual_artikel');
		$this->db->join('tb_produk','tb_produk.id_produk = tb_artikel.id_produk_artikel','left');
	  $query = $this->db->get()->result_array();
	  return $query;
	}
	public function get_kategori()
	{
		return $this->db->get('tb_kategori')->result_array();
	}

	public function get_artikel_kategori()
	{
		return $this->db->get('tb_kategori_artikel')->result_array();
	}
	public function breadcrumb($id_produk)
	{
		$query = $this->db->query("select tb_kategori.id_kat,tb_produk.*,tb_kategori.nama_kat from tb_produk join tb_kategori on tb_kategori.id_kat = tb_produk.id_kat WHERE tb_kategori.slug_kat = '$id_produk' LIMIT 1");
		return $query->result();
	}
	public function get_nama_kategori()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->where('jenis_kat', 'Barang');
		$query = $this->db->get();
		return $query;
	}
	public function get_nama_kategori_artikel()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori_artikel');
		$query = $this->db->get();
		return $query;
	}
	public function get_barang($id_produk)
	{
		$query = $this->db->query("select tb_kategori.id_kat,tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual from tb_produk join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual join tb_kategori on tb_kategori.id_kat = tb_produk.id_kat WHERE tb_kategori.slug_kat = '$id_produk'");
		return $query->result();
	}

	public function get_All($id_produk)
	{

		$this->db->select('tb_kategori.id_kat,tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual');
		$this->db->from('tb_produk');
		$this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_produk.id_penjual');
		$this->db->join('tb_kategori', 'tb_kategori.id_kat = tb_produk.id_kat');
		$this->db->where('tb_kategori.slug_kat', $id_produk);

		return $this->db->get();
	}

	public function getIDitems($id)
	{

		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_produk.id_penjual');
		$this->db->where('tb_produk.id_penjual', $id);

		return $this->db->get();
	}


	public function get_published_banner()
	{
		$this->db->from('tb_manajemen_website');
		$this->db->where('published', 'publish');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_penjual_premium()
	{
		$this->db->from('tb_penjual');
		$this->db->where('status_penjual', 'Premium');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_iklan1()
	{
		$this->db->from('tb_iklan1');
		$this->db->where('published', 'publish');
		$query = $this->db->get()->result();
		return $query;
	}
	public function get_iklan2()
	{
		$this->db->from('tb_iklan2');
		$this->db->where('published', 'publish');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_produk()
	{
		$this->db->select('tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual,tb_kategori.slug_kat');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kat = tb_produk.id_kat');
		$this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_produk.id_penjual');
		$this->db->order_by("id_produk", "desc");
		$this->db->limit(8);
		$query = $this->db->get()->result();
		return $query;
	}

	public function hitung_barang($id_produk, $limit, $offset)
	{

		$this->db->select('tb_kategori.id_kat,tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual');
		$this->db->from('tb_produk');
		$this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_produk.id_penjual');
		$this->db->join('tb_kategori', 'tb_kategori.id_kat = tb_produk.id_kat');
		$this->db->where('tb_kategori.slug_kat', $id_produk);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_item($id_item)
	{
		$query = $this->db->query("select tb_produk.*,tb_kategori.nama_kat,tb_penjual.*,tb_kategori.slug_kat from (tb_produk) join (tb_kategori) on tb_kategori.id_kat = tb_produk.id_kat join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual where tb_produk.id_produk = $id_item");
		return $query->result();
	}

	public function random_item($id_item)
	{
		$query = $this->db->query("select tb_produk.*,tb_penjual.nama_penjual from tb_produk join tb_penjual on tb_penjual.id_penjual = tb_produk.id_penjual where id_produk <> $id_item order by rand() limit 4");
		return $query->result();
	}

	public function get_nama_kategori2()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->where('jenis_kat', 'Jasa');
		$query = $this->db->get();
		return $query;
	}



	public function tambah_data_penjual($data)
	{
		$this->db->insert('tb_penjual', $data);
	}

	public function tambah_data_artikel($data)
	{
		$this->db->insert('tb_artikel', $data);
	}

	public function tambahkategori()
	{

		$data = array(
			'nama_kat'  => $this->input->post('nama_kat', true),
			'jenis_kat'  => $this->input->post('jenis_kat', true),
			'slug_kat' => $this->input->post('slug_kat', true)
		);
		$this->db->insert('tb_kategori', $data);
	}

	public function tambahkategori_artikel()
	{

		$data = array(
			'nama_artikel_kategori'  => $this->input->post('nama_artikel_kategori', true),
			'slug_artikel_kategori' => $this->input->post('slug_artikel_kategori', true)
		);
		$this->db->insert('tb_kategori_artikel', $data);
	}
	public function tambahproduk()
	{

		$data = array(
			'nama_produk'  => $this->input->post('nama_produk', true),
			'deskripsi_produk'  => $this->input->post('deskripsi_produk', true),
			'berat_produk' => $this->input->post('berat_produk', true),
			'ukuran_produk'  => $this->input->post('ukuran_produk', true),
			'harga_produk'  => $this->input->post('harga_produk', true),
			'gambar_produk' => $this->input->post('gambar_produk', true),
			'slug_produk' => $this->input->post('slug_produk', true)
		);

		$this->db->insert('tb_produk', $data);
	}
	public function hapusdatapenjual($id_penjual)
	{
		$this->db->where('id_penjual', $id_penjual);
		$this->db->delete('tb_penjual');
	}
	public function hapusdatartikel($id_penjual)
	{
		$this->db->where('id_artikel', $id_penjual);
		$this->db->delete('tb_artikel');
	}
	public function hapuskategori($id_kat)
	{
		$this->db->where('id_kat', $id_kat);
		$this->db->delete('tb_kategori');
	}

	public function hapuskategori_artikel($id_kat)
	{
		$this->db->where('id_artikel_kategori', $id_kat);
		$this->db->delete('tb_kategori_artikel');
	}

	public function getDataByID($id_penjual)
	{
		return $this->db->get_where('tb_penjual', ['id_penjual' => $id_penjual])->row_array();
	}

	public function getDataByIDArtikel($id_penjual)
	{
		$this->db->select('*');
		$this->db->from('tb_artikel');
		$this->db->join('tb_kategori','tb_kategori.id_kat = tb_artikel.id_artikel_kategori');
		$this->db->join('tb_penjual','tb_penjual.id_penjual = tb_artikel.id_penjual_artikel');
	  
		$this->db->where('id_artikel', $id_penjual);
	  
	  $query = $this->db->get();
	  return $query;
	 
	}

	public function getDataByIDKat($id_kat)
	{
		return $this->db->get_where('tb_kategori', ['id_kat' => $id_kat])->row_array();
	}

	public function getDataArtikelByID($id_kat)
	{
		return $this->db->get_where('tb_kategori_artikel', ['id_artikel_kategori' => $id_kat])->row_array();
	}

	public function getDataByIDprod($id_produk)
	{
		return $this->db->get_where('tb_produk', ['id_produk' => $id_produk])->row_array();
	}



	public function ubah_data_penjual($data)
	{
		$this->db->where('id_penjual', $this->input->post('id_penjual'));
		$this->db->update('tb_penjual', $data);
	}

	public function ubah_data_artikel($data)
	{
		$this->db->where('id_artikel', $this->input->post('id_artikel'));
		$this->db->update('tb_artikel', $data);
	}

	public function ubahkategori()
	{

		$data = array(
			'nama_kat'  => $this->input->post('nama_kat', true),
			'jenis_kat'  => $this->input->post('jenis_kat', true),
			'slug_kat' => $this->input->post('slug_kat', true)

		);
		$this->db->where('id_kat', $this->input->post('id_kat'));
		$this->db->update('tb_kategori', $data);
	}

	public function ubahkategori_artikel()
	{

		$data = array(
			'nama_artikel_kategori'  => $this->input->post('nama_artikel_kategori', true),	
			'slug_artikel_kategori' => $this->input->post('slug_artikel_kategori', true)

		);
		$this->db->where('id_artikel_kategori', $this->input->post('id_artikel_kategori'));
		$this->db->update('tb_kategori_artikel', $data);
	}

	public function cari_barang($keyword)
	{
		$this->db->select('tb_produk.*,tb_kategori.nama_kat,tb_penjual.nama_penjual,tb_kategori.slug_kat');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kat = tb_produk.id_kat');
		$this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_produk.id_penjual');
		$this->db->like('nama_produk', $keyword);
		return $this->db->get()->result();
	}
}
