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
        $data_shop = $this->shop_model->read();

        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }

    public function detail($id){
        $data = $this->shop_model->detail($id);

        $output = array(
            'data' => $data,

			'theme_page' => 'Shop/detail',
		);
		$this->load->view('templates/index', $output);
    }
}
