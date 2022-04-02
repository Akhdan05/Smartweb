<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukutamu_model extends CI_Model {

	public function insert($input) {
		return $this->db->insert('pengunjung', $input);
	}
}