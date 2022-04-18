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

	// public function getAsc()
	// {
	// 	$this->db->select('*'); 
	// 	$this->db->from('produk');
	// 	// $this->db->where('kategori', 'iphone');
	// 	$this->db->order_by('harga', 'asc');
	// 	return $this->db->get('product')->result();
	// }

	// public function getDesc()
	// {
	// 	$this->db->select('*'); 
	// 	$this->db->from('produk');
	// 	// $this->db->where('kategori', 'iphone');
	// 	$this->db->order_by('harga', 'desc');
	// 	return $this->db->get('product')->result();
	// }

	
	public function getAscip()
	{
		
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'iphone');
		$this->db->order_by('harga', 'asc');
		$query = $this->db->get();

		return $query->result_array();

		// $this->db->order_by('harga', 'ASC');
		// return $this->db->get('produk')->result();

		// $this->db->order_by('harga', 'ASC');
    	// $query = $this->db->get('produk');
    	// return $query->result();

		// $this->db->select('produk.*');
        // $this->db->from('produk');

        // //filter data sesuai id yang dikirim dari controller
		// if($harga != '') {
		// 	$this->db->where('produk.harga', $harga);
		// }
 
        // $this->db->order_by('produk.harga ASC');

		// $query = $this->db->get();

		// //$query->result_array = mengirim data ke controller dalam bentuk semua data
        // return $query->result_array();
	}

	public function getDescip()
	{
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'iphone');
		$this->db->order_by('harga', 'desc');
		$query = $this->db->get();

		return $query->result_array();

	}
 
	public function getAscmac()
	{
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'macbook');
		$this->db->order_by('harga', 'asc');
		$query = $this->db->get();

		return $query->result_array();

	}

	public function getDescmac()
	{
		$this->db->select('*'); 
		$this->db->from('produk');
		$this->db->where('kategori', 'macbook');
		$this->db->order_by('harga', 'desc');
		$query = $this->db->get();

		return $query->result_array();

	}

}