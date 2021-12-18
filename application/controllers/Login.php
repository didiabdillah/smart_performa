<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('Recaptcha');
    }

    public function index()
    {
        $data = array(
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        );

        if ($this->session->userdata('status') == "login") {
            redirect(base_url("Dashboard"));
        }

        $this->load->view('login', $data);
    }

    function do_login()
    {
        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
        $no_pegawai = $this->input->post('no_pegawai');
        $password = $this->input->post('password');
        $where = array(
            'no_pegawai' => $no_pegawai,
            'password' => md5($password)
        );

        if ($response['success'] == TRUE) {

            $cek = $this->user_model->cek_login("users", $where);

            $exist = $cek->num_rows();
            if ($exist > 0) {
                foreach ($cek->result() as $row) {
                    $user_id = $row->id;
                    $role = $row->role;
                    $full_name = $row->nama;
                    $unit = $row->unit;
                }


                $data_session = array(
                    'user_id' => $user_id,
                    'nama' => $full_name,
                    'role' => $role,
                    'unit' => $unit,
                    'status' => "login"
                );

                $this->user_model->updateLastLogin($user_id);

                $this->session->set_userdata($data_session);

                redirect(base_url("Dashboard"));
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    Wrong Password
    </div>');
                redirect(base_url("Login"));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    Wrong Password
    </div>');
            redirect(base_url("Login"));
        }
    }


    function logout()
    {
        $this->session->unset_userdata('status');
        $this->session->sess_destroy();
        redirect(base_url("Login"));
    }
}
