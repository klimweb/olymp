<?php include '../includes/db.php'; ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>
        .horizontal-menu .horizontal-menu-wrapper {
            top: 10px;
        }
        .horizontal-menu.navbar-floating:not(.blank-page) .app-content {
            padding-top: 6.75rem;
        }
        .tour-prize {
            margin-bottom: 15px;
        }
        #DataTables_Table_0_wrapper .action-btns button {
            display: none
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">


<?php include 'inc/menu.php'; ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Tournaments</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Выдача id и паролей участникам турниров
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-list-view" class="data-list-view-header">
                <div class="action-btns d-none">
                    <div class="btn-dropdown mr-1 mb-1">

                    </div>
                </div>

                <!-- DataTable starts -->
                <div class="table-responsive">
                    <table class="table data-list-view">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Player ID</th>
                            <th>Tournament</th>
                            <th>Date</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $items = R::getAll('SELECT * FROM toursbuy WHERE accpass = "" ORDER BY id DESC');
                        foreach ($items as $item) :
                        $user_tour = R::findOne('users', 'id = ?', array($item['uid']));
                        $tour = R::findOne('tournaments', 'id = ?', array($item['tid']));
                        $date = getdate($tour->data);
                        ?>
                            <tr data-id="<?php echo $item['id'] ?>">
                                <td></td>
                                <td class="player_tour">Player_<?php echo $user_tour['player_id']; ?></td>
                                <td class="name_tour"><?php echo $tour['name'] ?></td>
                                <td class="date_tour"><?php echo $date['mday'].' '.$date['month'].', AT '.$date['hours'].':'.$date['minutes']; ?></td>
                                <td class="product-action">
                                    <div class="btn btn-success give_id_pass" data-id="<?php echo $item['id'] ?>" data-toggle="modal" data-target="#give_id_pass">Выдать id и пароль</div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- DataTable ends -->

                <div class="modal fade" id="give_id_pass">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Выдача id и пароля</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p id="player_id_getPass">Игрок: <span style="color: #0B0B0B; font-weight: 700;"></span></p>
                                <p id="nametour_getPass">Название турнира: <span style="color: #0B0B0B; font-weight: 700;"></span></p>
                                <p id="date_getPass">Дата турнира: <span style="color: #0B0B0B; font-weight: 700;"></span></p>

                                <h2 style="font-size: 17px;color: #0B0B0B; margin-top: 30px;margin-bottom: 20px;">Данные для игрока:</h2>
                                <input type="hidden" id="tourticket_id" value="0">
                                <div class="form-group row">
                                    <label for="id_touruser" class="col-sm-2 col-form-label">ID игрока</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_touruser" placeholder="Введите ID игрока">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pass_touruser" class="col-sm-2 col-form-label">Пароль игрока</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pass_touruser" placeholder="Введите пароль игрока">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                <button type="button" class="btn btn-primary" id="send_idpass">Отправить</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </section>
            <!-- Data list view end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/ui/data-list-view.js"></script>
<!-- END: Page JS-->

<script src="script.js"></script>
</body>
<!-- END: Body-->

</html>