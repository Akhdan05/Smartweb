<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku_tamu extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('bukutamu_model');
    }

    public function index()
    {
        $this->load->view('bukutamu/index');
    }

    public function submit() {
		$nama = $this->input->post('nama');
		$email_pengunjung = $this->input->post('email_pengunjung');
		$no_telp = $this->input->post('no_telp');

		$input = array(
						'nama' => $nama,
						'email_pengunjung' => $email_pengunjung,
						'no_telp' => $no_telp
					);
		
		$data_pengunjung = $this->bukutamu_model->insert($input);
		
		redirect('dashboard');
	}
    
}