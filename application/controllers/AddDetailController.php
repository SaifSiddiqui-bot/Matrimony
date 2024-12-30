<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddDetailController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserDetailModel');
        $this->load->library(['form_validation', 'upload']);
    }

    public function form() {
        $this->load->view('AddDetailView');
    }

    public function add_detail() {

        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');

        if ($this->form_validation->run() === TRUE) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; 
            $config['file_name'] = time() . '_' . $_FILES['profile_picture']['name'];

            $this->upload->initialize($config);

            $imageFileName = '';

            if (!empty($_FILES['profile_picture']['name'])) {
                if ($this->upload->do_upload('profile_picture')) {
                    $imageData = $this->upload->data();
                    $imageFileName = $imageData['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->load->view('AddDetailView', ['error' => $error]);
                    return;
                }
            }

            $postData = array(
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'education' => $this->input->post('education'),
                'occupation' => $this->input->post('occupation'),
                'religion' => $this->input->post('religion'),
                'mother_tongue' => $this->input->post('mother_tongue'),
                'caste' => $this->input->post('caste'),
                'profile_picture' => $imageFileName,
                'father_occupation' => $this->input->post('father_occupation'),
                'mother_occupation' => $this->input->post('mother_occupation'),
                'created_at' => date('Y-m-d H:i:s') 
            );

            if ($this->UserDetailModel->add_detail($postData)) {
                $this->load->view('HomeView');
             } else {
                $this->load->view('AddDetailView', ['error' => 'Failed to save details.']);
            }
        } else {
            $this->load->view('AddDetailView', ['error' => validation_errors()]);
        }
    }
}
