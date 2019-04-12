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
        $this->load->model('income_model');
    }

    function index()
    {
        $data['saques_analise'] = $this->solicitation_model->getSaquesAnalise($this->session->userdata('id'));
        $data['saques_aprovado'] = $this->solicitation_model->getSaquesAprovado($this->session->userdata('id'));
        $data['saques_reprovado'] = $this->solicitation_model->getSaquesReprovado($this->session->userdata('id'));
        $balanco = $this->income_model->getBalanco($this->session->userdata('id'));
        $data['interest_total'] = 0;
        $new_interest = 0;
        foreach ($balanco as $key => $product) {
            if($product->client != $this->session->userdata('id')) {
                unset($balanco[$key]);
            }
            $interest = strtr($product->interest, array('.' => '', ',' => '.'));
            $new_interest += $interest;
        }
        $saque_limite = number_format($new_interest, 2, ',', '.');
        $data['interest_total'] = $saque_limite;
        $data['balanco']  = $balanco;
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
        $balanco = $this->income_model->getBalanco($this->session->userdata('id'));
        $juros  = $balanco->interest;
        if ($_POST['money'] > $juros ) {
            $this->session->set_flashdata('limite', 'Quantidade não pode ser maior que o limite disponível.');
            redirect('home');
        }
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