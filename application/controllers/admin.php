<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
		
        //memanggil model
        $this->load->model(array('admin_model'));
		$this->load->model(array('notif_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->login();
	}

	public function dashboard() {

		$data_pengunjung = $this->admin_model->jml_pengunjung();
		$data_iphone = $this->admin_model->jml_iphone();
		$data_macbook = $this->admin_model->jml_macbook();
		$notif = $this->notif_model->count();
		$count = count($notif);

		$output = array(
			'list' => 'Dashboard',

			'count' => $count,

			'notif' => $notif,

			'data_pengunjung' => $data_pengunjung,

			'data_iphone' => $data_iphone,

			'data_macbook' => $data_macbook,

			'theme_page' => 'admin/dashboard/index',
		);
		$this->load->view('theme/index', $output);
	}

    public function read() {
		//memanggil function read pada admin model
		//function read berfungsi mengambil/read data dari table admin di database
		$data_admin = $this->admin_model->read();
		$notif = $this->notif_model->count();
		$count = count($notif);

		//mengirim data ke view
		$output = array(
						'list' => 'Daftar admin',
						//data admin dikirim ke view
						'data_admin' => $data_admin,

						'notif' => $notif,

						'count' => $count,

						'theme_page' => 'admin/user/index',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

    public function insert() {
		$notif = $this->notif_model->count();
		$count = count($notif);
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Tambah admin',
						
						'notif' => $notif,

						'count' => $count,

						'theme_page' => 'admin/user/add',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

    public function insert_submit(){

        $this->form_validation->set_rules('username', 'username', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if($this->form_validation->run() == false){
            
            $output = array(
                'list' => 'Tambah admin',
                'theme_page' => 'admin/user/add',
            );
    
            $this->load->view('theme/index', $output);
            
        }

        else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');

            $password = md5($password);

            $input = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
            );

            $data_admin = $this->admin_model->insert($input);
        
            redirect('admin/read');
		}
    }

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);
		$notif = $this->notif_model->count();
		$count = count($notif);

		//function read berfungsi mengambil 1 data dari table admin sesuai id yg dipilih
		$data_admin_single_data = $this->admin_model->read_single_data($id);

		//mengirim data ke view
		$output = array(
						'list' => 'Ubah admin',

						//mengirim data admin yang dipilih ke view
						'data_admin_single_data' => $data_admin_single_data,
						
						'notif' => $notif,

						'count' => $count,

						'theme_page' => 'admin/user/update',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function update_submit() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
                        'username' => $username,
                        'nama' => $nama,
					);

		//memanggil function insert pada admin model
		//function insert berfungsi menyimpan/create data ke table admin di database
		$data_admin = $this->admin_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('admin/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada admin model
		$data_admin = $this->admin_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('admin/read');
	}

	public function reset() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table admin sesuai id yg dipilih
		$data_admin_single_data = $this->admin_model->read_single_data($id);
		$notif = $this->notif_model->count();
		$count = count($notif);

		//mengirim data ke view
		$output = array(
						'list' => 'Reset Password',

						//mengirim data admin yang dipilih ke view
						'data_admin_single_data' => $data_admin_single_data,
						
						'notif' => $notif,

						'count' => $count,

						'theme_page' => 'admin/user/reset',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function reset_submit() {

		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]|matches[password]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if($this->form_validation->run() == false){
            
			$id = $this->uri->segment(3);

			$data_admin_single_data = $this->admin_model->read_single_data($id);

            $output = array(
                'list' => 'Reset Password',

				'data_admin_single_data' => $data_admin_single_data,

                'theme_page' => 'admin/user/reset',
            );
    
            $this->load->view('theme/index', $output);
            
        }

        else {

			$id = $this->uri->segment(3);

            $password = $this->input->post('password');

            $password = md5($password);

            $input = array(
                'password' => $password,
            );

			//memanggil function insert pada admin model
			//function insert berfungsi menyimpan/create data ke table admin di database
			$data_admin = $this->admin_model->update($input, $id);

			//mengembalikan halaman ke function read
			redirect('admin/read');
		}
	}

	public function read_export() {
		//memanggil function read pada admin model
		//function read berfungsi mengambil/read data dari table admin di database
		$data_admin = $this->admin_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Daftar admin',

						//data admin dikirim ke view
						'data_admin' => $data_admin
					);

		//memanggil file view
		$this->load->view('admin_read_export', $output);
	}

	public function data_export() {
		//memanggil function read pada admin model
		//function read berfungsi mengambil/read data dari table admin di database
		$data_admin = $this->admin_model->read();
	
		//mengirim data ke view
		$output = array(
						//memanggil view
						'list' => 'Daftar admin',

						//data admin dikirim ke view
						'data_admin' => $data_admin
					);

		//memanggil file view
		$this->load->view('admin/user/export', $output);
	}

	public function login() {
		
		//memanggil fungsi login submit	(agar di view tidak dilihat fungsi login submit)
		$this->login_submit();

		//mengirim data ke view
		$output = array(
						'list' => 'Login'
					);

		//memanggil file view
		$this->load->view('auth/login', $output);
	}

	private function login_submit() {
		
		//proses jika tombol login di submit
		if($this->input->post('submit') == 'Login') {

			//aturan validasi input login
			$this->form_validation->set_rules('username', 'username', 'required|alpha|callback_login_check');
			$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]');

			//jika validasi sukses 
			if ($this->form_validation->run() == TRUE) {

				//redirect ke provinsi (bisa dirubah ke controller & fungsi manapun)
				redirect('admin/dashboard');
			} 

		}
	}

	public function login_check() {
		//menangkap data input dari view
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//password encrypt
		$password_encrypt = md5($password);

		//check username & password sesuai dengan di database
		$data_admin = $this->admin_model->read_single($username, $password_encrypt);
		
		//jika cocok : dikembalikan ke fungsi login_submit (validasi sukses)
		if(!empty($data_admin)) {

			//buat session admin 
			$this->session->set_userdata('id', $data_admin['id']);
			$this->session->set_userdata('nama', $data_admin['nama']);

			return TRUE;

		//jika tidak cocok : dikembalikan ke fungsi login_submit (validasi gagal)
		} else {

			//membuat pesan error
			$this->form_validation->set_message('login_check', 'username & password tidak tepat');
			
			return FALSE;

		}
	}

	public function logout() {

		//hapus session admin
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');

		//mengembalikan halaman ke function read
		redirect('admin/login');
	}

	public function reset_password() {
		
		//memanggil fungsi login submit	(agar di view tidak dilihat fungsi login submit)
		$this->login_submit();
		$notif = $this->notif_model->count();
		$count = count($notif);

		//mengirim data ke view 
		$output = array(
						'theme_page' => 'reset_password',
						
						'notif' => $notif,

						'count' => $count,

						'list' => 'Reset Password'
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}
}