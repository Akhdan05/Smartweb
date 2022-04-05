<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukutamu_model extends CI_Model {

	public function insert($input) {
		return $this->db->insert('pengunjung', $input);
	}

	public function read() {

		//sql read
		$this->db->select('*');
		$this->db->from('pengunjung');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table pengunjung di database
	public function read_single($id) {

		//sql read  
		$this->db->select('*');
		$this->db->from('pengunjung');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}
}