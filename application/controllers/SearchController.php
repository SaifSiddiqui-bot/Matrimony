<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

    public function index() {
        $query = $this->input->get('query');

        $this->load->model('SearchModel');

        if ($query) {
            $data['profiles'] = $this->SearchModel->search_profiles($query);
            $data['query'] = $query;  
        } else {
            $data['profiles'] = false;
            $data['query'] = '';  
        }

        $this->load->view('SearchView', $data);
    }
}
