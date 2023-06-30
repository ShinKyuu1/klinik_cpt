<?php

class Pasien extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }

        $this->load->model('m_pasien');

    }

    public function index()
    {
        $data['title'] = "Manajemen Data pasien";

        $data['pasiens'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('pasien/v_pasien', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data pasien ";
        
        $this->load->view('dashboard/v_header', $data);
        $this->load->view('pasien/v_tambah');
        $this->load->view('dashboard/v_footer');
    }

    public function insert()
    {
        $nama_pasien = $this->input->post('nama_pasien', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $umur = $this->input->post('umur', true);

        $data = array(
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        $this->m_pasien->insert_data($data);
        redirect('pasien');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Data pasien";

        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('pasien/v_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function update()
    {
        $id_pasien = $this->input->post('id_pasien', true);
        $nama_pasien = $this->input->post('nama_pasien', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $umur = $this->input->post('umur', true);

        $data = array(
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        $where = array('id_pasien' => $id_pasien);

        $this->m_pasien->update_data($data, $where);
        redirect('pasien');
    }

    public function hapus($id)
    {
        $where = array('id_pasien' => $id);

        $this->m_pasien->hapus_data($where);
        redirect('pasien');
    }
}