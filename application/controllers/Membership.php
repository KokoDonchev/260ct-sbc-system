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

        $data['page'] = "Membership";
        
        $data['user_id'] = $this->session->userdata('id');
        $data['user'] = $this->queries->get_single_user_information($data['user_id']);
        $data['user_info'] = $this->level_management->get_user_information();
        //$this->queries->clear_bank_details($data['user_id']);
        $card_number = html_escape($this->input->post('card_number'));
        $card_type = html_escape($this->input->post('card_type'));
        $security_code = html_escape($this->input->post('security_code'));
        $expiry_date = html_escape($this->input->post('expiry_date'));

        $this->form_validation->set_rules('card_number', 'card number', 'required');
        $this->form_validation->set_rules('card_type', 'card type', 'required');
        $this->form_validation->set_rules('security_code', 'security code', 'required');
        $this->form_validation->set_rules('expiry_date', 'expiry_date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['status'] = "";
            $this->load->view('snippets/header', $data);
            $this->load->view('vwConfirmMembership');    
            $this->load->view('snippets/footer');
        } else {
            // updating the details
            $this->queries->update_bank_details($data['user_id'], $card_number, $card_type, $security_code, $expiry_date);
            $data['status'] = "Your details were successfully updated.";
            $data['user_info'] = $this->level_management->get_user_information(); // getting all of the info for the user after the update
            $this->load->view('snippets/header', $data);
            $this->load->view('vwConfirmMembership');    
            $this->load->view('snippets/footer');
        }



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
