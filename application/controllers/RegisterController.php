<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('RegisterView');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email'    => $this->input->post('email'),
                'phone'    => $this->input->post('phone'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) 
            ];

            if ($this->UserModel->register($data)) {
                redirect('LoginController');
            } else {
                $this->load->view('RegisterView', ['error' => 'Registration failed, please try again.']);
            }
        }
    }
}
