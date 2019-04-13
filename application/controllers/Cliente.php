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
        $this->load->model('solicitation_model');
    }

    function index()
    {
        $data['clients'] = $this->client_model->getClients();
        $this->load->view('client', $data);
    }

    function cadastro() {
        $this->form_validation->set_rules('cod', 'Código', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Senha', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirme a Senha', 'required|trim');
        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('birthday', 'Data de Nascimento', 'required');

        if ($this->form_validation->run())
        {
            $encrypted_password = $this->encrypt->encode($this->input->post('password'));
            $data = array(
                'cod'                  => $this->input->post('cod'),
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
                'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
            );
            $id = $this->client_model->insert($data);
            if ($id > 0) {
                $first_aporte = array(
                    'client'                => $id,
                    'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                    'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                    'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
                );
                $this->client_model->insert_aporte($first_aporte);
                $income = array(
                    'client' => $id,
                    'contributed' => $data['cash'],
                    'interest' => '0,00',
                    'date' => date('d/m/Y'),
                    'total' => $data['cash']
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

        $this->form_validation->set_rules('cod', 'Código', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('name', 'Nome', 'required');
        $this->form_validation->set_rules('birthday', 'Data de Nascimento', 'required');

        if ($this->form_validation->run())
        {
            if (!empty($this->input->post('password'))) {
                $encrypted_password = $this->encrypt->encode($this->input->post('password'));
                $data = array(
                    'id'                    => $this->input->post('id'),
                    'cod'                  => $this->input->post('cod'),
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
                    'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                    'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
                );
            } else {
                $data = array(
                    'id'                    => $this->input->post('id'),
                    'cod'                  => $this->input->post('cod'),
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
                    'is_email_verified'     => ($this->input->post('status') == 'active') ? 'yes' : 'no',
                    'is_admin'              => ($this->input->post('admin') == 'active') ? '1' : '0',
                );
            }

            $this->client_model->update($id, $data);
            $this->session->set_flashdata('message', 'Conta atualizada com sucesso!');
            redirect('cliente/perfil/'.$id);
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

    function get_saques()
    {
        $saquesData = $this->input->post('saquesData');
        if(isset($saquesData) and !empty($saquesData)){
            $records = $this->solicitation_model->getSaquesAll($saquesData);
            if (sizeof($records) > 0) {
                $output = '';
                $pieces = array_chunk($records, ceil(count($records) / 2));
                foreach($pieces[0] as $row){
                    if ($row->status == 1) {
                        $li = '<li class="text-success">'.$row->date.' R$'.$row->value.'</li>';
                    } else if ($row->status == 0) {
                        $li = '<li class="text-danger">'.$row->date.' R$'.$row->value.'</li>';
                    } else {
                        $li = '<li class="text-warning">'.$row->date.' R$'.$row->value.'</li>';
                    }
                     $output .= '
                        <div class="col-md-6">
                            <ul class="features-list">
                                '.$li.'
                            </ul>
                        </div>
                    ';
                }
                foreach($pieces[1] as $row){
                    if ($row->status == 1) {
                        $li = '<li class="text-success">'.$row->date.' R$'.$row->value.'</li>';
                    } else if ($row->status == 0) {
                        $li = '<li class="text-danger">'.$row->date.' R$'.$row->value.'</li>';
                    } else {
                        $li = '<li class="text-warning">'.$row->date.' R$'.$row->value.'</li>';
                    }
                     $output .= '
                        <div class="col-md-6">
                            <ul class="features-list">
                                '.$li.'
                            </ul>
                        </div>
                    ';
                }
                echo $output;
            } else {
                echo '<center><ul class="list-group"><li class="list-group-item">'.'Nenhuma solicitação realizada.'.'</li></ul></center>';
            }
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'Selecione um cliente'.'</li></ul></center>';
        }
    }

    function cadastro_aporte() {
        $this->form_validation->set_rules('client', 'Cliente', 'required|trim');
        $this->form_validation->set_rules('date_contribution', 'Data', 'required|trim');
        $this->form_validation->set_rules('contracted_interest', 'Juros', 'required|trim');
        $this->form_validation->set_rules('cash', 'Valor', 'required|trim');

        if ($this->form_validation->run())
        {
            $data = array(
                'client'                => !empty($this->input->post('client')) ? $this->input->post('client') : null,
                'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
            );
            $id = $this->client_model->insert_aporte($data);
            $income = array(
                'client' => $id,
                'contributed' => $data['cash'],
                'interest' => '0,00',
                'date' => date('d/m/Y'),
                'total' => $data['cash']
            );
            $this->income_model->insert($income);
            $this->session->set_flashdata('message', 'Aporte criado com sucesso!');
            redirect('clientes');
        }
        else
        {
            $this->index();
        }
    }

    function perfil() {
        $id = $this->uri->segment(3);
        if (empty($id)) {
            show_404();
        }

        $data['cliente'] = $this->client_model->getPerfil($id);
        $data['saques'] = $this->solicitation_model->getSaquesAll($id);

        $balanco = $this->income_model->getBalanco($id);
        $data['interest_total'] = 0;
        $new_interest = 0;
        foreach ($balanco as $key => $product) {
            if($product->client != $id) {
                unset($balanco[$key]);
            }
            $interest = strtr($product->interest, array('.' => '', ',' => '.'));
            $new_interest += $interest;
        }
        $saque_limite = number_format($new_interest, 2, ',', '.');
        $data['interest_total'] = $saque_limite;
        $data['balanco']  = $balanco;

        $this->load->view('cliente_dados', $data);
    }

    function get_contrato_form() {
        $contratoId = $this->input->post('contratoId');
        if(isset($contratoId) and !empty($contratoId)){
            $contract = $this->client_model->getAporteContrato($contratoId);
            echo '
                <form class="formValidate" novalidate="true" method="post" action="'.base_url().'cliente/atualiza_aporte" style="width:100%;">
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <input type="hidden" name="cliente_id" value="'.$contract[0]->client.'">
                            <input type="hidden" name="id" value="'.$contract[0]->id.'">
                            <div class="form-group">
                                <label for="date_contribution"> Data de Aporte</label>
                                <input class="form-control" placeholder="__/__/____" type="text" name="date_contribution" data-inputmask="\'mask\': \'99/99/9999\'" 
                                value="'.$contract[0]->date_contribution.'" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="contracted_interest"> Juros Contratados</label>
                                <input class="form-control" placeholder="Digite o juros contratado" type="text" name="contracted_interest" value="'.$contract[0]->contracted_interest.'" required>
                            </div>
                        </div>
                        <div  class="col-sm-12">
                            <div class="form-group">
                                <label for="cash"> Valor Aportado</label>
                                <input class="form-control money" placeholder="Digite o valor aportado" type="text" name="cash" value="'.$contract[0]->cash.'" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal" type="button"> Fechar</button>
                        <button class="btn btn-primary"> Salvar</button>
                    </div>
                </form>
            ';
        }
    }

    function atualiza_aporte() {
        $this->form_validation->set_rules('date_contribution', 'Data', 'required|trim');
        $this->form_validation->set_rules('contracted_interest', 'Juros', 'required|trim');
        $this->form_validation->set_rules('cash', 'Valor', 'required|trim');

        if ($this->form_validation->run())
        {
            $data = array(
                'date_contribution'     => !empty($this->input->post('date_contribution')) ? $this->input->post('date_contribution') : null,
                'contracted_interest'   => !empty($this->input->post('contracted_interest')) ? $this->input->post('contracted_interest') : null,
                'cash'                  => !empty($this->input->post('cash')) ? $this->input->post('cash') : null,
            );
            $id = $this->client_model->update_aporte($this->input->post('id'), $data);
            // atualiza o ultimo income baseado no novo valor do contrato mantendo os juros
            $this->income_model->update_last_income($this->input->post('cliente_id'), $this->input->post('cash'), $this->input->post('date_contribution'));
            redirect('cliente/perfil/'.$this->input->post('cliente_id'));
        }
        else
        {
            $this->index();
        }
    }
}

?>