<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengunjung extends CI_Controller {
 
	public function __construct() {
        parent::__construct();
 
		//memanggil model
        $this->load->model('pengunjung_model');

		if(empty($this->session->userdata('id'))) {
        	redirect('admin/login');
		}
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}
 
	public function read() {
		//memanggil function read pada pengunjung model
		//function read berfungsi mengambil/read data dari table pengunjung di database
		$data_pengunjung = $this->pengunjung_model->read();

		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Daftar pengunjung',

						//data pengunjung dikirim ke view
						'data_pengunjung' => $data_pengunjung,

						'theme_page' => 'pengunjung_read',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert() {
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Tambah pengunjung',

						'theme_page' => 'pengunjung_insert',
					);
		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert_submit() {
		//menangkap data input dari view
		$nama = $this->input->post('nama');
		$email_pengunjung = $this->input->post('email_pengunjung');
		$no_telp = $this->input->post('no_telp');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'nama' => $nama,
						'email_pengunjung' => $email_pengunjung,
						'no_telp' => $no_telp
					);
		
		//memanggil function insert pada pengunjung model
		//function insert berfungsi menyimpan/create data ke table pengunjung di database
		$data_pengunjung = $this->pengunjung_model->insert($input);
		
		//mengembalikan halaman ke function read
		redirect('dashboard');
	} 

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table pengunjung sesuai id yg dipilih
		$data_pengunjung_single = $this->pengunjung_model->read_single($id);

		//mengirim data ke view
		$output = array(
						'list' => 'Ubah pengunjung',

						//mengirim data pengunjung yang dipilih ke view
						'data_pengunjung_single' => $data_pengunjung_single,

						'theme_page' => 'pengunjung_update',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		$nama = $this->input->post('nama');
		// $instansi = $this->input->post('instansi');
		$email_pengunjung = $this->input->post('email_pengunjung');
		$no_telp = $this->input->post('no_telp');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'nama' => $nama,
						// 'instansi' => $instansi,
						'email_pengunjung' => $email_pengunjung,
						'no_telp' => $no_telp,
					);

		//memanggil function insert pada pengunjung model
		//function insert berfungsi menyimpan/create data ke table pengunjung di database
		$data_pengunjung = $this->pengunjung_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('pengunjung/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada pengunjung model
		$data_pengunjung = $this->pengunjung_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('pengunjung/read');
	}

	public function read_export() {
		//memanggil function read pada pengunjung model
		//function read berfungsi mengambil/read data dari table pengunjung di database
		$data_pengunjung = $this->pengunjung_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Daftar pengunjung',

						//data pengunjung dikirim ke view
						'data_pengunjung' => $data_pengunjung
					);

		//memanggil file view
		$this->load->view('pengunjung_read_export', $output);
	}

	public function data_export() {
		//memanggil function read pada pengunjung model
		//function read berfungsi mengambil/read data dari table pengunjung di database
		$data_pengunjung = $this->pengunjung_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Daftar pengunjung',

						//data pengunjung dikirim ke view
						'data_pengunjung' => $data_pengunjung
					);

		$this->load->view('pengunjung_data_export', $output);
	}
}