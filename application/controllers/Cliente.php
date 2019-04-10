<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin'))
        {
            redirect('login');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('client_model');
        $this->load->model('income_model');
    }

    function index()
    {
        $data['clients'] = $this->client_model->getClients();
        $this->load->view('client', $data);
    }

    function cadastro() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Senha', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirme a Senha', 'required|trim');
        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('birthday', 'Data de Nascimento', 'required');

        if ($this->form_validation->run())
        {
            $encrypted_password = $this->encrypt->encode($this->input->post('password'));
            $data = array(
                'name'                  => $this->input->post('name'),
                'email'                 => $this->input->post('email'),
                'password'              => $encrypted_password,
                'birthday'              => $this->input->post('birthday'),
                'profession'            => !empty($this->input->post('profession')) ? $this->input->post('profession') : null,
                'marital_status'        => !empty($this->input->post('marital_status')) ? $this->input->post('marital_status') : null,
                'cli_cgc'               => !empty($this->input->post('cli_cgc')) ? $this->input->post('cli_cgc') : null,
                'cli_num'               => !empty($this->input->post('cli_num')) ? $this->input->post('cli_num') : null,
                'cli_end'               => !empty($this->input->post('cli_end')) ? $this->input->post('cli_end') : null,
                'cli_bnc'               => !empty($this->input->post('cli_bnc')) ? $this->input->post('cli_bnc') : null,
                'cli_agn'               => !empty($this->input->post('cli_agn')) ? $this->input->post('cli_agn') : null,
                'cli_cct'               => !empty($this->input->post('cli_cct')) ? $this->input->post('cli_cct') : null,
                'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
                'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
            );
            $id = $this->client_model->insert($data);
            if ($id > 0) {
                $income = array(
                    'client' => $id,
                    'cash' => $data['cash'],
                    'contracted_interest' => $data['contracted_interest'],
                    'date_contribution' => date('d/m/Y')
                );
                $this->income_model->insert($income);
                $this->session->set_flashdata('message', 'Conta criado com sucesso!');
                redirect('clientes');
            }
        }
        else
        {
            $this->index();
        }
    }

    function edita() {
        $id = $this->input->post('id');
        if (empty($id)) {
            show_404();
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('birthday', 'Data de Nascimento', 'required');

        if ($this->form_validation->run())
        {
            if (!empty($this->input->post('password'))) {
                $encrypted_password = $this->encrypt->encode($this->input->post('password'));
                $data = array(
                    'id'                    => $this->input->post('id'),
                    'name'                  => $this->input->post('name'),
                    'email'                 => $this->input->post('email'),
                    'password'              => $encrypted_password,
                    'birthday'              => $this->input->post('birthday'),
                    'profession'            => !empty($this->input->post('profession')) ? $this->input->post('profession') : null,
                    'marital_status'        => !empty($this->input->post('marital_status')) ? $this->input->post('marital_status') : null,
                    'cli_cgc'               => !empty($this->input->post('cli_cgc')) ? $this->input->post('cli_cgc') : null,
                    'cli_num'               => !empty($this->input->post('cli_num')) ? $this->input->post('cli_num') : null,
                    'cli_end'               => !empty($this->input->post('cli_end')) ? $this->input->post('cli_end') : null,
                    'cli_bnc'               => !empty($this->input->post('cli_bnc')) ? $this->input->post('cli_bnc') : null,
                    'cli_agn'               => !empty($this->input->post('cli_agn')) ? $this->input->post('cli_agn') : null,
                    'cli_cct'               => !empty($this->input->post('cli_cct')) ? $this->input->post('cli_cct') : null,
                    'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                    'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                    'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
                    'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                    'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
                );
            } else {
                $data = array(
                    'id'                    => $this->input->post('id'),
                    'name'                  => $this->input->post('name'),
                    'email'                 => $this->input->post('email'),
                    'birthday'              => $this->input->post('birthday'),
                    'profession'            => !empty($this->input->post('profession')) ? $this->input->post('profession') : null,
                    'marital_status'        => !empty($this->input->post('marital_status')) ? $this->input->post('marital_status') : null,
                    'cli_cgc'               => !empty($this->input->post('cli_cgc')) ? $this->input->post('cli_cgc') : null,
                    'cli_num'               => !empty($this->input->post('cli_num')) ? $this->input->post('cli_num') : null,
                    'cli_end'               => !empty($this->input->post('cli_end')) ? $this->input->post('cli_end') : null,
                    'cli_bnc'               => !empty($this->input->post('cli_bnc')) ? $this->input->post('cli_bnc') : null,
                    'cli_agn'               => !empty($this->input->post('cli_agn')) ? $this->input->post('cli_agn') : null,
                    'cli_cct'               => !empty($this->input->post('cli_cct')) ? $this->input->post('cli_cct') : null,
                    'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                    'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                    'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
                    'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                    'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
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

    function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id)) {
            show_404();
        }
        
        $this->client_model->delete($id);
        redirect('clientes');
    }
}

?>