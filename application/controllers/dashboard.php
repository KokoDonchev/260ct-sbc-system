<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_admin_login')) {
            redirect('dashboard');
        }

    }

    public function index() {
        $data['page'] = "Dashboard";

        $this->load->view('snippets/header', $data);
        $this->load->view('vwDashboard');    
        $this->load->view('snippets/footer');
    }

}