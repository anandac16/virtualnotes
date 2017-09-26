	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Data_Notes extends CI_Model{
		function tampil_data(){
			return $this->db->get('notes');
		}
	 
		function get_data($where){
			return $this->db->get_where('notes',$where);
		}
		
		function search_notes($word){
			return $this->db->get_where("notes","CONCAT(title,description) LIKE '%$word%'");
		}
	}
	
