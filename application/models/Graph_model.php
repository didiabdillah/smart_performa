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
        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_task_incompleted()
    {
        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        return $query->num_rows();
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

    function get_avg_completion_global()
    {
        $total_karyawan = $this->get_number_of_employee();

        $this->db->from('performa');
        $this->db->where('performa.status', 3);
        $query = $this->db->get();
        $result = $query->num_rows();

        return $result / $total_karyawan;
    }
}
