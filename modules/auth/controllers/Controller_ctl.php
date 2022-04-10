<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_ctl extends MY_Controller {
	public function index()
	{
		$this->load->view('index');
	}
}