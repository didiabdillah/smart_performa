<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Manager extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'slug');
        $this->load->model('Dashboard_model', 'model');
        $this->load->model('Graph_model', 'graph');

        if (!$this->session->userdata('user_id')) {
            redirect(base_url('Login'));
        }
    }


    function index()
    {
        $data = [
            'employee'    => $this->graph->get_employee(),
            'number_of_employee'    => $this->graph->get_number_of_employee(),
            'total_task_accepted'   => $this->graph->get_total_task_accepted(),
            'total_task_completed'   => $this->graph->get_total_task_completed(),
            'top_performer' => $this->graph->get_top_performer(),
            'bottom_performer' => $this->graph->get_bottom_performer(),
        ];

        $this->template->load('template', 'manager/dashboard', $data);
    }

    // function data_layanan()
    // {
    //     $data = array(
    //         'unit'      => $this->model->get_unit(),
    //     );
    //     $this->template->load('template', 'manager/data_layanan', $data);
    // }

    function list_pekerjaan()
    {
        $data = array(
            'unit' => $this->model->get_unit(),
        );
        $this->template->load('template', 'manager/list_pekerjaan', $data);
    }

    function detail($id)
    {
        $this->load->model('M_manager', 'manager');
        $data['list'] = $this->manager->getmanager_by_id($id);
        $data['pegawai'] = $this->manager->getAllData('users');
        $this->form_validation->set_rules('pegawai', 'Pegawai', 'required');
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'manager/detail_pekerjaan', $data);
        } else {
            $id = $this->input->post('id');
            $data = [
                'pegawai' => $this->input->post('pegawai'),
                'status' => 1,
            ];
            $this->manager->ubahDataPegawai($data, $id);
            redirect('manager/list_pekerjaan');
        }
    }

    // function review($id)
    // {
    //     $this->load->model('M_manager', 'manager');
    //     $data['list'] = $this->manager->getmanager_by_id($id);
    //     $data['pegawai'] = $this->manager->getAllData('users');
    //     $this->form_validation->set_rules('catatan', 'Catatan', 'required');
    //     if ($this->form_validation->run() == false) {
    //         $this->template->load('template', 'manager/review_pekerjaan', $data);
    //     } else {
    //         $id = $this->input->post('id');
    //         $data = [
    //             'catatan' => $this->input->post('catatan'),
    //             'performa' => $this->input->post('rating'),
    //             'status' => 3,
    //         ];
    //         $this->manager->ubahDataPegawai($data, $id);
    //         redirect('manager/list_pekerjaan');
    //     }
    // }
}
