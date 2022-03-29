<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bukutamu extends CI_Controller
{


    public function index()
    {

        $this->load->view('bukutamu/bukutamu');
    }
}