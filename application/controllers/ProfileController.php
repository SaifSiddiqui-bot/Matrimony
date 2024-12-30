<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProfileModel');
    }

    public function index() {
        $data['profile'] = $this->ProfileModel->get_user_profile();

        if ($data['profile'] === false) {
            show_404(); 
        }

        $this->load->view('ProfileView', $data);
    }
}
