<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
            redirect('login');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('client_model');
    }

    function index()
    {
        $id = $this->session->userdata('id');
        $data['perfil'] = $this->client_model->getPerfil($id);
        $this->load->view('perfil', $data);
    }

    function edita() {
        $id = $this->session->userdata('id');
        if (empty($id)) {
            show_404();
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run())
        {
            if (!empty($this->input->post('password'))) {
                $encrypted_password = $this->encrypt->encode($this->input->post('password'));
                $data = array(
                    'id'        => $id,
                    'email'     => $this->input->post('email'),
                    'password'  => $encrypted_password,
                );
            } else {
                $data = array(
                    'id'        => $id,
                    'email'     => $this->input->post('email'),
                );
            }

            $this->client_model->update($id, $data);
            $this->session->set_flashdata('message', 'Conta atualizada com sucesso!');
            redirect('clientes');
        }
        else
        {
            $this->index();
        }
    }
}

?>