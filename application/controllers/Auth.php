<?php

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
  
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('login/v_login');
    }

    public function login_aksi()
    {
        $user = $this->input->post('username',true);
        $pass = md5($this->input->post ('password',true));

    //rule validasi
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() != FALSE){
        
        $where = array(
            'username' => $user,
            'password' => $pass
        );

        $ceklogin = $this->m_login->cek_Login($where)->num_rows();

        if($ceklogin > 0){
            $sess_data = array(
                    'login' => 'OK',
                    'username' => $user
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url());               
            }else{
                redirect('auth');
            }
        }else{
            $this->load->view('login/v_login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
