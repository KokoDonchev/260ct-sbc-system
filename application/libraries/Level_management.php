<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_management {

    public function __construct() {
        $ci =& get_instance();  // get instance, access the CI superobject
        $current_page = $ci->uri->segment(1); // get active controller name
        $access_level = $ci->session->userdata('user_level'); // get user access level from session
        if ($access_level != 1 && $current_page == "members") {
            // only manager can access members controller
            show_404(); // showing a not found page
        }
    }

    public function get_user_information($user_id = FALSE) {
        $ci =& get_instance();  //get instance, access the CI superobject
        if ($user_id === FALSE) {
            $user_id = $ci->session->userdata('id'); // reading the user id from the active session
        }
        $user = $ci->queries->get_single_user_information($user_id); // getting information for this specific id from the queries model
        return $user; // returning all available information for the logged in user
    }

    public function get_user_level($user_id = FALSE) {
        $ci =& get_instance();  //get instance, access the CI superobject
        
        if ($user_id === FALSE) {
            // if there's no user_id set when calling the method it will get the user id from the logged in user
            $user_id = $ci->session->userdata('id'); // reading the user id from the active session
        }

        $user = $ci->queries->get_single_user_information($user_id); // getting information for this specific id from the queries model
        $user_level = $user['access_level']; // getting the user level from the model

        $string_user_level = "";

        // switch for easily transforming the access level int to a friendly string
        switch ($user_level) {
            case 1:
                $string_user_level = "Manager";
                break;
            case 2:
                $string_user_level = "Ski Instructor";
                break;
            case 3:
                $string_user_level = "Slope Operator";
                break;
            case 4:
                $string_user_level = "Member";
                break;
            default:
                $string_user_level = "unknown";
        }

        return $string_user_level;
    }

}