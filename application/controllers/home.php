<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('template/header.php');
        $this->load->view('vwLogin');    
        $this->load->view('template/footer.php');
    }

    public function login() {

    }

}