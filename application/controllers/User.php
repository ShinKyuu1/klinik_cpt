<?php

class User extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }

        $this->load->model('m_user');

    }

    public function index()
    {
        $data['title'] = "Manajemen Data User";

        $data['users'] = $this->m_user->tampil_data()->result_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('user/v_user', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data User ";
        
        $this->load->view('dashboard/v_header', $data);
        $this->load->view('user/v_tambah');
        $this->load->view('dashboard/v_footer');
    }

    public function insert()
    {
        $username = $this->input->post('username', true);
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $password = md5($this->input->post('password', true));

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap
        );

        $this->m_user->insert_data($data);
        redirect('user');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Data User";

        $where = array('id_user' => $id);
        $data['user'] = $this->m_user->edit_data($where)->row_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('user/v_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function update()
    {
        $id_user = $this->input->post('id_user', true);
        $username = $this->input->post('username', true);
        $nama_lengkap = $this->input->post('nama_lengkap', true);
        $password = md5($this->input->post('password', true));

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap
        );

        $where = array('id_user' => $id_user);

        $this->m_user->update_data($data, $where);
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);

        $this->m_user->hapus_data($where);
        redirect('user');
    }
}