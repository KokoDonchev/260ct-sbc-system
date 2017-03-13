<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('is_admin_login')) {
            redirect('dashboard');
        } else {
            $data['page'] = "Login";

            $this->load->view('snippets/header', $data);
            $this->load->view('vwLogin');    
            $this->load->view('snippets/footer');
        }
    }

    public function do_login() {            
        $data['page'] = "Login";
        
        if ($this->session->userdata('is_admin_login')) { 
            redirect('dashboard');
        } else {
            $user = html_escape($this->input->post('username'));
            $password = html_escape($this->input->post('password'));
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('snippets/header', $data);
                $this->load->view('vwLogin');    
                $this->load->view('snippets/footer');
            } else {
                $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                $enc_pass = md5($salt . $password);
                $sql = "SELECT * FROM booking_users WHERE username = ? AND password = ?";
                $val = $this->db->query($sql, array($user, $enc_pass));

                // var_dump($val->num_rows());
                
                if ($val->num_rows()) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'username' => $res['username'],
                            'is_admin_login' => true,
                            'user_level' => $res['access_level']
                        ));
                        // $user_data = array(
                        //     'lastActivity' => $local_time,
                        //     'lastIP' => $user_ip,
                        // );
                        // $this->db->where('id', $res['id']);
                        // $this->db->update('booking_users', $user_data);
                    }
                    
                    redirect('dashboard');
                } else {
                    $err['error'] = "Wrong username or password!";
                    $this->load->view('snippets/header', $data);
                    $this->load->view('vwLogin', $err);
                    $this->load->view('snippets/footer');
                }
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        //$this->session->unset_userdata('email');
        $this->session->unset_userdata('is_admin_login');   
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('home', 'refresh');
    }

}