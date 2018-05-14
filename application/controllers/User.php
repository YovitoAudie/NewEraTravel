<?php

	/**
	*  
	*/
	class User extends CI_Controller
	{
		//auto load model
		function __construct(){
			parent::__construct();
			//load model
			$this->load->model("user_m");
		}
		public function form(){
			$this->load->view('form_user_v');
		} 
		function index(){
			$data['user'] =$this->user_m->gets();

			$this->load->view('user_data', $data);
		}
		public function add(){
			//create data array
			$data = array("username"=>$this->input->post("username"), "password"=>$this->input->post("fullname"),"fullname"=>$this->input->post("fullname"), "level"=>$this->input->post("level") );
		}
		function del($id){
				$this->user_m->del($id);
				redirect('user');
		}
		function edit ($id){}
		function detail($id){}
			//check data sebelum save	
	}