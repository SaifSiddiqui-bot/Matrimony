<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDetailModel extends CI_Model {

    public function add_detail($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        $this->db->insert('user_details', $data);
        
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
}
