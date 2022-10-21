<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public  function get() 
    {
        return $this->db->get('home')->result();
    }
}

?>