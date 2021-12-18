<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'xss');
        $this->load->model('M_layanan', 'layanan');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Login"));
        }
    }


    public function ajax_manager()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Login');
        }
        $list = $this->layanan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor = 1;
        foreach ($list as $layanan) {
            if ($layanan->status == '0') {
                $status = 'Belum Selesai';
                $btn = '<center>
                <a class="btn btn-sm btn-primary" href="' . base_url('Manager/detail/' . $layanan->id_performa . '') . '" title="Edit"><i class="glyphicon glyphicon-pencil"></i> View</a>
                 </center>';
            } elseif ($layanan->status == '1') {
                $status = 'Proses';
                $btn = 'Pemohon layanan sedang di proses';
            } elseif ($layanan->status == '2') {
                $status = 'Menunggu Review';
                $btn = '<center> Sedang direview </center>';
            } elseif ($layanan->status == '3') {
                $status = 'Selesai';
                $btn = 'Sudah direview';
            }
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = $layanan->deskripsi_layanan;
            $row[] = tanggal_indo($layanan->tanggal_deadline);
            $row[] = $layanan->nama_unit;
            $row[] = $layanan->nama;
            $row[] = $status;

            //add html for action
            $row[] = $btn;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->layanan->count_all(),
            "recordsFiltered" => $this->layanan->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_list()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Login');
        }
        $list = $this->layanan->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor = 1;
        foreach ($list as $layanan) {
            if ($layanan->status == '0') {
                $status = 'Belum Selesai';
                $btn = '<center>
                <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_layanan(' . "'" . $layanan->id_performa . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_layanan(' . "'" . $layanan->id_performa . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                 </center>';
            } elseif ($layanan->status == '1') {
                $status = 'Proses';
                $btn = '<center>Pemohon layanan sedang di proses</center>';
            } elseif ($layanan->status == '2') {
                $status = 'Selesai';
                $btn = '<center><a class="btn btn-sm btn-info" href="' . base_url('Pegawai/review/' . $layanan->id_performa . '') . '" title="review" onclick="review_layanan(' . "'" . $layanan->id_performa . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Review</a>
                </center>';
            } elseif ($layanan->status == '3') {
                $status = 'Done';
                $btn = '<center>Sudah direview</center>';
            }
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = tanggal_indo($layanan->tanggal_deadline);
            $row[] = $layanan->deskripsi_layanan;
            $row[] = $layanan->nama_unit;
            $row[] = $status;

            //add html for action
            $row[] = $btn;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->layanan->count_all(),
            "recordsFiltered" => $this->layanan->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function ajax_list_pekerjaan()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('Login');
        }
        $list = $this->layanan->get_datatables($this->session->userdata('user_id'));
        $data = array();
        $no = $_POST['start'];
        $nomor = 1;
        $btn = null;
        foreach ($list as $layanan) {
            if ($layanan->status == '0') {
                $status = '<center>Belum Selesai</center>';
            } elseif ($layanan->status == '1') {
                $status = 'Proses';
                $btn = '<center><a class="btn btn-sm btn-info" href="javascript:void(0)" title="selesai" onclick="selesai_layanan(' . "'" . $layanan->id_performa . "'" . ')"> Selesai</a>
                </center>';
            } elseif ($layanan->status == '2') {
                $status = 'Menunggu Review';
                $btn = '<center><a class="btn btn-sm btn-success" href="' . base_url() . 'assets/uploads/' . $layanan->file . '" target="_blank" title="lihat berkas"> Lihat Berkas</a>';
            } elseif ($layanan->status == '3') {
                $status = 'Done';
                $btn = '<center>Sudah Selesai</center>';
            }
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = tanggal_indo($layanan->created_at);
            $row[] = tanggal_indo($layanan->tanggal_deadline);
            $row[] = $layanan->deskripsi_layanan;
            $row[] = $status;

            //add html for action
            $row[] = $btn;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->layanan->count_all($this->session->userdata('user_id')),
            "recordsFiltered" => $this->layanan->count_filtered($this->session->userdata('user_id')),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function ajax_edit($id)
    {
        $data = $this->layanan->get_by_id($id);
        echo json_encode($data);
    }

    public function detail($id)
    {
        $data = array(
            'detail' => $this->layanan->get_by_id($id),
        );
        $this->template->load('template', 'manager/detail_pekerjaan', $data);
    }

    public function ajax_add()
    {
        $this->_validate();

        $data = array(
            'pemohon' => $this->session->userdata('user_id'),
            'unit' => htmlentities($this->input->post('unit')),
            'deskripsi_layanan' => htmlentities($this->input->post('deskripsi_layanan')),
            'tanggal_deadline' => htmlentities($this->input->post('tanggal_deadline')),
            'status' => '0',
            'created_at' => date('Y-m-d H:i:s')

        );


        $insert = $this->layanan->save($data);
        echo json_encode(array(
            "status" => TRUE
        ));
    }

    public function ajax_update()
    {
        $this->_validate();

        $data = array(
            'unit' => htmlentities($this->input->post('unit')),
            'deskripsi_layanan' => htmlentities($this->input->post('deskripsi_layanan')),
            'tanggal_deadline' => htmlentities($this->input->post('tanggal_deadline')),
            'update_at' => date('Y-m-d H:i:s')

        );

        $this->layanan->update(array('id_performa' => htmlentities($this->input->post('id'))), $data);
        echo json_encode(array("status" => TRUE));
    }





    public function ajax_delete($id)
    {
        $this->layanan->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('deskripsi_layanan') == '') {
            $data['inputerror'][] = 'deskripsi_layanan';
            $data['error_string'][] = 'Data deskripsi layanan harus di isi';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function ajax_selesai()
    {

        $where = array(
            'id_performa' => htmlentities($this->input->post('id'))
        );


        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'pdf|PDF|doc|docx|png|jpg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nant

        $this->upload->initialize($config);
        if (!empty($_FILES['document']['name'])) {
            if ($this->upload->do_upload('document')) {

                $gbr = $this->upload->data();
                $data = array(
                    'file' => $gbr['file_name'],
                    'status' => '2',
                    'tanggal_selesai' => date('Y-m-d H:i:s')
                );

                $insert = $this->layanan->update($where, $data);
            }
        }
        echo json_encode(array("status" => TRUE));
    }
}
