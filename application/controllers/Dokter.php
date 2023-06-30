<?php

class Dokter extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }

        $this->load->model('m_dokter');

    }

    public function index()
    {
        $data['title'] = "Manajemen Data Dokter";

        $data['dokters'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('dokter/v_dokter', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Dokter ";
        
        $this->load->view('dashboard/v_header', $data);
        $this->load->view('dokter/v_tambah');
        $this->load->view('dashboard/v_footer');
    }

    public function insert()
    {
        $nama_dokter = $this->input->post('nama_dokter', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $alamat = $this->input->post('alamat', true);

        $data = array(
            'nama_dokter' => $nama_dokter,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat
        );

        $this->m_dokter->insert_data($data);
        redirect('dokter');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Data Dokter";

        $where = array('id_dokter' => $id);
        $data['dokter'] = $this->m_dokter->edit_data($where)->row_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('dokter/v_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function update()
    {
        $id_dokter = $this->input->post('id_dokter', true);
        $nama_dokter = $this->input->post('nama_dokter', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $alamat = $this->input->post('alamat', true);

        $data = array(
            'nama_dokter' => $nama_dokter,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat
        );

        $where = array('id_dokter' => $id_dokter);

        $this->m_dokter->update_data($data, $where);
        redirect('dokter');
    }

    public function hapus($id)
    {
        $where = array('id_dokter' => $id);

        $this->m_dokter->hapus_data($where);
        redirect('dokter');
    }
}