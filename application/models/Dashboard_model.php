<?php
	class Dashboard_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		
		function get_jabatan(){
			return $this->db->get('jabatan')->result();
		}

		function get_unit(){
			return $this->db->get('unit')->result();
		}
 
	}
?>