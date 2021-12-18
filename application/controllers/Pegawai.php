<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'slug');
        $this->load->model('Dashboard_model', 'model');
        // $this->load->model('Pegawai_model','model');

        if (!$this->session->userdata('user_id')) {
            redirect(base_url('Login'));
        }
    }


    function index()
    {
        $this->template->load('template', 'pegawai/dashboard');
    }

    function data_layanan()
    {
        $data = array(
            'unit'      => $this->model->get_unit(),
        );
        $this->template->load('template', 'pegawai/data_layanan', $data);
    }


    function data_pekerjaan()
    {

        $this->template->load('template', 'pegawai/data_pekerjaan');
    }

    function review($id)
    {
        $this->load->model('M_manager', 'manager');
        $data['list'] = $this->manager->getmanager_by_id($id);
        $data['pegawai'] = $this->manager->getAllData('users');
        $this->form_validation->set_rules('catatan', 'Catatan', 'required');
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'pegawai/review_pekerjaan', $data);
        } else {
            $id = $this->input->post('id');
            $data = [
                'catatan' => $this->input->post('catatan'),
                'performa' => $this->input->post('rating'),
                'status' => 3,
            ];
            $this->manager->ubahDataPegawai($data, $id);
            redirect('Pegawai/data_pekerjaan');
        }
    }
}
