<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif_model extends CI_Model
{

	public function read(){
		$this->db->select('*');
		$this->db->from('notif');
		$query = $this->db->get();

		return $query->result_array();
	}

    	public function insert($notif){
		return $this->db->insert('notif', $notif);
	}

		public function count(){
		$query = $this->db->get_where('notif', ['is_read' => 0]);
		return $query->result_array();
	}
}
