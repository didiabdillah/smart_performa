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
        $avg_rating = $this->graph->get_avg_rating_global();
        $avg_completion = $this->graph->get_avg_completion_global();
        $avg_speed_completion = $this->graph->get_avg_speed_completion_global();

        $sum = $avg_rating + $avg_speed_completion + $avg_completion;
        $avg = ($sum / 3) * 10;

        $json = [100 - $avg, $avg];
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
        $avg_rating = $this->graph->get_avg_rating_global();
        $avg_completion = $this->graph->get_avg_completion_global();
        $avg_speed_completion = $this->graph->get_avg_speed_completion_global();

        $json = [$avg_rating, $avg_completion, $avg_speed_completion];
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

        $avg_rating = $this->graph->get_avg_rating_employee($employee);
        $avg_completion = $this->graph->get_avg_completion_employee($employee);
        $avg_speed_completion = $this->graph->get_avg_speed_completion_employee($employee);

        if ($avg_rating) {
            $avg_rating = $avg_rating;
        } else {
            $avg_rating = 0;
        }

        if ($avg_completion) {
            $avg_completion = $avg_completion;
        } else {
            $avg_completion = 0;
        }

        if ($avg_speed_completion) {
            $avg_speed_completion = $avg_speed_completion;
        } else {
            $avg_speed_completion = 0;
        }

        $json = [$avg_rating, $avg_completion, $avg_speed_completion];
        echo json_encode($json, true);
    }

    public function task_completed()
    {
        $task_completed = $this->graph->get_task_completed();
        $month = [];

        for ($i = 0; $i <= 11; $i++) {
            $month[$i] = date('F', strtotime("-" . $i . " month"));
        }

        $json = [
            "result_data" => $task_completed,
            "month" => array_reverse($month)
        ];
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
        $task_incompleted = $this->graph->get_task_incompleted();
        $month = [];

        for ($i = 0; $i <= 11; $i++) {
            $month[$i] = date('F', strtotime("-" . $i . " month"));
        }

        $json = [
            "result_data" => $task_incompleted,
            "month" => array_reverse($month)
        ];
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
