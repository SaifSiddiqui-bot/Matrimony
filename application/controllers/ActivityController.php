<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityController extends CI_Controller {

    public function index() {
        $user_email = 'saif@saif.com'; 

        $this->load->model('ActivityModel');

        $data['sent_interests'] = $this->ActivityModel->get_sent_interests($user_email);
        $data['received_interests'] = $this->ActivityModel->get_received_interests($user_email);

        $this->load->view('ActivityView', $data);
    }
}
