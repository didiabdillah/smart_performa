<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graph_model extends CI_Model
{
    // Graphical Purpose
    function get_employee()
    {
        $this->db->from('users');
        $this->db->where('users.jabatan', 2);
        $query = $this->db->get();
        return $query->result();
    }

    function get_number_of_employee()
    {
        $this->db->from('users');
        $this->db->where('users.jabatan', 2);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_total_task_accepted()
    {
        $this->db->from('performa');
        $this->db->where('performa.status', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_total_task_completed()
    {
        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_top_performer()
    {
        $this->db->join('users', 'users.id = performa.pegawai');
        $this->db->select('performa.pegawai, users.nama, count(id_performa) as total_performa');
        $this->db->where('performa.status', 3);
        $this->db->group_by('pegawai');
        $this->db->order_by('total_performa', 'DESC');
        $this->db->from('performa');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }

    function get_top_performer_detail()
    {
        $this->db->join('users', 'users.id = performa.pegawai');
        $this->db->select('performa.pegawai, users.nama, count(id_performa) as total_performa');
        $this->db->where('performa.status', 3);
        $this->db->group_by('pegawai');
        $this->db->order_by('total_performa', 'DESC');
        $this->db->from('performa');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    function get_bottom_performer()
    {
        $this->db->join('users', 'users.id = performa.pegawai');
        $this->db->select('performa.pegawai, users.nama, count(id_performa) as total_performa');
        $this->db->where('performa.status', 3);
        $this->db->group_by('pegawai');
        $this->db->order_by('total_performa', 'ASC');
        $this->db->from('performa');
        $this->db->limit(5);
        $query = $this->db->get();

        return $query->result();
    }

    function get_task_completed()
    {
        $output = [];

        for ($i = 0; $i <= 11; $i++) {
            $this->db->from('performa');
            $this->db->where('performa.status', 3);
            $this->db->where('DATE(tanggal_selesai) >=', date('Y-m-d', strtotime("-" . $i + 1 . " month")));
            $this->db->where('DATE(tanggal_selesai) <=', date('Y-m-d', strtotime("-" . $i  . " month")));
            $query = $this->db->get();
            $value = $query->num_rows();

            $output[$i] = $value;
        }

        return array_reverse($output);
    }

    function get_task_incompleted()
    {
        $output = [];

        for ($i = 0; $i <= 11; $i++) {
            $this->db->from('performa');
            $this->db->where('performa.status != ', 3);
            $this->db->where('DATE(created_at) >=', date('Y-m-d', strtotime("-" . $i + 1 . " month")));
            $this->db->where('DATE(created_at) <=', date('Y-m-d', strtotime("-" . $i  . " month")));
            $query = $this->db->get();
            $value = $query->num_rows();

            $output[$i] = $value;
        }

        return array_reverse($output);
    }

    function get_avg_rating_global()
    {
        $this->db->from('performa');
        $this->db->select('avg(performa) as avg_rating');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        $result = $query->row();
        return $result->avg_rating;
    }

    function get_avg_speed_completion_global()
    {
        $total_task = $this->get_number_of_task_global();

        $this->db->from('performa');
        $this->db->select('sum(datediff(tanggal_deadline, tanggal_selesai)) as avg_speed');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        $result = $query->row();

        if ($total_task == 0) {
            $total_task = 1;
        } else {
            $total_task = $total_task;
        }

        return $result->avg_speed / $total_task;
    }

    private function get_number_of_task_global()
    {
        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        return $result = $query->num_rows();
    }

    function get_avg_completion_global()
    {
        $total_task = $this->get_number_of_task_global();

        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        $result = $query->num_rows();

        if ($total_task == 0) {
            $total_task = 1;
        } else {
            $total_task = $total_task;
        }

        return ($result / $total_task) * $total_task;
    }

    function get_avg_rating_employee($employee_id)
    {
        $this->db->from('performa');
        $this->db->select('avg(performa) as avg_rating');
        $this->db->where('performa.status', 3);
        $this->db->where('performa.pegawai', $employee_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result->avg_rating;
    }

    private function get_number_of_task_employee($employee_id)
    {
        $this->db->from('performa');
        $this->db->where('performa.pegawai', $employee_id);
        $query = $this->db->get();
        return $result = $query->num_rows();
    }

    function get_avg_completion_employee($employee_id)
    {
        $total_task = $this->get_number_of_task_employee($employee_id);

        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $this->db->where('performa.pegawai', $employee_id);
        $query = $this->db->get();
        $result = $query->num_rows();

        if ($total_task == 0) {
            $total_task = 1;
        } else {
            $total_task = $total_task;
        }
        return ($result / $total_task) * $total_task;
    }

    private function get_number_of_task_speed_employee($employee_id)
    {
        $this->db->from('performa');
        $this->db->where('performa.pegawai', $employee_id);
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        return $result = $query->num_rows();
    }

    function get_avg_speed_completion_employee($employee_id)
    {
        $total_task = $this->get_number_of_task_speed_employee($employee_id);

        $this->db->from('performa');
        $this->db->select('sum(datediff(tanggal_deadline, tanggal_selesai)) as avg_speed');
        $this->db->where('performa.status', 3);
        $this->db->where('performa.pegawai', $employee_id);
        $query = $this->db->get();
        $result = $query->row();

        if ($total_task == 0) {
            $total_task = 1;
        } else {
            $total_task = $total_task;
        }

        return $result->avg_speed / $total_task;
    }
}
