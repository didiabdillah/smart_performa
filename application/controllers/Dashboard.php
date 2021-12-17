<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url','slug'); 
     
       
		// if (!$this->session->userdata('user_id')) {
        //     redirect(base_url('Login'));
        // }

        require_once 'vendor/autoload.php';
       
	}


    function index(){
        $this->template->load('template', 'admin/dashboard');
    }

}