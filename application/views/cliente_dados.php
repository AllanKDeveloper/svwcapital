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
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div><span>Cliente</span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>clientes">Listar Clientes</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div><span>Saques</span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>saques">Ver Solicitações</a></li>
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
                                <li><a href="<?php echo base_url(); ?>clientes"><i class="os-icon os-icon-ui-49"></i><span>Clientes</span></a></li>
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
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="compact">
                                    <div class="up-head-w">
                                        <div class="up-main-info">
                                            <h2 class="up-header"><?php echo $cliente->name ?></h2>
                                            <h6 class="up-sub-header"><?php echo $cliente->profession ?></h6>
                                        </div>
                                    </div>
                                    <div class="up-controls">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="value-pair">
                                                    <div class="label">Status:</div>
                                                    <?php if ($cliente->is_email_verified == 'yes'):?>
                                                        <div class="value badge badge-pill badge-success">Ativo</div>
                                                    <?php else: ?>
                                                        <div class="value badge badge-pill badge-danger">Inativo</div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="up-contents pt-2">
                                        <div class="users-list-w">
                                            <?php foreach ($balanco as $key => $value): ?>
                                            <div class="user-w with-status">
                                                <div class="trending trending-up"><span>R$<?php echo $value->interest ?></span><i class="os-icon os-icon-arrow-up6"></i></div>
                                                <div class="user-name">
                                                    <h6 class="user-title">Aporte <?php echo $value->contract_id ?></h6>
                                                    <div class="user-role">R$<?php echo $value->contributed ?></div>
                                                </div>
                                                <div class="user-action">
                                                    <div class="os-icon os-icon-pencil-2 contratosBtn" data-id="<?php echo $value->contract_id; ?>"></div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="element-wrapper">
                                    <div class="element-box">
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
                                        <div class="element-info">
                                            <div class="element-info-with-icon">
                                                <div class="element-info-icon">
                                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                                </div>
                                                <div class="element-info-text">
                                                    <h5 class="element-inner-header">Dados da Conta</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="formValidate2" novalidate="true" method="post" action="<?php echo base_url(); ?>cliente/edita" role="form">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="id" value="<?php echo $cliente->id ?>">
                                                <div class="form-group">
                                                    <label for="cod"> Código</label>
                                                    <input class="form-control" data-error="Código obrigatório." placeholder="Digite o código" required="required" type="cod" name="cod" id="cod" value="<?php echo $cliente->cod ?>">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"> Email</label>
                                                    <input class="form-control" data-error="Seu email é inválido" placeholder="Digite um email" required="required" type="email" name="email" id="email" value="<?php echo $cliente->email ?>">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password"> Senha</label>
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
                                                            <input class="form-control" data-error="Preencha com seu nome completo" placeholder="Digite o nome" type="text" name="name" id="name" value="<?php echo $cliente->name ?>" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="birthday"> Data de Nascimento</label>
                                                            <input class="form-control" data-error="Preencha a data no formato dd/mm/yyyy" placeholder="__/__/____" type="text" name="birthday" data-inputmask="'mask': '99/99/9999'" id="birthday" value="<?php echo $cliente->birthday ?>" required>
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_cgc"> CGC</label>
                                                            <input class="form-control" placeholder="Digite o CGC" type="text" name="cli_cgc" id="cli_cgc" value="<?php echo $cliente->cli_cgc; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cli_num"> Telefone</label>
                                                            <input class="form-control" placeholder="(__) _ ____-____" type="text" name="cli_num" data-inputmask="'mask': '(99) 9 9999-9999'" id="cli_num" value="<?php echo $cliente->cli_num; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cli_end"> Endereço Completo</label>
                                                    <input class="form-control" placeholder="Digite o endereço" type="text" name="cli_end" id="cli_end" value="<?php echo $cliente->cli_end; ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="profession"> Profissão</label>
                                                            <input class="form-control" placeholder="Digite a Profissão" type="text" name="profession" value="<?php echo $cliente->profession; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="marital_status"> Estado Civil</label>
                                                            <input class="form-control" placeholder="Digite o Estado Civil" type="text" name="marital_status" value="<?php echo $cliente->marital_status; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_bnc"> Banco</label>
                                                            <input class="form-control" placeholder="Digite o número do Banco" type="text" name="cli_bnc" id="cli_bnc" value="<?php echo $cliente->cli_bnc; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_agn"> Agência</label>
                                                            <input class="form-control" placeholder="Digite o número da Agência" type="text" name="cli_agn" value="<?php echo $cliente->cli_agn; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="cli_cct"> Conta</label>
                                                            <input class="form-control" placeholder="Digite o número da Conta" type="text" name="cli_cct" value="<?php echo $cliente->cli_cct; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="status" id="status_active" type="radio" value="active" <?=$cliente->is_email_verified=='yes'?' checked ':''?>>Conta ativa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" id="status_inative" name="status" type="radio" value="inative" <?=$cliente->is_email_verified=='no'?' checked ':''?>>Conta inativa</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="admin">Administrador</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" id="admin_active" type="radio" value="active" <?=$cliente->is_admin=='1'?' checked ':''?>>Sim</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" name="admin" id="admin_inative" type="radio" value="inative" <?=$cliente->is_admin=='0'?' checked ':''?>>Não</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary disabled" type="submit"> Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="element-wrapper">
                                <h6 class="element-header">Saques</h6>
                                <div class="element-box-tp">
                                <?php foreach ($saques as $saque): ?>
                                    <div class="profile-tile">
                                        <div class="profile-tile-meta">
                                            <ul>
                                                <li>Data:
                                                    <strong>R$<?php echo $saque->date;?></strong>
                                                </li>
                                                <li>Valor:
                                                    <strong>R$<?php echo $saque->value;?></strong>
                                                </li>
                                                <li>Status:
                                                    <?php if($saque->status == 1): ?>
                                                        <strong class="text-success">Aprovado</strong>
                                                    <?php elseif($saque->status == 0): ?>
                                                        <strong class="text-danger">Reprovado</strong>
                                                    <?php else: ?>
                                                        <strong class="text-warning">Em Análise</strong>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
    <!--------------------
    START - Sidebar
    -------------------->
    <div class="content-panel">
    <div class="content-panel-close">
    <i class="os-icon os-icon-close"></i>
    </div>
    <div class="element-wrapper">
        <h6 class="element-header">Team Members</h6>
        <div class="element-box-tp">
            <div class="input-search-w">
                <input class="form-control rounded bright" placeholder="Search team members..." type="search">
                </div>
                <div class="users-list-w">
                    <div class="user-w with-status status-green">
                        <div class="user-avatar-w">
                            <div class="user-avatar">
                                <img alt="" src="img/avatar1.jpg">
                                </div>
                            </div>
                            <div class="user-name">
                                <h6 class="user-title">John Mayers</h6>
                                <div class="user-role">Account Manager</div>
                            </div>
                            <div class="user-action">
                                <div class="os-icon os-icon-email-forward"></div>
                            </div>
                        </div>
                        <div class="user-w with-status status-green">
                            <div class="user-avatar-w">
                                <div class="user-avatar">
                                    <img alt="" src="img/avatar2.jpg">
                                    </div>
                                </div>
                                <div class="user-name">
                                    <h6 class="user-title">Ben Gossman</h6>
                                    <div class="user-role">Administrator</div>
                                </div>
                                <div class="user-action">
                                    <div class="os-icon os-icon-email-forward"></div>
                                </div>
                            </div>
                            <div class="user-w with-status status-red">
                                <div class="user-avatar-w">
                                    <div class="user-avatar">
                                        <img alt="" src="img/avatar3.jpg">
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h6 class="user-title">Phil Nokorin</h6>
                                        <div class="user-role">HR Manger</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar">
                                            <img alt="" src="img/avatar4.jpg">
                                            </div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Jenny Miksa</h6>
                                            <div class="user-role">Lead Developer</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------
    END - Sidebar
    -------------------->
                </div>
            </div>
        </div>
        <div class="onboarding-modal modal fade animated" id="onboardingFeaturesModal" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-centered" role="document">
                <div class="modal-content text-center">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span class="close-label">Fechar</span>
                        <span class="os-icon os-icon-close"></span>
                    </button>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">Editar Aporte</h4>
                        <div class="row" id="aporte">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_customizer.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script>
        // Start jQuery function after page is loaded
        $(document).ready(function(){
            // Start jQuery click function to view Bootstrap modal when view info button is clicked
            $('.contratosBtn').click(function(){
             // Get the id of selected saques and assign it in a variable called contratoId
                var contratoId = $(this).data('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected saques data
                    url: "<?php echo base_url() ?>Cliente/get_contrato_form",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {contratoId:contratoId},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected saques in the section called #phone_result 
                     // within the Bootstrap modal
                        $('#aporte').html(data);
                        // Display the Bootstrap modal
                        $('#onboardingFeaturesModal').modal('show');
                    }
                });
                // End AJAX function
            });
        });
    </script>
</body>
</html>