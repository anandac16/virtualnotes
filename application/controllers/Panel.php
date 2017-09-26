	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Panel extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->url = base_url();
			if($this->session->userdata('status') != "login"){
				redirect(base_url("AdminPanel/login"));
			}
		}
		public function index()
		{
			redirect('panel/main');
		}
		
		public function main()
		{
			$this->load->view('layouts/admin_header');
			$this->load->view('Admin/main');
			$this->load->view('layouts/admin_footer');
		}
	}
