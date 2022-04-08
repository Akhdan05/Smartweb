<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengunjung_model extends CI_Model
{

	//function read berfungsi mengambil/read data dari table pengunjung di database

	public function read()
	{

		//sql read
		$this->db->select('*');
		$this->db->from('pengunjung');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table pengunjung di database
	public function read_single($id)
	{

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

	public function insert($input)
	{
		return $this->db->insert('pengunjung', $input);
	}

	public function insert_notif($notif)
	{
		return $this->db->insert('notif', $notif);
	}

	//function read berfungsi mengambil/read data dari table admin di database
	public function read_notif()
	{

		//sql read
		$this->db->select('*');
		$this->db->from('notif');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}

		public function count_notif()
	{
		$query = $this->db->get('notif');
		$this->db->where('is_read', 0);
		//$query->result_array = mengirim data ke controller dalam bentuk semua data
		return $query->result_array();
	}

	// public function update_notif($id, $data_notif)
	// {

	// 	$this->db->where('id', $id);

	// 	//$input = data yang dikirim dari controller
	// 	return $this->db->update('notif', $data_notif);
	// }

	//function update berfungsi merubah data ke table pengunjung di database
	public function update($input, $id)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('pengunjung', $input);
	}

	//function delete berfungsi menghapus data dari table pengunjung di database
	public function delete($id)
	{
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id', $id);
		return $this->db->delete('pengunjung');
	}
}
