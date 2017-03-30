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
        $data['page'] = "All versions of Tomasz";
        
        $data['all_users'] = $this->queries->all_users();


        $this->load->view('snippets/header', $data);
        $this->load->view('vwConfirmMembership');    
        $this->load->view('snippets/footer');
    }

    public function activate() {

            $user_id = $this->session->userdata('id');
            $this->queries->update_membership($user_id, 2);
            redirect('account');
    }
    
    public function deactivate() {
            // DONCHEV: This function does the same thing as activate, but with different membership parameter (1 instead of 2)
            $user_id = $this->session->userdata('id');
            $this->queries->update_membership($user_id, 1);
            redirect('account');
    }

    public function create() {


            $this->load->view('snippets/header');
            $this->load->view('vwConfirmMembership');
            $this->load->view('snippets/footer');
        
    }
}
