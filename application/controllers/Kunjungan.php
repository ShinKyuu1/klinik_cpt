<?php
class Kunjungan extends CI_Controller {
    function __construct(){
        parent::__construct();

    if(empty($this->session->userdata('login'))){
        redirect('auth');
        }

        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
        $this->load->model('m_obat');

    }

	public function index()
	{
        $data['title'] = "Data Kunjungan/Berobat";

        $data['kunjungans'] = $this->m_kunjungan->tampil_data()->result_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('kunjungan/v_kunjungan', $data);
        $this->load->view('dashboard/v_footer');
	}

    public function tambah(){
        $data['title'] = "Kunjungan Baru";

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('dashboard/v_header',$data);
        $this->load->view('kunjungan/v_tambah',$data);
        $this->load->view('dashboard/v_footer');
    }

    public function insert(){
        $tgl_berobat = $this->input->post('tgl_berobat', true);
        $pasien = $this->input->post('pasien', true);
        $dokter = $this->input->post('dokter', true);

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );
        $this->m_kunjungan->insert_data($data);
        redirect('kunjungan');
    }

    public function edit($id){
        $data['title'] = "Edit Data Kunjungan";

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $where = array('id_berobat' => $id);
        $data['kunjungan'] = $this->m_kunjungan->edit_data($where)->row_array();

        $this->load->view('dashboard/v_header', $data);
        $this->load->view('kunjungan/v_edit', $data);
        $this->load->view('dashboard/v_footer');
    }

    public function update(){
        $id_kunjungan = $this->input->post('id_kunjungan', true);
        $tgl_berobat = $this->input->post('tgl_berobat', true);
        $pasien = $this->input->post('pasien', true);
        $dokter = $this->input->post('dokter', true);

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $where = array('id_berobat' => $id_kunjungan);

        $this->m_kunjungan->update_data($data, $where);
        redirect('kunjungan');
    }

    public function hapus($id){
        $where = array('id_berobat' => $id);

        $this->m_kunjungan->hapus_data($where);
        redirect('kunjungan');
    }

    public function rekam($id){
        $data['title'] = "Rekam Medis";

        // Tampil data rekam medis
        $data['d'] = $this->m_kunjungan->tampil_rm($id)->row_array();

        // Riwayat Kunjungan
        $q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();

        // data obat pada combo
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        // resep obat
        $data['resep'] = $this->m_kunjungan->tampil_resep($id)->result_array();

        $this->load->view('dashboard/v_header',$data);
        $this->load->view('kunjungan/v_rekam_medis',$data);
        $this->load->view('dashboard/v_footer');
    }

    public function insert_rm(){
        $id_kunjungan = $this->input->post('id');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $tindakan = $this->input->post('tindakan');

        $data = array(
            'keluhan' => $keluhan,
            'diagnosa' => $diagnosa,
            'tindakan' => $tindakan
        );

        $where = array('id_berobat' => $id_kunjungan);
        $this->m_kunjungan->update_data($data, $where);
        redirect('kunjungan/rekam/'. $id_kunjungan);
    }

    public function insert_resep(){
        $id_kunjungan = $this->input->post('id');
        $obat = $this->input->post('obat');

        $data = array(
            'id_berobat' => $id_kunjungan,
            'id_obat' => $obat
        );

        $this->m_kunjungan->insert_resep($data);
        redirect('kunjungan/rekam/'. $id_kunjungan);
    }
 
    public function hapus_resep($id, $id_kunjungan) {
        $where = array('id_resep' => $id);

        $this->m_kunjungan->hapus_resep($where);
        redirect('kunjungan/rekam/'. $id_kunjungan);
    }
}
