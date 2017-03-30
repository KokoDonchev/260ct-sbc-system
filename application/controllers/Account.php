<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }
        $this->load->helper('country_codes');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    }

    public function index() {
        $data['page'] = "Account";
        $data['user_info'] = $this->level_management->get_user_information();

        $data['countries'] = country_codes();

        $user_id = $this->session->userdata('id');

        $data['count_memberships'] = $this->queries->check_membership($user_id);
        $data['membership_type'] = $this->queries->get_single_user_information($user_id)["membership_level"];

        $first_name = html_escape($this->input->post('first_name'));
        $last_name = html_escape($this->input->post('last_name'));
        $email_address = html_escape($this->input->post('email_address'));
        $mobile_number_code = html_escape($this->input->post('mobile_number_code'));
        $mobile_number = html_escape($this->input->post('mobile_number'));
        $current_address = html_escape($this->input->post('current_address'));
        $current_town = html_escape($this->input->post('current_town'));
        $address_postcode = html_escape($this->input->post('address_postcode'));
        $current_country = html_escape($this->input->post('current_country'));

        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['status'] = "";
            $this->load->view('snippets/header', $data);
            $this->load->view('vwUpdatePersonalAccount');    
            $this->load->view('snippets/footer');
        } else {
            // updating the details
            $this->queries->update_account_details($user_id, $first_name, $last_name, $email_address, $mobile_number_code, $mobile_number, $current_address, $current_town, $address_postcode, $current_country);

            $data['status'] = "Your details were successfully updated.";
            $data['user_info'] = $this->level_management->get_user_information(); // getting all of the info for the user after the update
            $this->load->view('snippets/header', $data);
            $this->load->view('vwUpdatePersonalAccount');    
            $this->load->view('snippets/footer');
        }
    }

}