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
        $this->load->view('snippets/header', $data);
        $this->load->view('vwConfirmMembership');    
        $this->load->view('snippets/footer');
    }

    public function activate($mode) {
            $user_id = $this->session->userdata('id');
            $this->queries->update_membership($user_id, $mode);
            redirect('account');
    }
    

    public function pay() {
        $data['page'] = "Membership";
        
        $data['user_id'] = $this->session->userdata('id');
        $data['user'] = $this->queries->get_single_user_information($data['user_id']);
        $data['user_info'] = $this->level_management->get_user_information();

        $card_number = html_escape($this->input->post('card_number'));
        $card_type = html_escape($this->input->post('card_type'));
        $security_code = html_escape($this->input->post('security_code'));
        $expiry_date = html_escape($this->input->post('expiry_date'));

        $this->form_validation->set_rules('card_number', 'Card Number', 'required');
        $this->form_validation->set_rules('card_type', 'Card Type', 'required');
        $this->form_validation->set_rules('security_code', 'Security Code', 'required');
        $this->form_validation->set_rules('expiry_date', 'Expiry Date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['status'] = "";
            $this->load->view('snippets/header', $data);
            $this->load->view('vwPayLoyaltyFee');    
            $this->load->view('snippets/footer');
        } else {
            // updating the details
            $this->queries->update_bank_details($data['user_id'], $card_number, $card_type, $security_code, $expiry_date);
            
            $this->queries->update_membership($data['user_id'], 2);
            redirect('account');
            $data['status'] = "You have successfully paid Loyalty Fee.";
            
        }
        
    }
}
