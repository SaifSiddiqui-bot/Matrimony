<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('HomeView');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		// $this->session->sess_destroy();

		redirect('LoginController');
	}
}
