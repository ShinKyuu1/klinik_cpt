<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_dashboard');
        $this->load->view('dashboard/v_footer');
    }
}
