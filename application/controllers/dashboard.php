<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }
        // $this->load->helper('level_management');
    }

    public function index() {
        $data['page'] = "Dashboard";

        $data['count_users'] = $this->queries->all_users_count();

        // $data['level_management_info'] = level_management('10');

        $this->load->view('snippets/header', $data);
        $this->load->view('vwDashboard');
        $this->load->view('snippets/footer');
    }

}