<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('auth');
        }

    }

    public function index() {
        
        $data['user_id'] = $this->session->userdata('id');
        $data['user'] = $this->queries->get_single_user_information($data['user_id']);

        $this->load->view('snippets/header', $data);
        $this->load->view('vwConfirmMembership');    
        $this->load->view('snippets/footer');
    }

    public function activate($mode) {

            $user_id = $this->session->userdata('id');
            $this->queries->update_membership($user_id, $mode);
            redirect('account');
    }
    

    public function create() {

            $data['user_id'] = $this->session->userdata('id');
            $data['user'] = $this->queries->get_single_user_information($data['user_id']);

            $this->load->view('snippets/header', $data);
            $this->load->view('vwConfirmMembership');
            $this->load->view('snippets/footer');
        
    }
}
