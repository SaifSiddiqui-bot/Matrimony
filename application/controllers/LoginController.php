<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');
        $this->load->library('session');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('LoginView');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('UserModel');

            // Check if the user exists
            $user = $this->UserModel->login($email, $password);

            if ($user) {

                // Set session data
                // $this->session->set_userdata('user_id', $user->id);
                // $this->session->set_userdata('username', $user->username);
                
                redirect('HomeController');
            } else {
                $data['error'] = 'Invalid email or password!';
                $this->load->view('LoginView', $data);
            }
        }
    }
}
