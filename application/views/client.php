<html>

<head>
    <title>SVWCapital - Área do Cliente</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }
        
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
</head>

<body class="full-screen menu-position-side menu-side-left">
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png"><span>SVWCapital</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>assets/img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php echo $this->session->userdata('name') ?></div>
                        </div>
                    </div>
                    <!--------------------
START - Mobile Menu List
-------------------->
                    <ul class="main-menu">
                        <li><a href="<?php echo base_url(); ?>">Início</a></li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div><span>Cliente</span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>clientes">Listar Clientes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--------------------
END - Mobile Menu List
-------------------->
                </div>
            </div>
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Main Menu
-------------------->
            <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-light color-style-transparent sub-menu-color-bright menu-position-side menu-side-left menu-layout-mini sub-menu-style-over">
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>assets/img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php echo $this->session->userdata('name') ?></div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>assets/img/avatar1.jpg"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name"><?php echo $this->session->userdata('name') ?></div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>perfil"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a></li>
                                <li><a href="<?php echo base_url(); ?>logout"><i class="os-icon os-icon-signs-11"></i><span>Deslogar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
                    <!--------------------
START - Settings Link in secondary top menu
-------------------->
                <?php if ($this->session->userdata('admin')): ?>
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right-center"><i class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>home"><i class="os-icon os-icon-ui-49"></i><span>Início</span></a></li>
                                <li><a href="<?php echo base_url(); ?>saques"><i class="os-icon os-icon-grid-10"></i><span>Solicitações de Saques</span></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                    <!--------------------
END - Settings Link in secondary top menu
-------------------->
                </div>
            </div>
            <!--------------------
