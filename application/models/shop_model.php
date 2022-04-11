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
}