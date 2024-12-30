<?php
class ProfileModel extends CI_Model {

    public function get_user_profile() {
        $email = 'saif@saif.com';  

        $this->db->select('u.username, u.email, u.phone, ud.dob, ud.education, ud.occupation, ud.religion, ud.mother_tongue, ud.caste, ud.profile_picture');
        $this->db->from('users u');
        $this->db->join('user_details ud', 'u.email = ud.email');  
        $this->db->where('u.email', $email);  
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();  
        } else {
            return false; 
        }
    }
}
