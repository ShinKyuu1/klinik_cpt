<?php

class Obat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_obat');
    }

    public function index()
    {
        $data['title'] = "Manajemen Data Obat";

        $data['obats'] = $this->m_obat->tampil_data()->result_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('obat/v_obat', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Obat ";

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('obat/v_tambah');
        $this->load->view('dashboard/v_footer');
    }

    public function insert()
    {
        $nama_obat = $this->input->post('nama_obat', true);
        $jenis_obat = $this->input->post('jenis_obat', true);
        $merk = $this->input->post('merk', true);

        $data = array(
            'nama_obat' => $nama_obat,
            'jenis_obat' => $jenis_obat,
            'merk' => $merk
        );

        $this->m_obat->insert_data($data);
        redirect('obat');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Data Obat";

        $where = array('id_obat' => $id);
        $data['obat'] = $this->m_obat->edit_data($where)->row_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('obat/v_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function update()
    {
        $id_obat = $this->input->post('id_obat', true);
        $nama_obat = $this->input->post('nama_obat', true);
        $jenis_obat = $this->input->post('jenis_obat', true);
        $merk = $this->input->post('merk', true);

        $data = array(
            'nama_obat' => $nama_obat,
            'jenis_obat' => $jenis_obat,
            'merk' => $merk
        );

        $where = array('id_obat' => $id_obat);

        $this->m_obat->update_data($data, $where);
        redirect('obat');
    }

    public function hapus($id)
    {
        $where = array('id_obat' => $id);

        $this->m_obat->hapus_data($where);
        redirect('obat');
    }
}
