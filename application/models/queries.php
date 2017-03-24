<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Queries extends CI_Model {

    /*
    | -------------------------------------------------------------------
    |  Dashboard
    | -------------------------------------------------------------------
    */

    public function all_users_count() {
        $query = $this->db->query("SELECT * FROM `booking_users`");
        return $query->num_rows();
    }

    public function all_bookings_count() {
        $query = $this->db->query("SELECT * FROM `booking_users`");
        return $query->num_rows();
    }

}