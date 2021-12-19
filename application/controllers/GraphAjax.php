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

    public function overall_health_index_date()
    {
        $tanggal = $this->input->post('tanggal');

        $json = [2, 4];
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

    public function task_completed_date()
    {
        $tanggal = $this->input->post('tanggal');

        $json = [10, 200, 3000, 40, 500, 6000, 70, 800, 9000, 100, 110, 12000];
        echo json_encode($json, true);
    }

    public function task_incompleted()
    {
        $json = [12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
        echo json_encode($json, true);
    }

    public function task_incompleted_date()
    {
        $tanggal = $this->input->post('tanggal');

        $json = [120, 1100, 10000, 90, 800, 7000, 60, 500, 4000, 30, 200, 1000];
        echo json_encode($json, true);
    }

    public function analytical_data_date()
    {
        $date = $this->input->post('date');

        $json = [1, 2, 3];
        echo json_encode($json, true);
    }

    public function top_four_performer_date()
    {
        $tanggal = $this->input->post('tanggal');

        $html = '<table class="table" id="topFourTable">
                                          <thead>
                                              <tr>
                                                  <th scope="col">Nama</th>
                                                  <th scope="col">Avg Rating</th>
                                                  <th scope="col">Avg Completion</th>
                                                  <th scope="col">Avg Speed</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                                                                              <tr>
                                                      <td><nama</td>
                                                      <td>1</td>
                                                      <td>2</td>
                                                      <td>3</td>
                                                  </tr>
                                                                                       </tbody>
                                      </table>';

        echo $html;
    }
}
