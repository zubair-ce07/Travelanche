<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
		public function _construct(){
			parent::_construct();
			$this->load->model('insert');
			$this->load->helper('path');
		}
		public function index(){
			$this->load->view('template/header');
			$this->load->view('template/slider');
			$this->load->view('template/home');
			$this->load->view('template/footer');
			
                        // // $this->template['header'] = $this->load->view('template/header' , $this->data , TRUE);
			// $this->template['slider'] = $this->load->view('template/slider' , $this->data , TRUE);
			// $this->template['home'] = $this->load->view('template/home' , $this->data , TRUE);
			// $this->template['footer'] = $this->load->view('template/footer' , $this->data , TRUE);
			// $this->load->view('template/main' , $this->template);
		}
		public function about(){
			$this->load->view('template/header');
			$this->load->view('about');
			$this->load->view('template/footer');
		}
		public function services(){
			$this->load->view('template/header');
			$this->load->view('services');
			$this->load->view('template/footer');
		}
		public function contact(){
			$this->load->view('template/header');
			$this->load->view('contact');
			$this->load->view('template/footer');
		}
		public function login(){
			$this->load->view('template/header');
			$this->load->view('login');
			$this->load->view('template/footer');
		}
		public function signup(){
			$this->load->view('template/header');
			$this->load->view('signup');
			$this->load->view('template/footer');
		}
        public function user(){
			$this->load->model('user_model');
			$this->user_model->insert_data(); //function call from model
			$this->load->view('template/header');
	 		$this->load->view('success');
			$this->load->view('template/footer');
		}
        public function forgot_pass(){
			$this->load->view('forgot_pass');
		}
	}
