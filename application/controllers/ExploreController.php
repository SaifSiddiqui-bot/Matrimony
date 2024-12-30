<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExploreController extends CI_Controller {

    public function index() {
        $this->load->model('ExploreModel');

        $data['profiles'] = $this->ExploreModel->get_profiles();

        $this->load->view('ExploreView', $data);
    }

    public function send_interest() {

        $sender_email = $this->input->post('sender_email');
        $receiver_email = $this->input->post('receiver_email');

        $this->load->model('ExploreModel');
        $existingInterest = $this->ExploreModel->check_interest($sender_email, $receiver_email);

        if ($existingInterest) {
            echo json_encode(['status' => 'error', 'message' => 'Interest already sent']);
        } else {
            $this->ExploreModel->insert_interest($sender_email, $receiver_email);
            echo json_encode(['status' => 'success', 'message' => 'Interest sent successfully']);
        }
    }

}
