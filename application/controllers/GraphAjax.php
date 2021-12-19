<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class GraphAjax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'slug');
        $this->load->model('Graph_model', 'graph');

        // if (!$this->session->userdata('user_id')) {
        //     redirect(base_url('Login'));
        // }

        // require_once 'vendor/autoload.php';

    }

    public function overall_health_index()
    {
        $json = [1, 2];
        echo json_encode($json, true);
    }

    public function overall_avg_data()
    {
        $json = [1, 2, 3];
        echo json_encode($json, true);
    }

    public function employee_performance_analysis()
    {
        $json = [1, 2, 3];
        echo json_encode($json, true);
    }

    public function select_employee_performance_analysis()
    {
        $employee = $this->input->post('karyawan_id');

        $json = [100, 20, 3];
        echo json_encode($json, true);
    }

    public function task_completed()
    {
        $json = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        echo json_encode($json, true);
    }

    public function task_incompleted()
    {
        $json = [12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
        echo json_encode($json, true);
    }

    public function analytical_data_date()
    {
        $date = $this->input->post('date');

        $json = [1, 2, 3];
        echo json_encode($json, true);
    }
}
