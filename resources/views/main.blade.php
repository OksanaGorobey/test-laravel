<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset( 'css/font-face.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css' ) }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css' ) }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css' ) }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css' ) }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Welcome back Counteragent
                            <span>CRUD!</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">
                                    <i class="zmdi zmdi-plus"></i>add item
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="counteragent_list">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel"> Counteragent + </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body card-block">
                            <form id ="add_form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" class=" form-control-label">Name: </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Text" class="form-control" required>
                                        <small class="form-text text-muted">Set name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="phone" class=" form-control-label">Phone Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="tel" id="phone" name="phone" placeholder="0500000000" class="form-control"  pattern="[0-9]{10}" required>
                                        <small class="help-block form-text">Please enter your phone</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="address" class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="address" name="address" placeholder="address" class="form-control">
                                        <small class="help-block form-text">Please enter your address</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="status1" name="status" value="1" class="form-check-input">Active
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="status2" name="status" value="2" class="form-check-input">Not Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm" id="create" >
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel"> Counteragent + </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body card-block">
                            <form id ="edit_form" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" id="id_counteragent" name="id" value="1">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" class=" form-control-label">Name: </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Text" class="form-control" required>
                                        <small class="form-text text-muted">Set name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="phone" class=" form-control-label">Phone Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="tel" id="phone" name="phone" placeholder="0500000000" class="form-control"  pattern="[0-9]{10}" required>
                                        <small class="help-block form-text">Please enter your phone</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="status1" name="status" value="1" class="form-check-input">Active
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="status2" name="status" value="2" class="form-check-input">Not Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm" id="edit" >
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('vendor/jquery-3.2.1.min.js' ) }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('vendor/bootstrap-4.1/popper.min.js' ) }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js' ) }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('vendor/slick/slick.min.js' ) }}">
</script>
<script src="{{ asset('vendor/wow/wow.min.js' ) }}"></script>
<script src="{{ asset('vendor/animsition/animsition.min.js' ) }}"></script>
<script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js' ) }}">
</script>
<script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js' ) }}"></script>
<script src="{{ asset('vendor/counter-up/jquery.counterup.min.js' ) }}">
</script>
<script src="{{ asset('vendor/circle-progress/circle-progress.min.js' ) }}"></script>
<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js' ) }}"></script>
<script src="{{ asset('vendor/chartjs/Chart.bundle.min.js' ) }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js' ) }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js' ) }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- Main JS-->
<script src="{{ asset('js/main.js' ) }}"></script>

</body>

</html>
<!-- end document-->