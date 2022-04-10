<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		// LOAD TITLE
		$this->data['title'] = 'Dashboard';

		// LOAD BREADCRUMB
		$mydata['breadcrumb']['menu'] = 'Chatting';
		$mydata['breadcrumb']['sub'] = ['Chat', 'Private'];

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
