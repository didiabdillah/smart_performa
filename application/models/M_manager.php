<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_manager extends CI_Model
{
    var $table = 'performa';
    public function getList($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function ubahDataPegawai($data, $id)
    {
        $this->db->where('id_performa', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function getmanager_by_id($id)
    {
        $this->db->join('unit', 'performa.unit = unit.id_unit');
        $this->db->join('jabatan', 'performa.pemohon = jabatan.id_jabatan');
        $this->db->from($this->table);
        $this->db->where('id_performa', $id);
        return $this->db->get()->row_array();;
    }
}
