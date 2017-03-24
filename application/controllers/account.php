<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }

    }

    public function index() {
        $data['page'] = "Account";

        $this->load->view('snippets/header', $data);
        $this->load->view('vwAllMembers');    
        $this->load->view('snippets/footer');
    }

}