<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
        $this->read();
    }

    public function read() {

        $output = array(
			'list' => 'Dashboard',

			'theme_page' => 'dashboard/index',
		);
		$this->load->view('templates/index', $output);
    }
}