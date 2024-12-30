<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityModel extends CI_Model {

    public function get_sent_interests($sender_email) {

        $this->db->select('u.username, u.email, ud.profile_picture, ud.education, ud.occupation, ud.religion');
        $this->db->from('interests i');
        $this->db->join('users u', 'i.receiver_email = u.email');
        $this->db->join('user_details ud', 'u.email = ud.email'); 
        $this->db->where('i.sender_email', $sender_email); 
        $query = $this->db->get(); 
        return $query->result(); 
    }
    

    public function get_received_interests($receiver_email) {

        $this->db->select('u.username, u.email, ud.profile_picture, ud.education, ud.occupation, ud.religion');
        $this->db->from('interests i');
        $this->db->join('users u', 'i.sender_email = u.email'); 
        $this->db->join('user_details ud', 'u.email = ud.email'); 
        $this->db->where('i.receiver_email', $receiver_email);
        $query = $this->db->get(); 
        return $query->result(); 
    }
}
