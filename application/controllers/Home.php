<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }
    public function index(

        $data = array(
            'title1' => 'Home',
        ),
    )
    {
        $data['home'] = $this->load->model('M_home');
        $this->load->view('home', $data, FALSE);
    }
}

?>