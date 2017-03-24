<?php

/*
| -------------------------------------------------------------------
|  Level Management Helper
| -------------------------------------------------------------------
*/

function level_management($lvl) {
    echo $lvl;
    // echo $this->session->userdata('username');
    $ci = get_instance();  //get instance, access the CI superobject
    $active_username = $ci->session->userdata('username');
    echo $active_username;
}

?>