END - Main Menu
-------------------->
            <div style="width: 100%;">
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-box-content">
                            <?php
                            if($this->session->flashdata('message'))
                            {
                                echo '
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button aria-label="Fechar" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span>
                                    </button>'.$this->session->flashdata("message").'
                                </div>
                                ';
                            }
                            ?>
                            <button class="mr-2 mb-2 btn btn-outline-primary" type="button" data-target="#cadastroModal" data-toggle="modal">  Novo Cliente</button>
                            <button class="mr-2 mb-2 btn btn-outline-warning" type="button" data-target="#cadastroAporte" data-toggle="modal">  Novo Aporte</button>
                            <div aria-labelledby="cadastroModalLabel" class="modal fade" id="cadastroModal" role="dialog" tabindex="-1" style="display: none; padding-right: 17px;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cadastroModalLabel">Cadastro de Cliente</h5>
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
                                        </div>
                                        <form id="formValidate" novalidate="true" method="post" action="<?php echo base_url(); ?>cliente/cadastro">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="cod"> Código</label>
                                                    <input class="form-control" data-error="Código obrigatório." placeholder="Digite o código" required="required" type="cod" name="cod" id="cod">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"> Email</label>
                                                    <input class="form-control" data-error="Seu email é inválido" placeholder="Digite um email" required="required" type="email" name="email">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password"> Senha</label>
                                                            <input class="form-control" data-minlength="6" placeholder="Digite uma senha" type="password" name="password" required>
                                                            <div class="help-block form-text text-muted form-control-feedback">Mínimo de 6 caracteres</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cpassword">Confime a Senha</label>
                                                            <input class="form-control" data-match-error="Senhas não conferem" placeholder="Confirme a senha" name="cpassword" required="required" type="password">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name"> Nome Completo</label>
                                                            <input class="form-control" data-error="Preencha com seu nome completo" placeholder="Digite o nome" type="text" name="name"  value="<?php echo set_value('name'); ?>" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="birthday"> Data de Nascimento</label>
                                                            <input class="form-control" data-error="Preencha a data no formato dd/mm/yyyy" placeholder="__/__/____" type="text" name="birthday" data-inputmask="'mask': '99/99/9999'" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_cgc"> CGC</label>
                                                            <input class="form-control" placeholder="Digite o CGC" type="text" name="cli_cgc">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_num"> Telefone</label>
                                                            <input class="form-control" placeholder="(__) _ ____-____" type="text" name="cli_num" data-inputmask="'mask': '(99) 9 9999-9999'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cli_end"> Endereço Completo</label>
                                                    <input class="form-control" placeholder="Digite o endereço" type="text" name="cli_end">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="profession"> Profissão</label>
                                                            <input class="form-control" placeholder="Digite a Profissão" type="text" name="profession">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="marital_status"> Estado Civil</label>
                                                            <input class="form-control" placeholder="Digite o Estado Civil" type="text" name="marital_status">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_bnc"> Banco</label>
                                                            <input class="form-control" placeholder="Digite o número do Banco" type="text" name="cli_bnc">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_agn"> Agência</label>
                                                            <input class="form-control" placeholder="Digite o número da Agência" type="text" name="cli_agn">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_cct"> Conta</label>
                                                            <input class="form-control" placeholder="Digite o número da Conta" type="text" name="cli_cct">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="status" type="radio" value="active" checked>Conta ativa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="status" type="radio" value="inative">Conta inativa</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="admin">Administrador</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" type="radio" value="active">Sim</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" type="radio" value="inative" checked>Não</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Primeiro aporte</h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="date_contribution"> Data de Aporte</label>
                                                            <input class="form-control" placeholder="__/__/____" type="text" name="date_contribution" data-inputmask="'mask': '99/99/9999'">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="contracted_interest"> Juros Contratados</label>
                                                            <input class="form-control" placeholder="Digite o juros contratado" type="text" name="contracted_interest">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cash"> Valor Aportado</label>
                                                            <input class="form-control money" placeholder="Digite o valor aportado" type="text" name="cash">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Fechar</button>
                                                <button class="btn btn-primary"> Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div aria-labelledby="editaModalLabel" class="modal fade" id="editaModal" role="dialog" tabindex="-1" style="display: none; padding-right: 17px;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editaModalLabel">Editar Cliente</h5>
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
                                        </div>
                                        <form id="formValidate2" novalidate="true" method="post" action="<?php echo base_url(); ?>cliente/edita">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="id">
                                                <div class="form-group">
                                                    <label for="cod"> Código</label>
                                                    <input class="form-control" data-error="Código obrigatório." placeholder="Digite o código" required="required" type="cod" name="cod" id="cod">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"> Email</label>
                                                    <input class="form-control" data-error="Seu email é inválido" placeholder="Digite um email" required="required" type="email" name="email" id="email">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password"> Senha (Deixe em branco para não mudar)</label>
                                                            <input class="form-control" data-minlength="6" placeholder="Digite uma senha" type="password" name="password" id="password">
                                                            <div class="help-block form-text text-muted form-control-feedback">Mínimo de 6 caracteres</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cpassword">Confime a Senha (Deixe em branco para não mudar)</label>
                                                            <input class="form-control" data-match-error="Senhas não conferem" placeholder="Confirme a senha" name="cpassword" type="password">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name"> Nome Completo</label>
                                                            <input class="form-control" data-error="Preencha com seu nome completo" placeholder="Digite o nome" type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="birthday"> Data de Nascimento</label>
                                                            <input class="form-control" data-error="Preencha a data no formato dd/mm/yyyy" placeholder="__/__/____" type="text" name="birthday" data-inputmask="'mask': '99/99/9999'" id="birthday" value="<?php echo set_value('birthday'); ?>" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_cgc"> CGC</label>
                                                            <input class="form-control" placeholder="Digite o CGC" type="text" name="cli_cgc" id="cli_cgc" value="<?php echo set_value('cli_cgc'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_num"> Telefone</label>
                                                            <input class="form-control" placeholder="(__) _ ____-____" type="text" name="cli_num" data-inputmask="'mask': '(99) 9 9999-9999'" id="cli_num" value="<?php echo set_value('cli_num'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cli_end"> Endereço Completo</label>
                                                    <input class="form-control" placeholder="Digite o endereço" type="text" name="cli_end" id="cli_end" value="<?php echo set_value('cli_end'); ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="profession"> Profissão</label>
                                                            <input class="form-control" placeholder="Digite a Profissão" type="text" name="profession" value="<?php echo set_value('profession'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="marital_status"> Estado Civil</label>
                                                            <input class="form-control" placeholder="Digite o Estado Civil" type="text" name="marital_status" value="<?php echo set_value('marital_status'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_bnc"> Banco</label>
                                                            <input class="form-control" placeholder="Digite o número do Banco" type="text" name="cli_bnc" id="cli_bnc" value="<?php echo set_value('cli_bnc'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_agn"> Agência</label>
                                                            <input class="form-control" placeholder="Digite o número da Agência" type="text" name="cli_agn" value="<?php echo set_value('cli_agn'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_cct"> Conta</label>
                                                            <input class="form-control" placeholder="Digite o número da Conta" type="text" name="cli_cct" value="<?php echo set_value('cli_cct'); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="status" id="status_active" type="radio" value="active">Conta ativa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" id="status_inative" name="status" type="radio" value="inative">Conta inativa</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="admin">Administrador</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" id="admin_active" type="radio" value="active">Sim</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" id="admin_inative" type="radio" value="inative">Não</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Fechar</button>
                                                <button class="btn btn-primary"> Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-labelledby="cadastroModalLabel" class="modal fade" id="cadastroAporte" role="dialog" tabindex="-1" style="display: none; padding-right: 17px;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cadastroAporteLabel">Cadastro de Aporte</h5>
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
                                        </div>
                                        <form class="formValidate" novalidate="true" method="post" action="<?php echo base_url(); ?>cliente/cadastro_aporte">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Cliente</label>
                                                    <select class="form-control" id="client" name="client" required>
                                                        <?php foreach ($clients as $client): ?>
                                                            <option value="<?php echo $client->id ?>"><?php echo $client->name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="date_contribution"> Data de Aporte</label>
                                                            <input class="form-control" placeholder="__/__/____" type="text" name="date_contribution" data-inputmask="'mask': '99/99/9999'" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="contracted_interest"> Juros Contratados</label>
                                                            <input class="form-control" placeholder="Digite o juros contratado" type="text" name="contracted_interest" required>
                                                        </div>
                                                    </div>
                                                    <div  class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cash"> Valor Aportado</label>
                                                            <input class="form-control money" placeholder="Digite o valor aportado" type="text" name="cash" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Fechar</button>
                                                <button class="btn btn-primary"> Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ações</th>
                                    <th>Código</th>
                                    <th>Email</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
                                    <th>CGC</th>
                                    <th>Telefone</th>
                                    <th>Banco</th>
                                    <th>Agência</th>
                                    <th>Conta</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-right">Administrador</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clients as $client): ?>
                                    <tr>
                                        <td class="row-actions">
                                            <button class="mr-2 mb-2 btn btn-sm btn-warning saquesBtn" type="button" data-id="<?php echo $client->id; ?>">Saques</button>
                                            <!-- <button class="mr-2 mb-2 btn btn-sm btn-info edit_button" type="button" data-target="#editaModal" data-toggle="modal" data-id="<?php echo $client->id; ?>" data-cod="<?php echo $client->cod; ?>" data-name="<?php echo $client->name; ?>" data-email="<?php echo $client->email; ?>" data-birthday="<?php echo $client->birthday; ?>" data-cli_cgc="<?php echo $client->cli_cgc; ?>" data-cli_num="<?php echo $client->cli_num; ?>" data-cli_end="<?php echo $client->cli_end; ?>" data-cli_bnc="<?php echo $client->cli_bnc; ?>" data-cli_agn="<?php echo $client->cli_agn; ?>" data-cli_cct="<?php echo $client->cli_cct; ?>" data-profession="<?php echo $client->profession; ?>" data-marital_status="<?php echo $client->marital_status; ?>" data-date_contribution="<?php echo $client->date_contribution; ?>" data-contracted_interest="<?php echo $client->contracted_interest; ?>" data-cash="<?php echo $client->cash; ?>" data-is_email_verified="<?php echo $client->is_email_verified; ?>" data-is_admin="<?php echo $client->is_admin; ?>">Editar</button> -->
                                            <button class="mr-2 mb-2 btn btn-sm btn-info" type="button" onclick="window.location.href = '<?php echo base_url('cliente/perfil/'.$client->id) ?>'">Editar</button>
                                            <button class="mr-2 mb-2 btn btn-sm btn-danger deleteBtn" type="button" data-href="<?php echo base_url('cliente/delete/'.$client->id); ?>"> Deletar</button>
                                        </td>
                                        <td><?php echo $client->cod;?></td>
                                        <td><?php echo $client->email;?></td>
                                        <td><?php echo $client->name;?></td>
                                        <td><?php echo $client->birthday;?></td>
                                        <td><?php echo $client->cli_cgc;?></td>
                                        <td><?php echo $client->cli_num;?></td>
                                        <td><?php echo $client->cli_bnc;?></td>
                                        <td><?php echo $client->cli_agn;?></td>
                                        <td><?php echo $client->cli_cct;?></td>
                                        <?php if ($client->is_email_verified == 'yes'): ?>
                                        <td class="text-center">
                                            <div class="status-pill green" data-title="Conta ativa" data-toggle="tooltip" data-original-title="" title=""></div>
                                        </td>
                                        <?php else: ?>
                                        <td class="text-center">
                                            <div class="status-pill red" data-title="Conta inativa" data-toggle="tooltip" data-original-title="" title=""></div>
                                        </td>
                                        <?php endif; ?>
                                        <?php if ($client->is_admin == true): ?>
                                        <td class="text-right">
                                            <div class="status-pill green" data-title="Sim" data-toggle="tooltip" data-original-title="" title=""></div>
                                        </td>
                                        <?php else: ?>
                                        <td class="text-right">
                                            <div class="status-pill red" data-title="Não" data-toggle="tooltip" data-original-title="" title=""></div>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
        <div class="onboarding-modal modal fade animated" id="onboardingFeaturesModal" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-centered" role="document">
                <div class="modal-content text-center">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span class="close-label">Fechar</span>
                        <span class="os-icon os-icon-close"></span>
                    </button>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">Histórico de Saques</h4>
                        <div class="row" id="saques">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/button.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_customizer.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
            // Start jQuery function after page is loaded
            $(document).ready(function(){
             // Start jQuery click function to view Bootstrap modal when view info button is clicked
                $('.saquesBtn').click(function(){
                 // Get the id of selected saques and assign it in a variable called saquesData
                    var saquesData = $(this).data('id');
                    // Start AJAX function
                    $.ajax({
                     // Path for controller function which fetches selected saques data
                        url: "<?php echo base_url() ?>Cliente/get_saques",
                        // Method of getting data
                        method: "POST",
                        // Data is sent to the server
                        data: {saquesData:saquesData},
                        // Callback function that is executed after data is successfully sent and recieved
                        success: function(data){
                         // Print the fetched data of the selected saques in the section called #phone_result 
                         // within the Bootstrap modal
                            $('#saques').html(data);
                            // Display the Bootstrap modal
                            $('#onboardingFeaturesModal').modal('show');
                        }
                 });
                 // End AJAX function
             });
         });  
        Inputmask().mask(document.querySelectorAll("input"));

        $(document).on( "click", '.edit_button',function(e) {
            var name = $(this).data('name');
            var id = $(this).data('id');
            var cod = $(this).data('cod');
            var email = $(this).data('email');
            var birthday = $(this).data('birthday');
            var profession = $(this).data('profession');
            var marital_status = $(this).data('marital_status');
            var cli_cgc = $(this).data('cli_cgc');
            var cli_num = $(this).data('cli_num');
            var cli_end = $(this).data('cli_end');
            var cli_bnc = $(this).data('cli_bnc');
            var cli_agn = $(this).data('cli_agn');
            var cli_cct = $(this).data('cli_cct');
            var date_contribution = $(this).data('date_contribution');
            var contracted_interest = $(this).data('contracted_interest');
            var cash = $(this).data('cash');
            var is_email_verified = $(this).data('is_email_verified');
            var is_admin = $(this).data('is_admin');

            $("#id").val(id);
            $("#cod").val(cod);
            $("#name").val(name);
            $("#email").val(email);
            $("#birthday").val(birthday);
            $("input[name='profession']").val(profession);
            $("input[name='marital_status']").val(marital_status);
            $("#cli_cgc").val(cli_cgc);
            $("#cli_num").val(cli_num);
            $("#cli_end").val(cli_end);
            $("input[name='cli_bnc']").val(cli_bnc);
            $("input[name='cli_agn']").val(cli_agn);
            $("input[name='cli_cct']").val(cli_cct);
            $("input[name='date_contribution']").val(date_contribution);
            $("input[name='contracted_interest']").val(contracted_interest);
            $("input[name='cash']").val(cash);

             if (is_email_verified == 'yes') {
                document.getElementById("status_active").checked = true;
             } else {
                document.getElementById("status_inative").checked = true;
             }

              if (is_admin == true) {
                document.getElementById("admin_active").checked = true;
             } else {
                document.getElementById("admin_inative").checked = true;
             }
        });

        $(document).on( "click", '.deleteBtn',function(e) {
            e.preventDefault();
            var url = $(this).data('href');
                Swal.fire({
                    title: 'Deseja excluir permanentemente?',
                    text: "Não será possível recuperar o usuário após a exclusão!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Excluir',
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                          'Deletado!',
                          'Conta deletada com sucesso.',
                          'success'
                        )
                        setTimeout(function(){
                            window.location.replace(url);
                        }, 1000);
                    }
                })
        });
    </script>
</body>
</html>