<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop_model extends CI_Model {

    public function read() {

		$this->db->select('*');
		$this->db->from('produk');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function detail($id = NULL) {
		$query = $this->db->get_where('produk', array('id' => $id));

        return $query->row_array();
	}

		function read_iphone() {
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'iphone');
		$query = $this->db->get();

		return $query->result_array();
	}

	function read_macbook() {
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'macbook');
		$query = $this->db->get();

		return $query->result_array();
	}

	function jml_iphone() {
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

	function jml_macbook() {
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