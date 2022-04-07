<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('shop_model');
    }

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
