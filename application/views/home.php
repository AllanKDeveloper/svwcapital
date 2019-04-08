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
                                <li><a href="<?php echo base_url(); ?>clientes"><i class="os-icon os-icon-ui-49"></i><span>Cadastrar Clientes</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
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
                            <div class="element-actions"><a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a></div>
                            <h6 class="element-header">Página Inicial</h6>
                            <div class="element-box-tp">
                                <div class="row">
                                    <div class="col-lg-7 col-xxl-6">
                                        <!--START - BALANCES-->
                                        <div class="element-balances">
                                            <div class="balance hidden-mobile">
                                                <div class="balance-title">Balanço Total</div>
                                                <div class="balance-value"><span>R$350</span><span class="trending trending-down-basic"><span>%12</span><i class="os-icon os-icon-arrow-2-down"></i></span>
                                                </div>
                                                <div class="balance-link"><a class="btn btn-link btn-underlined" href="#"><span>Ver Estado</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                                            </div>
                                            <div class="balance">
                                                <div class="balance-title">Crédito Disponível</div>
                                                <div class="balance-value">$17,800</div>
                                                <div class="balance-link"><a class="btn btn-link btn-underlined" href="#"><span>Solicitar aumento</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                                            </div>
                                            <div class="balance">
                                                <div class="balance-title">Devendo</div>
                                                <div class="balance-value danger">R$180</div>
                                                <div class="balance-link"><a class="btn btn-link btn-underlined btn-gold" href="#"><span>Pagar agora</span><i class="os-icon os-icon-arrow-right4"></i></a></div>
                                            </div>
                                        </div>
                                        <!--END - BALANCES-->
                                    </div>
                                    <div class="col-lg-5 col-xxl-6">
                                        <!--START - Money Withdraw Form-->
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form>
                                                    <h5 class="element-box-header">Resgatar Dinheiro</h5>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label class="lighter" for="">Quantidade</label>
                                                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text">R$</div>
                                                                    </div>
                                                                    <input type="text" class="form-control money" id="money" placeholder="Digite a quantidade...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <label class="lighter" for="">Transferir para</label>
                                                                <select class="form-control" field_signature="4203909268">
                                                                    <option value="">Citibank *6382</option>
                                                                    <option value="">Chase *8372</option>
                                                                    <option value="">Bank of America *7363</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-buttons-w text-right compact"><a class="btn btn-grey" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add na Conta</span></a><a class="btn btn-primary" href="#"><span>Transferir</span><i class="os-icon os-icon-grid-18"></i></a></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--END - Money Withdraw Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--START - Transactions Table-->
<!--                         <div class="element-wrapper">
                            <h6 class="element-header">Recent Transactions</h6>
                            <div class="element-box-tp">
                                <div class="table-responsive">
                                    <table class="table table-padded">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th class="text-center">Category</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller green"></span><span>Complete</span></td>
                                                <td><span>Today</span><span class="smaller lighter">1:52am</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company1.png" style="height: 25px;"><span>Banana Shakes LLC</span></td>
                                                <td class="text-center"><a class="badge badge-success" href="">Shopping</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-success">+ 1,250 USD</span></td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller red"></span><span>Declined</span></td>
                                                <td><span>Jan 19th</span><span class="smaller lighter">3:22pm</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company2.png" style="height: 25px;"><span>Stripe Payment Processing</span></td>
                                                <td class="text-center"><a class="badge badge-danger" href="">Cafe</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-success">+ 952.23 USD</span></td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller yellow"></span><span>Pending</span></td>
                                                <td><span>Yesterday</span><span class="smaller lighter">7:45am</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company3.png" style="height: 25px;"><span>MailChimp Services</span></td>
                                                <td class="text-center"><a class="badge badge-warning" href="">Restaurants</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-danger">- 320 USD</span></td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller yellow"></span><span>Pending</span></td>
                                                <td><span>Jan 23rd</span><span class="smaller lighter">2:12pm</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company1.png" style="height: 25px;"><span>Starbucks Cafe</span></td>
                                                <td class="text-center"><a class="badge badge-primary" href="">Shopping</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-success">+ 17.99 USD</span></td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller green"></span><span>Complete</span></td>
                                                <td><span>Jan 12th</span><span class="smaller lighter">9:51am</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company4.png" style="height: 25px;"><span>Ebay Marketplace</span></td>
                                                <td class="text-center"><a class="badge badge-danger" href="">Groceries</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-danger">- 244 USD</span></td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap"><span class="status-pill smaller yellow"></span><span>Pending</span></td>
                                                <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                <td class="cell-with-media"><img alt="" src="<?php echo base_url(); ?>assets/company2.png" style="height: 25px;"><span>Envato Templates Inc</span></td>
                                                <td class="text-center"><a class="badge badge-primary" href="">Business</a></td>
                                                <td class="text-right bolder nowrap"><span class="text-success">+ 340 USD</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <!--END - Transactions Table-->
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
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