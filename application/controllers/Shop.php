<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{


    public function index()
    {
        $this->read();
    }

    public function read(){
        $output = array(
			'list' => 'Shop',

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }
}
