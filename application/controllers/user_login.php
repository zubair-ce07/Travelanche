<?php

class User_login extends CI_Controller{
    
    public function __construct() {
    parent::__construct();
    $this->load->helper('form'); //loading form helper
    $this->load->helper('url'); //loading url helper
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->model('user_model');
    }
    
    public function login(){
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function user()
    {
        /* Retrieve session data */
        $session_set_value = $this->session->all_userdata();
        // Check for remember_me data in retrieved session data
        if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") 
        {
                $this->load->view('template/header');
                $this->load->view('Login/main');
                $this->load->view('template/footer');
        } 
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('phone' , 'Phone', 'required');
            $this->form_validation->set_rules('password' , 'Password' , 'required');
            if($this->form_validation->run()==false)
            {
                $this->load->view('template/header');
                $this->load->view('login');
                $this->load->view('template/footer');
                
            } // if true
            else
            { 
                $phone = $this->input->post('phone');
                $pass = $this->input->post('password');
                $this->load->model('user_model');
                if($this->user_model->fetch_data($phone,$pass))
                {
                    $remember = $this->input->post('remember_me');
                    if ($remember) 
	                {
                    // Set remember me value in session
                    $this->session->set_userdata('remember_me', TRUE);
	                }
                        $sess_data = array(
                        'phone' => $phone,
                        'password' => $pass
                                            );
                        $this->session->set_userdata('logged_in', $sess_data);
                        // $this->session->set_userdata($session_data);
                    /* same controller called with method "enter" */
                        //redirect('user_login/enter' , 'refresh');
                        $this->load->view('template/header');
                        $this->load->view('Login/main');
                        $this->load->view('template/footer');
                }
                else
                {
                    $this->session->set_flashdata('error' , 'Invalid Phone number and Password');
                    /* will redirect to same login page to enter correct info */
                    redirect('user_login/login' ,'refresh'); 
                }
            }

        }
    }

    /* after login */
    public function enter()
    {
        if($this->session->userdata('email') != '')
        {
            $this->load->view('main');
            echo '<h2> Welcome ' .$this->session->userdata('email') . '</h2>';
            echo '<a href=" ' .site_url('user_login/logout'). ' " > Logout </a>';
        }
        else
        {
            redirect('user_login/login' , 'refresh');
        }
    }

    public function logout()
    {
       // $this->session->unset_userdata('email');
      //  redirect('user_login/login' , 'refresh');

        $this->session->sess_destroy();
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
       
    }
}

?>

