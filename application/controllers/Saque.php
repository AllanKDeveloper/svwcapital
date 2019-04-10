<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saque extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin'))
        {
            redirect('login');
        }
        $this->load->model('solicitation_model');
    }

    function index()
    {
        $data['saques'] = $this->solicitation_model->getSaques();
        $this->load->view('saque', $data);
    }
}

?>