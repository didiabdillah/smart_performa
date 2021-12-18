<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graph_model extends CI_Model
{
    // Graphical Purpose
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
}
