<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Shop/Shop');
        $this->load->view('templates/footer');
    }
}
