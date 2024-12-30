<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model {

    public function search_profiles($query) {
        
        $this->db->select('u.id, u.username, u.email, u.phone, ud.education, ud.occupation, ud.religion, ud.mother_tongue, ud.profile_picture');
        $this->db->from('users u');
        $this->db->join('user_details ud', 'u.email = ud.email');  
        $this->db->like('u.username', $query);  
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
