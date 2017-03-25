<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Model {

    /*
    | -------------------------------------------------------------------
    |  Essentials
    | -------------------------------------------------------------------
    */

    public function get_single_user_information($user_id) {
        $query = $this->db->get_where('booking_users', array('id' => $user_id));
        return $query->row_array();
    }

    /*
    | -------------------------------------------------------------------
    |  Dashboard
    | -------------------------------------------------------------------
    */

    public function get_users_count($type = FALSE) {
        if ($type === FALSE) {
            $query = $this->db->query("SELECT * FROM `booking_users`");
            return $query->num_rows();
        } else {
            $query = $this->db->get_where('booking_users', array('access_level' => $type));
            return $query->num_rows();
        }
        
    }

    public function all_bookings_count() {
        $query = $this->db->query("SELECT * FROM `booking_sessions`");
        return $query->num_rows();
    }

    /*
    | -------------------------------------------------------------------
    |  Bookings
    | -------------------------------------------------------------------
    */

    /*
    | -------------------------------------------------------------------
    |  Members
    | -------------------------------------------------------------------
    */

    public function all_users() {
        $query = $this->db->query('SELECT * FROM `booking_users`');
        return $query->result_array();
    }

}