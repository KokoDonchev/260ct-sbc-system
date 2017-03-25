<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookings extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    }

    public function index() {
        $data['page'] = "Bookings";

        $this->load->view('snippets/header', $data);
        $this->load->view('vwAllBookings');    
        $this->load->view('snippets/footer');
    }

    public function create() {
        $data['page'] = "New booking";
        $data['user_info'] = $this->level_management->get_user_information();
        $data['booking_types'] = $this->queries->get_booking_types(); // list of all available booking types
        $data['instructors_list'] = $this->queries->get_specific_user_group(2); // list of instructors

        $user_id = $this->session->userdata('id');

        $booking_date = html_escape($this->input->post('booking_date'));
        $session_type_id = html_escape($this->input->post('booking_type'));
        $session_instructor_id = html_escape($this->input->post('instructor_option'));
        $is_instructor = $this->input->post('is_instructor');

        if ($is_instructor == 0) {
            // making sure no instructor is booked if it shouldn't be
            $session_instructor_id = 0;
        }

        $this->form_validation->set_rules('booking_date', 'session date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['status'] = "";
            $this->load->view('snippets/header', $data);
            $this->load->view('vwMakeBooking');
            $this->load->view('snippets/footer');
        } else {
            // new booking query
            $this->queries->create_booking($booking_date, $user_id, $session_instructor_id, $session_type_id);

            $data['status'] = "Your booking was successful!";
            $this->load->view('snippets/header', $data);
            $this->load->view('vwMakeBooking');
            $this->load->view('snippets/footer');
        }
    }

    public function edit() {
        $data['page'] = "Edit bookings";
    }

}