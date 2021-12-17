<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Unit extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','xss');
        $this->load->model('M_unit','unit');
        if($this->session->userdata('status') != "login" ){
			redirect(base_url("Login"));
        }
    }

    public function ajax_list()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Login');
        }
        $list = $this->unit->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor=1;
        foreach ($list as $unit) {
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = $unit->nama_unit;
      
            //add html for action
            $row[] = '<center><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_unit('."'".$unit->id_unit."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_unit('."'".$unit->id_unit."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                   </center>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->unit->count_all(),
                        "recordsFiltered" => $this->unit->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function ajax_edit($id)
    {
        $data = $this->unit->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $this->_validate();
       
        $data = array(
                'nama_unit' => htmlentities($this->input->post('nama_unit')),
              
               
            );

           
        $insert = $this->unit->save($data);
        echo json_encode(array(
            "status" => TRUE
        ));
    }
 
    public function ajax_update()
    {
        $this->_validate();
        
            $data = array(
                'nama_unit' => htmlentities($this->input->post('nama_unit')),
                
            );
        
        $this->unit->update(array('id_unit' => htmlentities($this->input->post('id_unit'))), $data);
        echo json_encode(array("status" => TRUE));
    }
 

 

  
    public function ajax_delete($id)
    {
        $this->unit->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
 
    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('nama_unit') == '')
        {
            $data['inputerror'][] = 'nama_unit';
            $data['error_string'][] = 'Data nama unit harus di isi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
 
}