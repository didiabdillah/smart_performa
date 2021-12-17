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
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');
        $where = array(
            'nik' => $nik,
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
                    $skpd = $row->skpd;
                  
                }

                
                $data_session = array(
                    'user_id' => $user_id,
                    'nama' => $full_name,
                    'role' => $role,
                    'skpd' => $skpd,
                    'status' => "login"
                );

                $this->user_model->updateLastLogin($user_id);

                $this->session->set_userdata($data_session);

                redirect(base_url("Dashboard"));
            } else {
                redirect(base_url("Login"));
            }
        } else {
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
