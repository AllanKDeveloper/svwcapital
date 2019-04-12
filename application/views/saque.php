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
                                <li><a href="<?php echo base_url(); ?>clientes"><i class="os-icon os-icon-ui-49"></i><span>Clientes</span></a></li>
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Ciente</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Valor</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($saques as $saque): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $saque->client_name;?></td>
                                        <td class="text-center"><?php echo $saque->date;?></td>
                                        <td class="text-center">R$<?php echo $saque->value;?></td>
                                        <td class="row-actions text-center">
                                            <button class="mr-2 mb-2 btn btn-sm btn-success aproveBtn" type="button" data-href="<?php echo base_url('saque/aprove/'.$saque->id); ?>"> Aprovar</button>
                                            <button class="mr-2 mb-2 btn btn-sm btn-danger deleteBtn" type="button" data-href="<?php echo base_url('saque/reprove/'.$saque->id); ?>"> Reprovar</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
    <script src="<?php echo base_url(); ?>assets/js/demo_customizer.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        Inputmask().mask(document.querySelectorAll("input"));

        $(document).on( "click", '.edit_button',function(e) {
            var name = $(this).data('name');
            var id = $(this).data('id');
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
                    title: 'Deseja reprovar o saque?',
                    text: "Não será possível reverter após reprovar!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Reprovar',
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                          'Reprovado!',
                          'Saque reprovado com sucesso.',
                          'success'
                        )
                        setTimeout(function(){
                            window.location.replace(url);
                        }, 1000);
                    }
                })
        });

        $(document).on( "click", '.aproveBtn',function(e) {
            e.preventDefault();
            var url = $(this).data('href');
                Swal.fire({
                    title: 'Deseja aceitar o saque?',
                    text: "Não será possível reverter após aceitar!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aprovar',
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                          'Aprovado!',
                          'O saque aprovado com sucesso.',
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