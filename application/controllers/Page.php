	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Page extends CI_Controller {
	
		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/welcome
		 *	- or -
		 * 		http://example.com/index.php/welcome/index
		 *	- or -
		 * Since this controller is set as the default controller in
		 * config/routes.php, it's displayed at http://example.com/
		 *
		 * So any other public methods not prefixed with an underscore will
		 * map to /index.php/welcome/<method_name>
		 * @see https://codeigniter.com/user_guide/general/urls.html
		 */
		
		public function __construct(){
			parent::__construct();
			$this->load->model('Data_Notes');
			$this->load->helper('url');
			$this->url = base_url();
			$this->title = 'VN | Virtual Notes';
			$this->load->view('layouts/header');
			$this->load->view('layouts/navbar_home');
		}
		
		public function index()
		{
			$data['menu'] = "home";
			$data['notes'] = $this->Data_Notes->tampil_data()->result();
			$this->load->view('welcome_message',$data);
		}
		
		public function search()
		{
			$data['menu'] = "search";
			$word = $this->input->post('search');
			$data['notes'] = $this->Data_Notes->search_notes($word)->result();
			$this->load->view('welcome_message',$data);
		}
		
		public function notes($id)
		{
			$data['menu'] = "notes";
			$where = array('url' => $id);
			$get = $this->Data_Notes->get_data($where)->result();
			if($get){
				$data['notes'] = $get;
			}else{
				$data['notes'] = "<h1>Page Not Found</h1>";
			}
			$this->load->view('welcome_message',$data);
		}
	}
	
