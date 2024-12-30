<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FullProModel extends CI_Model {

    public function get_full_profile($email) {
        $this->db->select('u.username, u.email, u.phone, 
                           ud.gender, ud.dob, ud.education, ud.occupation, 
                           ud.religion, ud.mother_tongue, ud.caste, 
                           ud.father_occupation, ud.mother_occupation, 
                           ud.profile_picture');
        $this->db->from('users u');
        $this->db->join('user_details ud', 'u.email = ud.email');
        $this->db->where('u.email', $email);

        $query = $this->db->get();

        return $query->row(); 
    }
}
