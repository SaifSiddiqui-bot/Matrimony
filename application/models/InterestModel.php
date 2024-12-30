<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InterestModel extends CI_Model {

    public function send_interest($sender_email, $receiver_email) {
        $data = [
            'sender_email' => $sender_email,
            'receiver_email' => $receiver_email
        ];

        $this->db->insert('interests', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
