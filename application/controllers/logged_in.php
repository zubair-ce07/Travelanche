<?php

class Logged_in extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form'); //loading form helper
        $this->load->helper('url'); //loading url helper
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }
    
    public function choice(){
        $this->load->view('template/header');
        $this->load->view('Login/plan_a_trip');
        $this->load->view('template/footer');
    }
}
?>