<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }

    }

    public function index() {
        $data['page'] = "Members";

        $data['all_users'] = $this->queries->all_users();

        $this->load->view('snippets/header', $data);
        $this->load->view('vwAllMembers');    
        $this->load->view('snippets/footer');
    }

    public function remove($id) {
        $this->queries->remove_user($id);
        redirect('members');
    }

    public function make_instructor($id) {
        $this->queries->make_instructor($id);
        redirect('members');
    }

    public function make_slope($id) {
        $this->queries->make_slope($id);
        redirect('members');
    }

}