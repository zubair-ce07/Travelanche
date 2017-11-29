<?php

class Logged_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form'); //loading form helper
        $this->load->helper('url'); //loading url helper
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function choice()
    {
        $this->load->view('template/header');
        $this->load->view('Login/plan_a_trip');
        $this->load->view('template/footer');
    }

    public function trip_info()
    {
        $this->load->model('trip');
        $this->trip->Trip_details(); //function call from model
        $this->load->view('template/header');
        $this->load->view('success');
        $this->load->view('template/footer');

    }

    public function my_Trips()
    {
        $user_data = $this->session->userdata('logged_in');
        //echo $user_data['email'].$user_data['password'];
        $this->load->model('trip');
        $user_trips['trips'] = $this->trip->My_trips($user_data['email']); //function call from model
      /*  foreach ($user_trips as $row)
        {
            echo $row->vehicle;
        }*/
        $this->load->view('template/header');
        $this->load->view('Login/My_trips',$user_trips);
        $this->load->view('template/footer');
    }
}
?>