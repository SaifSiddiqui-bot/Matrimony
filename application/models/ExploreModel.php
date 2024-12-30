<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExploreModel extends CI_Model {

    public function get_profiles() {
        $this->db->select('u.id, u.username, u.email, u.phone, ud.gender, ud.dob, ud.education, ud.occupation, ud.religion, ud.mother_tongue, ud.caste, ud.profile_picture');
        $this->db->from('users u');
        $this->db->join('user_details ud', 'u.email = ud.email');  // Join by email
        
        $this->db->where('ud.gender', 'female');
        
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function check_interest($sender_email, $receiver_email) {
        $this->db->where('sender_email', $sender_email);
        $this->db->where('receiver_email', $receiver_email);
        $query = $this->db->get('interests');
        
        return $query->row();
    }

    public function insert_interest($sender_email, $receiver_email) {
        $data = [
            'sender_email' => $sender_email,
            'receiver_email' => $receiver_email
        ];
        $this->db->insert('interests', $data);
    }
}
