<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table admin di database
	public function read() {

		//sql read
		$this->db->select('*'); 
		$this->db->from('admin');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table admin di database
	public function read_single($username, $password) {

		//sql read
		$this->db->select('*');
		$this->db->from('admin');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get();
		 
		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	public function read_single_data($id) {

		//sql read
		$this->db->select('*');
		$this->db->from('admin');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table admin di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('admin', $input);
	}

	//function update berfungsi merubah data ke table admin di database
	public function update($input, $id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('admin', $input);
	}

	//function delete berfungsi menghapus data dari table admin di database
	public function delete($id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id', $id);
		return $this->db->delete('admin');
	}

	function jml_pengunjung()
	{
		$query = $this->db->get('pengunjung');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	function jml_iphone()
	{
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'iphone');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	function jml_macbook()
	{
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'macbook');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
}