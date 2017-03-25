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

    /*
    | -------------------------------------------------------------------
    |  Account
    | -------------------------------------------------------------------
    */

    public function update_account_details($id, $first_name, $last_name, $email_address, $mobile_number_code, $mobile_number, $current_address, $current_town, $address_postcode, $current_country) {
        $sql = "UPDATE `booking_users`
                SET first_name = ?, last_name = ?, email_address = ?, mobile_number_code = ?, mobile_number = ?, current_address = ?, current_town = ?, current_country = ?, address_postcode = ?
                WHERE id = ?";
        $this->db->query($sql, array($first_name, $last_name, $email_address, $mobile_number_code, $mobile_number, $current_address, $current_town, $current_country, $address_postcode, $id));
    }

}