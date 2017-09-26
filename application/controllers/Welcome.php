<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->url = 'http://localhost/blog-tools/';
	}
	
	public function index()
	{
		$data['notes'] = $this->Data_Notes->tampil_data()->result();
		$data['url'] = $this->url;
		$this->load->view('welcome_message',$data);
	}
	
	public function test($id)
	{
		$where = array('url' => $id);
		$get = $this->Data_Notes->get_data($where)->result();
		if($get){
			foreach($get as $val){
				echo $val->title;
				echo"<br>";
				echo $val->description;
				echo"<br>";
				echo $val->author;
			}
		}else{
			echo"{$id} Not found";
		}
	}
}
