<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function register($data)
    {
        return $this->db->insert('users', $data);
    }

    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');  

        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                echo '<pre>';
                print_r($user);
                return true;
            }
        }
        return false;
    }
}
