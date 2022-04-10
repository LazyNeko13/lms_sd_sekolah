<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Login
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		$mydata['title'] = 'Login Page';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
