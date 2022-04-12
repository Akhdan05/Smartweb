<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku_tamu extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('pengunjung_model');
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
						'no_telp' => $no_telp,
						'tanggal' => time()
					);
		$notif = [
			'judul' => ' ' . $this->input->post('nama') . ' Telah Berkunjung ',
			'pesan' => 'Nama ' . $this->input->post('nama') . ' Berkunjung pada ' . date('D, d-M-Y', $input['tanggal']) . '.',
			'tanggal' => time(),
			'is_read' => 0
		];
		
		$data_pengunjung = $this->pengunjung_model->insert($input);
		$data_notif_pengunjung = $this->pengunjung_model->insert_notif($notif);
		
		redirect('dashboard');
	}
    
}