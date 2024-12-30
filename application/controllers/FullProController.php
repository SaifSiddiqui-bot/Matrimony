<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FullProController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('FullProModel');
    }

    public function index() {
        $email = $this->input->get('email');
    
        $data['profile'] = $this->FullProModel->get_full_profile($email);
    
        if ($data['profile']) {
            $this->load->view('FullProView', $data);
        } else {
            show_404();
        }
    }
    

}
