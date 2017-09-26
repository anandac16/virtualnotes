	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminPanel extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			$this->load->model('Admin_login');
			$this->load->helper('url');
			$this->url = base_url();
		}
		
		public function index()
		{
			redirect('AdminPanel/login');
		}
		
		public function login()
		{
			$this->session->sess_destroy();
			$this->load->view('Admin/login');
		}
		
		function login_act()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->Admin_login->cek_login("admin",$where)->num_rows();
			if($cek > 0){
	 
				$data_session = array(
					'username' => $username,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect(base_url("panel/main"));
	 
			}else{
				redirect('AdminPanel/login?s=w');
			}
		}
	 
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('AdminPanel/login'));
		}
		
	}
