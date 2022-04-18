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
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();

        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    } 

    public function read_iphone(){
        $data_shop = $this->shop_model->read_iphone();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();

        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }

    public function getAscip(){
        $data_shop = $this->shop_model->getAscip();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();
// 
        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);

//         if(read_iphone('kategori')= 'iphone'){
//             $data_shop = $this->shop_model->getAscip();
//         }
//         else{
//             $data_shop = $this->shop_model->getAscmac();
//         }
//         $data_iphone = $this->shop_model->jml_iphone();
//         $data_macbook = $this->shop_model->jml_macbook();
// // 
//         $output = array(
// 			'list' => 'Shop',

//             'data_shop' => $data_shop,

//             'data_iphone' => $data_iphone,

//             'data_macbook' => $data_macbook,

// 			'theme_page' => 'Shop/index',
// 		);
// 		$this->load->view('templates/index', $output);
    }

    public function getDescip(){
        $data_shop = $this->shop_model->getDescip();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();
// 
        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }

    public function getAscmac(){
        $data_shop = $this->shop_model->getAscmac();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();
// 
        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }

    public function getDescmac(){
        $data_shop = $this->shop_model->getDescmac();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();
// 
        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

			'theme_page' => 'Shop/index',
		);
		$this->load->view('templates/index', $output);
    }

    public function read_macbook(){
        $data_shop = $this->shop_model->read_macbook();
        $data_iphone = $this->shop_model->jml_iphone();
        $data_macbook = $this->shop_model->jml_macbook();

        $output = array(
			'list' => 'Shop',

            'data_shop' => $data_shop,

            'data_iphone' => $data_iphone,

            'data_macbook' => $data_macbook,

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
