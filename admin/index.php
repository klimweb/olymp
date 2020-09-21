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
                                    <li class="breadcrumb-item active">Список турниров
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
                                    <th>NAME</th>
                                    <th>GAME</th>
                                    <th>PRIZE</th>
                                    <th>PLAYERS</th>
                                    <th>DATE</th>
<!--                                    <th>STATUS</th>-->
                                    <th>Режим</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $items = R::getAll('SELECT * FROM tournaments ORDER BY data DESC');
                                foreach ($items as $item) :
                                $item['prize'] = json_decode($item['prize']);
                                $prize = 0;
                                foreach ($item['prize'] as $summ) {
                                    $prize += $summ;
                                }
                                $date = getdate($item['data']);
                                ?>
                                <tr data-id="<?php echo $item['id'] ?>">
                                    <input type="hidden" id="tour-id">
                                    <td></td>
                                    <td class="product-name"><?php echo $item['name']; ?></td>
                                    <td class="product-category"><?php echo $item['game']; ?></td>
                                    <td>
                                        <?php echo $prize ?> руб
                                    </td>
                                    <td>
                                        0/<?php echo $item['players']; ?> чел.
                                    </td>
                                    <td>
                                        <?php echo $date['mday'].' '.$date['month'].', AT '.$date['hours'].':'.$date['minutes']; ?>
                                    </td>
                                    <!-- <td>
                                        <?php //if($item['date'] > time()) : ?>
                                            <div class="chip chip-warning">
                                                <div class="chip-body">
                                                    <div class="chip-text">Ожидание</div>
                                                </div>
                                            </div>
                                        <?php //else : ?>
                                            <div class="chip chip-danger">
                                                <div class="chip-body">
                                                    <div class="chip-text">Не актуален</div>
                                                </div>
                                            </div>
                                        <?php //endif; ?>
                                    </td> -->
                                    <th><?php echo $item['mode'] ?></th>
                                    <td class="product-action">
                                        <span class="action-edit" data-id="<?php echo $item['id'] ?>"><i class="feather icon-edit"></i></span>
                                        <!-- <span class="action-delete"><i class="feather icon-trash"></i></span> -->
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="load" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(255,255,255,.7);display: flex;justify-content: center;align-items: center;z-index: 999999; display: none">
                                <span style="font-size: 18px; color: #000">Загрузка...</span>
                            </div>
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">List View Data</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-players">Image (url)</label>
                                            <input type="text" class="form-control" id="tour-img" value="https://">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-name">Name</label>
                                            <input type="text" class="form-control" id="tour-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-game"> Game </label>
                                            <select class="form-control" id="tour-game">
                                                <option value="PUBG MOBILE">PUBG MOBILE</option>
                                                <option value="Call of Duty">Call of Duty</option>
                                                <option value="Garena Fire Free">Garena Fire Free</option>
                                                <option value="Brawl Stars">Brawl Stars</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-name">Mode</label>
                                            <input type="text" class="form-control" id="tour-mode">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-players">Players</label>
                                            <input type="text" class="form-control" id="tour-players">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-date">Date</label>
                                            <input type='text' id="tour-date" class="form-control pickadate" />
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-time">Time</label>
                                            <input type='text' id="tour-time" class="form-control pickatime" />
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="tour-prize">Призы (руб) | <a id="add_prize" style="text-decoration: underline; user-select: none;">Добавить приз</a> | <a id="delete_prize" style="text-decoration: underline; user-select: none;">Удалить приз</a></label>
                                            <div id="tour-prizes" style="margin-top: 15px;">
                                                <div class="tour-prize">
                                                    <span class="mesto">1</span> место <br>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="tour-prize">
                                                    <span class="mesto">2</span> место <br>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="tour-prize">
                                                    <span class="mesto">3</span> место <br>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">

                                    <button class="btn btn-primary tournament_btn" data-action="add_tournament">Save</button>

                                    <button class="btn btn-primary tournament_btn" data-action="update_tournament" style="display: none">Update</button>

                                </div>

                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
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