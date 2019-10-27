<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_gerbang2 extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('tb_penjual')->result();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		$this->form_validation->set_rules('id_penjual', 'id_penjual', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('nama_penjual', 'nama_penjual', 'required|max_length[50]');
		$this->form_validation->set_rules('alamat_penjual', 'alamat_penjual', 'required');
		$this->form_validation->set_rules('hp_penjual', 'hp_penjual', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('jk_penjual', 'jk_penjual', 'required');
		$this->form_validation->set_rules('facebook_penjual', 'facebook_penjual', 'required');
		$this->form_validation->set_rules('instagram_penjual', 'instagram_penjual', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"nama_penjual" => $this->input->post('nama_penjual'),
			"alamat_penjual" => $this->input->post('alamat_penjual'),
			"hp_penjual" => $this->input->post('hp_penjual'),
			"jk_penjual" => $this->input->post('jk_penjual'),
			"facebook_penjual" => $this->input->post('facebook_penjual'),
			"instagram_penjual" => $this->input->post('instagram_penjual')
		);

		$this->db->insert('tb_penjual', $data); // Untuk mengeksekusi perintah insert data
	}

	// // Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	// public function edit($id){
	// 	$data = array(
	// 		"nis" => $this->input->post('input_nis'),
	// 		"nama" => $this->input->post('input_nama'),
	// 		"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
	// 		"telp" => $this->input->post('input_telp'),
	// 		"alamat" => $this->input->post('input_alamat')
	// 	);

	// 	$this->db->where('id', $id);
	// 	$this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
	// }

	// // Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	// public function delete($id){
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
	// }
}
