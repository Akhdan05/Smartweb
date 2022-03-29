<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/dashandmin.php
        $this->load->view("admin/login");
	}
}