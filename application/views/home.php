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
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li>
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
                        <div class="element-wrapper compact pt-4">
                            <!-- <div class="element-actions"><a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a></div> -->
                            <h6 class="element-header">Página Inicial</h6>
                            <div class="element-box-tp">
                                <div class="row">
                                        <?php foreach ($balanco as $key => $value): ?>
                                    <div class="col-6 col-sm-3 col-xxl-2">
                                        <!--START - BALANCES-->
                                        <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                            <div class="label">Aporte <?php echo $value->contract_id ?></div>
                                            <div class="value">R$<?php echo $value->contributed ?></div>
                                            <div class="trending trending-up">
                                                <span>R$<?php echo $value->interest ?></span><i class="os-icon os-icon-arrow-up6"></i>
                                            </div>
                                        </a>
                                        <!-- <div class="element-balances">
                                            <div class="balance hidden-mobile">
                                                <div class="balance-title">Balanço Total</div>
                                                <div class="balance-value"><span>R$<?php echo $balanco_total ?></span><span class="trending trending-down-basic">
                                                </div>
                                            </div>
                                            <div class="balance">
                                                <div class="balance-title">Crédito Disponível</div>
                                                <div class="balance-value">R$<?php echo $interest ?></div>
                                            </div>
                                        </div> -->
                                        <!--END - BALANCES-->
                                    </div>
                                        <?php endforeach; ?>
                                    <div class="col-lg-5 col-xxl-6">
                                        <!--START - Money Withdraw Form-->
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form id="formValidate" method="POST" action="<?php echo base_url(); ?>/home/solicita">
                                                    <h5 class="element-box-header">Resgatar Dinheiro</h5>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label class="lighter" for="">Limite disponível: R$<?php echo $interest_total ?></label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text">R$</div>
                                                                    </div>
                                                                    <input class="form-control money" id="money" data-error="Quantidade não pode ser maior que o limite disponível." placeholder="Digite a quantidade..." name="money" required="required" type="text">
                                                                </div>
                                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                                                <?php
                                                                if($this->session->flashdata('limite'))
                                                                {
                                                                    echo '
                                                                    <div class="help-block form-text with-errors form-control-feedback">
                                                                        '.$this->session->flashdata("limite").'
                                                                    </div>
                                                                    ';
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <label class="lighter" for="">Transferir para</label>
                                                                <select class="form-control" disabled>
                                                                    <option value=""><?php echo $this->session->userdata('cli_bnc')?> <?php echo $this->session->userdata('cli_agn')?> <?php echo $this->session->userdata('cli_cct')?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-buttons-w text-right compact">
                                                        <!-- <a class="btn btn-grey" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add na Conta</span></a> -->
                                                        <button class="mr-2 mb-2 btn btn-primary" type="submit"><span>Transferir</span><i class="os-icon os-icon-grid-18"></i></button>
                                                    </div>
                                                    <?php
                                                    if($this->session->flashdata('message'))
                                                    {
                                                        echo '
                                                            <div class="text-right">
                                                                <span class="badge badge-success">'.$this->session->flashdata("message").'</span>
                                                            </div>';
                                                    }
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                        <!--END - Money Withdraw Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($saques_analise): ?>
                        <!-- START - Analise Saque -->
                        <?php foreach ($saques_analise as $analise): ?>
                            <div class="element-wrapper">
                                <h6 class="element-header">Em Análise</h6>
                                <div class="col-6 col-sm-3 col-xxl-2">
                                    <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label"><?php echo $analise->date ?></div>
                                        <div class="value text-warning">R$<?php echo $analise->value ?></div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- END - Analise Saque -->
                        <?php endif; ?>
                        <?php if ($saques_aprovado): ?>
                        <!-- START - Aprovado Saque -->
                        <?php foreach ($saques_aprovado as $aprovado): ?>
                            <div class="element-wrapper">
                                <h6 class="element-header">Aprovados</h6>
                                <div class="col-6 col-sm-3 col-xxl-2">
                                    <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label"><?php echo $aprovado->date ?></div>
                                        <div class="value text-success">R$<?php echo $aprovado->value ?></div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- END - Aprovado Saque -->
                        <?php endif; ?>
                        <?php if ($saques_reprovado): ?>
                        <!-- START - Analise Saque -->
                        <?php foreach ($saques_reprovado as $reprovado): ?>
                            <div class="element-wrapper">
                                <h6 class="element-header">Reprovados</h6>
                                <div class="col-6 col-sm-3 col-xxl-2">
                                    <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                        <div class="label"><?php echo $reprovado->date ?></div>
                                        <div class="value text-danger">R$<?php echo $reprovado->value ?></div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- END - Analise Saque -->
                        <?php endif; ?>
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
</body>
</html>