<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sdm extends CI_Model
{
    var $table = 'users';

    public function getsdm_by_id($id)
    {
        $this->db->join('jabatan', 'users.jabatan = jabatan.id_jabatan', 'left');
        $this->db->join('unit', 'users.unit = unit.id_unit', 'left');
        $this->db->join('performa', 'users.id = performa.pegawai', 'left');
        $this->db->from($this->table);
        $this->db->where('users.id', $id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function getRating($id)
    {
        $query = "SELECT SUM(`performa`)/COUNT(`pegawai`) AS rating
        FROM `performa` WHERE `performa`.`pegawai` = $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function getOngoing($id)
    {
        $query = "SELECT COUNT(`status`) AS ongoing
        FROM `performa` WHERE `performa`.`pegawai` = $id AND `status` < 3
        ";
        return $this->db->query($query)->row_array();
    }

    public function getJobSuccess($id)
    {
        $query = "SELECT (SUM(DATE(`tanggal_selesai`) < `tanggal_deadline`) / COUNT(`status`)) * 100 AS jobsuccess FROM  `performa` WHERE `performa`.`pegawai` = $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function getTopFive($id)
    {
        $query = "SELECT *
        FROM `performa` WHERE `performa`.`pegawai` = $id AND `status` = 3
        ";
        return $this->db->query($query)->result_array();
    }

    public function getTaskCompleted($id)
    {
        $query = "SELECT MONTH(`tanggal_selesai`) AS bulan, COUNT(`status`) AS jumlah FROM `performa` WHERE `pegawai` = $id AND status = 3
        ";
        return $this->db->query($query)->row_array();
    }

    public function getTaskIncompleted($id)
    {
        $query = "SELECT MONTH(`tanggal_deadline`) AS bulan, COUNT(`status`) AS jumlah FROM `performa` WHERE `pegawai` = $id AND status < 2
        ";
        return $this->db->query($query)->row_array();
    }

    public function getCompleted($id)
    {
        $query = "SELECT COUNT(`status`) AS completed
        FROM `performa` WHERE `performa`.`pegawai` = $id AND `status` = 3
        ";
        return $this->db->query($query)->row_array();
    }

    public function getAvgCompletion()
    {
        $query = "SELECT SUM(`status` = 3) / SUM(`status` > 0) * 10 AS average  FROM `performa`";
        return $this->db->query($query)->row_array();
    }
}
