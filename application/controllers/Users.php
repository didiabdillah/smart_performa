<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','xss');
        $this->load->model('M_users','users');
        if($this->session->userdata('status') != "login" ){
			redirect(base_url("Login"));
        }
    }

    public function ajax_list()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Front');
        }
        $list = $this->users->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor=1;
        foreach ($list as $users) {
            if($users->role == '1'){
                $role = 'admin';
            }elseif($users->role == '2'){
                $role = 'manager';
            }elseif($users->role == '3'){
                $role = 'bag. sdm';
            }elseif($users->role == '4'){
                $role = 'pegawai';
            }
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = $users->no_pegawai;
            $row[] = $users->nama; 
            $row[] = $users->nama_unit;
            $row[] = $users->nama_jabatan;
            $row[] = $users->no_hp; 
            $row[] = $users->email; 
            $row[] = $role; 
           
            //add html for action
            $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_users('."'".$users->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_users('."'".$users->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                  <a class="btn btn-sm btn-info mt-2" href="javascript:void(0)" title="ganti password" onclick="ganti_password('."'".$users->id."'".')"> Ganti Password</a></center>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->users->count_all(),
                        "recordsFiltered" => $this->users->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function ajax_edit($id)
    {
        $data = $this->users->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
       
        $data = array(
                'no_pegawai' => htmlentities($this->input->post('no_pegawai')),
                'nama' => htmlentities($this->input->post('nama')),
                'unit' => htmlentities($this->input->post('unit')),
                'jabatan' => htmlentities($this->input->post('jabatan')),
                'no_hp' => htmlentities($this->input->post('no_hp')),
                'email' => htmlentities($this->input->post('email')),
                'password' => md5(htmlentities($this->input->post('password'))),
                'role' => htmlentities($this->input->post('role'))
               
            );

           
        $insert = $this->users->save($data);
        echo json_encode(array(
            "status" => TRUE
        ));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        
            $data = array(
                'no_pegawai' => htmlentities($this->input->post('no_pegawai')),
                'nama' => htmlentities($this->input->post('nama')),
                'unit' => htmlentities($this->input->post('unit')),
                'jabatan' => htmlentities($this->input->post('jabatan')),
                'no_hp' => htmlentities($this->input->post('no_hp')),
                'email' => htmlentities($this->input->post('email')),
               
                'role' => htmlentities($this->input->post('role'))
                
            );
        
        $this->users->update(array('id' => htmlentities($this->input->post('id'))), $data);
        echo json_encode(array("status" => TRUE));
    }
 

 

    public function ajax_ganti_password()
    {
     
        
            $data = array(
             
                'password' => md5(htmlentities($this->input->post('password'))),
                
                
            );
        
        $this->users->update(array('id' => htmlentities($this->input->post('id'))), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete($id)
    {
        $this->users->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('nama') == '')
        {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Data nama harus di isi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
 
}