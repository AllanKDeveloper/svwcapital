<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
            redirect('login');
        }
        $this->load->model('solicitation_model');
    }

    function index()
    {
        $data['saques_analise'] = $this->solicitation_model->getSaquesAnalise($this->session->userdata('id'));
        $data['saques_aprovado'] = $this->solicitation_model->getSaquesAprovado($this->session->userdata('id'));
        $data['saques_reprovado'] = $this->solicitation_model->getSaquesReprovado($this->session->userdata('id'));
        $this->load->view('home', $data);
    }

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value)
        {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }

    function solicita()
    {
        $data = array(
            'client' => $this->session->userdata('id'),
            'value' => $_POST['money'],
            'date' => date('d/m/Y')
        );
        $this->solicitation_model->insert($data);
        $this->session->set_flashdata('message', 'Solicitação enviada com sucesso, aguarde a avaliação da SVWCapital.');
        redirect('home');
    }
}

?>