<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'slug');
        $this->load->model('Dashboard_model', 'model');

        if (!$this->session->userdata('user_id')) {
            redirect(base_url('Login'));
        }

        // require_once 'vendor/autoload.php';

    }


    function index()
    {

        if ($this->session->userdata('role') == '1') {
            redirect(base_url('Dashboard/home'));
        } else if ($this->session->userdata('role') == '2') {
            redirect(base_url('Manager'));
        } else if ($this->session->userdata('role') == '3') {
            redirect(base_url('Bag_sdm'));
        } else if ($this->session->userdata('role') == '4') {
            redirect(base_url('Pegawai'));
        } else {
            redirect(base_url('Login'));
        }
    }

    function home()
    {
        $this->template->load('template', 'admin/dashboard');
    }

    function analytical()
    {
        $this->template->load('template', 'admin/analytical');
    }


    function data_user()
    {
        $data = array(
            'unit'      => $this->model->get_unit(),
            'jabatan'   => $this->model->get_jabatan()
        );
        $this->template->load('template', 'admin/data_user', $data);
    }

    function data_unit()
    {
        $this->template->load('template', 'admin/data_unit');
    }

    function data_jabatan()
    {
        $this->template->load('template', 'admin/data_jabatan');
    }
}
