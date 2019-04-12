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
        $this->load->model('income_model');
    }

    function index()
    {
        $data['saques'] = $this->solicitation_model->getSaques();
        $this->load->view('saque', $data);
    }

    function reprove()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id)) {
            show_404();
        }
        
        $data = array(
            'status' => 0
        );
        $this->solicitation_model->reprove($id, $data);
        redirect('saques');
    }

    function aprove()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id)) {
            show_404();
        }
        
        $data = array(
            'status' => 1
        );
        $this->solicitation_model->aprove($id, $data);

        $loadSolicitacao = $this->solicitation_model->getSolicitacao($id);
        $draft = $loadSolicitacao[0]->value;
        $client = $loadSolicitacao[0]->client;

        $this->income_model->updateInterest($client, $draft);
        redirect('saques');
    }
}

?>