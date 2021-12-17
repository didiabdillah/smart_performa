<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url','slug'); 
        $this->load->model('Dashboard_model','model');
        // $this->load->model('Pegawai_model','model');
       
		if (!$this->session->userdata('user_id')) {
            redirect(base_url('Login'));
        }

            
	}


    function index(){
        $this->template->load('template', 'pegawai/dashboard');
    }

    function data_layanan(){
        $data = array(
            'unit'      => $this->model->get_unit(),
        );
        $this->template->load('template', 'pegawai/data_layanan',$data);
    }


    function data_pekerjaan(){
        
        $this->template->load('template', 'pegawai/data_pekerjaan');
    }

   
}