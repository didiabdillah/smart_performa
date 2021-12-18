<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Bag_sdm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'xss');
        $this->load->model('M_users', 'layanan');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Login"));
        }
    }

    public function ajax_sdm()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Login');
        }
        $list = $this->layanan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor = 1;
        foreach ($list as $layanan) {

            if ($layanan->jabatan == 2) {
                $btn = '<center><a class="btn btn-sm btn-info" href="' . base_url('Bag_sdm/detail/' . $layanan->id . '') . '" title="review" <i class="glyphicon glyphicon-pencil"></i> View</a>
                </center>';
                $no++;
                $row = array();
                $row[] = $nomor++;
                $row[] = $layanan->nama;
                $row[] = $layanan->nama_unit;
                $row[] = $layanan->nama_jabatan;

                // btn html
                $row[] = $btn;

                $data[] = $row;
            }
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->layanan->count_all(),
            "recordsFiltered" => $this->layanan->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    function index()
    {
        $this->template->load('template', 'sdm/dashboard');
    }

    function list_pekerja()
    {
        $this->template->load('template', 'sdm/list_pekerja');
    }

    function detail($id)
    {
        $this->load->model('M_sdm', 'detail');
        $data['pegawai'] = $this->detail->getsdm_by_id($id);
        $data['rating'] = $this->detail->getRating($id);
        $data['ongoing'] = $this->detail->getOngoing($id);
        $data['job'] = $this->detail->getJobSuccess($id);
        $data['top'] = $this->detail->getTopFive($id);
        $this->template->load('template', 'sdm/performa_pekerja', $data);
    }
}
