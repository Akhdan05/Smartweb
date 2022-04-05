<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tamu extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('bukutamu_model');
    }

    public function index()
    {
        $this->read();
    }

    public function read(){

        $data_pengunjung = $this->bukutamu_model->read();

        $output = array(
			'list' => 'Tamu',

            'data_pengunjung' => $data_pengunjung,

			'theme_page' => 'tamu/index',
		);
		$this->load->view('templates/index', $output);

    }
}