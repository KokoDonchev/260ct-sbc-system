<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('auth');
        }
    }

    public function index() {
        $data['page'] = "Dashboard";
        $data['user_info'] = $this->level_management->get_user_information();

        switch ($data['user_info']['access_level']) {
            case 1:
                $data['count_managers'] = $this->queries->get_users_count('1');
                $data['count_instructors'] = $this->queries->get_users_count('2');
                $data['count_operators'] = $this->queries->get_users_count('3');
                $data['count_members'] = $this->queries->get_users_count('4');
                $data['count_bookings'] = $this->queries->all_bookings_count();
                break;
            case 2:
                $data['count_bookings'] = $this->queries->all_bookings_count();
                break;
            case 3:
                $data['count_bookings'] = $this->queries->all_bookings_count();
                break;
            case 4:
                $data['count_bookings'] = $this->queries->all_bookings_count();
                break;
        }

        $this->load->view('snippets/header', $data);
        $this->load->view('vwDashboard');
        $this->load->view('snippets/footer');
    }

}