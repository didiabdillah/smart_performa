<?php

class User_model extends CI_Model
{
    private $_table = "users";



    
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }


    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    function updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id={$user_id}";
        $this->db->query($sql);
    }


    



   

}
