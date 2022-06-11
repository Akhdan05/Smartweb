<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{


    public function index()
    {
        $this->read();
    }

    public function read(){
        $output = array(
			'list' => 'Detail',

			'theme_page' => 'Shop/Detail',
		);
		$this->load->view('templates/index', $output);
    }
}
