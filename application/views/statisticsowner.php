<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telekhong</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body onload="showtab1()">

    

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>store">Telekhong</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu message-dropdown">
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>John Smith</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>John Smith</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>John Smith</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-footer">
                                    <a href="#">Read All New Messages</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-desktop"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu alert-dropdown">
                                <li>
                                    <a href="#">Store 1 <span class="label label-success "style="margin-left :50px">Avaliable</span></a>
                                </li>
                                <li>
                                    <a href="#">Store 2 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                                </li>
                                <li>
                                    <a href="#">Store 3 <span class="label label-success"style="margin-left :50px">Avaliable</span></a>
                                </li>
                                <li>
                                    <a href="#">Store 4 <span class="label label-warning"style="margin-left :50px">Blocked</span></a>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <a href="#">View All</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('first_name');?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a href="<?php echo site_url("auth/logout");?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li >
                                <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                            </li>
                            <li class="active">
                                <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                            </li>

                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="demo" class="collapse">
                                    <li>
                                        <a href="<?=base_url()?>index.php/manageuser">Manage User</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/package"><i class="fa fa-fw fa-arrows-v"></i> Package</a>
                            </li>

                        </ul>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Statistics
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-desktop"></i>  <a href="<?=base_url()?>store">store</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-bar-chart-o"></i> Statistics
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Flot Charts -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h2 class="page-header">All Chart in </h2></div>
                            
                        </div>

                        <script type="text/javascript">
                             
                        </script>


<<<<<<< HEAD
                        <div class="tabbable" > <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs" id="mytab">
                                <li class="active"><a href="#tab1" data-toggle="tab" onclick="showtab1()">General Graph</a></li>
                                <li ><a href="#tab2" data-toggle="tab" onclick="showtab2()">User Received</a></li>
                                <li ><a href="#tab3" data-toggle="tab" onclick="showtab3()">Received and come to Store</a></li>
                                <li ><a href="#tab4" data-toggle="tab" onclick="showtab4()">First QR Code</a></li>
                                <li ><a href="#tab5" data-toggle="tab" onclick="showtab5()">Second or more QR Code</a></li>     
                            </ul>
                            <div class="tab-content ">

            <!-- begin tab2 -->
                                <div class=" active" id="tab2" >
=======
                        <div class="tabbable"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs" id="myTabs">
                                <li class="active" id="a"><a href="#tab1" data-toggle="tab">User Received</a></li>
                                <li id="b"><a href="#tab2" data-toggle="tab">Received and come to Store</a></li>
                                <li id="c"><a href="#tab3" data-toggle="tab">First QR Code</a></li>
                                <li id="d"><a href="#tab4" data-toggle="tab">Second or more QR Code</a></li>
                                <li id="e"><a href="#tab5" data-toggle="tab">General Graph</a></li>
                            </ul>
                            <div class="tab-content">
            <!-- begin tab1 -->
                                <div class="tab-pane active" id="tab1">

                                    <div class="dropdown col-lg-6" style="margin-top : 20px;">
                                        <?php echo form_open()?>
                                        <select onchange="this.form.action='<?php echo site_url('statisticsowner')?>/re/'+this.value;this.form.submit()" class="form-control" style="width : 300px;background-color : #286090;color:#fff;" >
                                            <option hidden><?php echo $maxinfo; ?></option>
                                            <?php
                                            foreach ($rs as $r) {
                                                echo "<option value='".$r['info_id']."'>".$r['info_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php echo form_close(); ?>
                                    </div>
>>>>>>> origin/master
                                
                                    <div class="col-lg-12" style="height : 30px"></div>
                                    <!-- start line graph age range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age Range Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-age-re"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph age range use qr code -->
                                    <div class="col-lg-12" style="height : 30px"></div>

                                    <!-- start line graph sex range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gender Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-sex-re"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph sex range use qr code -->


                                </div>
            <!-- end tab2   -->
            <!-- begin tab3 -->
                                <div class=" active" id="tab3" >

                                    <div class="dropdown col-lg-6" style="margin-top : 20px;">
                                        <?php echo form_open()?>
                                        <select onchange="this.form.action='<?php echo site_url('statisticsowner')?>/rein/'+this.value;this.form.submit()" class="form-control" style="width : 300px;background-color : #286090;color:#fff;" >
                                            <option hidden><?php echo $maxinfo; ?></option>
                                            <?php
                                            foreach ($rs as $r) {
                                                echo "<option value='".$r['info_id']."'>".$r['info_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php echo form_close(); ?>
                                    </div>

                                    <div class="col-lg-12" style="height : 30px"></div>
                                    <!-- start line graph age range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age Range Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-age-rein"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph age range use qr code -->
                                    <div class="col-lg-12" style="height : 30px"></div>

                                    <!-- start line graph sex range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gender Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-sex-rein"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph sex range use qr code -->
                                </div>
            <!-- end tab3 -->
            <!-- begin tab4 -->
                                <div class="active" id="tab4" >

                                    <div class="dropdown col-lg-6" style="margin-top : 20px;">
                                        <?php echo form_open()?>
                                        <select onchange="this.form.action='<?php echo site_url('statisticsowner')?>/qr/'+this.value;this.form.submit()" class="form-control" style="width : 300px;background-color : #286090;color:#fff;" >
                                            <option hidden><?php echo $maxinfo; ?></option>
                                            <?php
                                            foreach ($rs as $r) {
                                                echo "<option value='".$r['info_id']."'>".$r['info_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php echo form_close(); ?>
                                    </div>
                                    <div class="col-lg-12" style="height : 30px"></div>
                                    <!-- start line graph age range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age Range Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-age-qr"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph age range use qr code -->
                                    <div class="col-lg-12" style="height : 30px"></div>

                                    <!-- start line graph sex range use qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gender Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-sex-qr"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph sex range use qr code -->
                                </div>
<<<<<<< HEAD
            <!-- end tab4 -->
            <!-- begin tab5 -->
                                <div class="active" id="tab5">

=======
            <!-- end tab3 -->
            <!-- begin tab4 -->
                                <div class="tab-pane" id="tab4">

                                    <div class="dropdown col-lg-6" style="margin-top : 20px;">
                                        <?php echo form_open()?>
                                        <select onchange="this.form.action='<?php echo site_url('statisticsowner')?>/qrag/'+this.value;this.form.submit()" class="form-control" style="width : 300px;background-color : #286090;color:#fff;" >
                                            <option hidden><?php echo $maxinfo; ?></option>
                                            <?php
                                            foreach ($rs as $r) {
                                                echo "<option value='".$r['info_id']."'>".$r['info_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php echo form_close(); ?>
                                    </div>
>>>>>>> origin/master
                                    <div class="col-lg-12" style="height : 30px"></div>
                                    <!-- start line graph age range agian qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age Range Graph </h3>
                                            </div>
                                            <div class="panel-body" >
                                                <div id="morris-line-chart-age-qrag"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph age range agian qr code -->
                                    <div class="col-lg-12" style="height : 30px"></div>

                                    <!-- start line graph sex range agian qr code -->
                                    <div class="col-lg-12" >
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gender Graph </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-line-chart-sex-qrag"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end line graph sex range agian qr code -->
                                </div>
            <!-- end tab5 -->

            <!-- begin tab1 -->
                                <div class=" active" id="tab1" >
                                    <!-- /.row -->
                                    <div class="row" style=" margin-top: 40px;">
                                        <div class="col-lg-6">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age Range Chart </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="flot-chart">
                                                        <div class="flot-chart-content" id="flot-pie-chart-age"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4>Age Range Chart</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>

                                                                <td> < 18 year old</td>
                                                                <td> 18 - 25 year old</td>
                                                                <td> 26 - 35 year old</td>
                                                                <td> 36 - 50 year old</td>
                                                                <td> > 50 year old</td>
                                                                <td>Total</td>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php $pa1 = $age1->num_rows(); echo $pa1; ?></td>
                                                                <td><?php $pa2 = $age2->num_rows(); echo $pa2; ?></td>
                                                                <td><?php $pa3 = $age3->num_rows(); echo $pa3; ?></td>
                                                                <td><?php $pa4 = $age4->num_rows(); echo $pa4; ?></td>
                                                                <td><?php $pa5 = $age5->num_rows(); echo $pa5; ?></td>
                                                                <td><?php $pa = $pa1+$pa2+$pa3+$pa4+$pa5; echo $pa; ?></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                 
                                        </div>

                                    </div>
                                    <!-- /.row .........................-->

                                    <div class="row" style=" margin-top: 40px;">
                                        <div class="col-lg-6">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gender Chart </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="flot-chart">
                                                        <div class="flot-chart-content" id="flot-pie-chart-sex"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4>Gender Chart</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>

                                                                <td> Male </td>
                                                                <td> Female </td>
                                                                <td> Unknown </td>
                                                                <td> Total </td>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php $pa1 = $male->num_rows(); echo $pa1; ?></td>
                                                                <td><?php $pa2 = $female->num_rows(); echo $pa2; ?></td>
                                                                <td><?php $pa3 = $unkn->num_rows(); echo $pa3; ?></td>
                                                                <td><?php $pa = $pa1+$pa2+$pa3; echo $pa; ?></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                 
                                        </div>

                                    </div>
                                    <!-- /.row .........................-->

                                </div>
            <!-- end tab1 -->
            
                            </div>
                        </div>


                    </div>
                    <!-- /.row .........................-->

                    
                    <div><br></div>
                    <center><div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/promotion2you</li>
                                <li> tel.08X-XXX-XXXX KingMongkutt's University of technology thonburi</li>
                            </ol>
                        </div>
                    </div></center>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?=base_url()?>assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?=base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/morris/morris.min.js"></script>
        <!-- <script src="<?=base_url()?>assets/js/plugins/morris/morris-data.js"></script>-->

        <!-- Flot Charts JavaScript -->
        <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
        <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
        <!--<script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script>-->




        <!-- pie chart package -->
        <!-- start -->
        <!-- pie chart package -->
        <!-- start -->
        <style>
        .show{
        display:block;
        }

        .closetab{
        display:none;
        }
        </style>
        <script>

        function showtab1(){
            $('#tab1').css("display","block"); 
            $('#tab2').css("display","none");
            $('#tab3').css("display","none");
            $('#tab4').css("display","none");
            $('#tab5').css("display","none");
        }

        function showtab2(){
            $('#tab2').css("display","block"); 
            $('#tab1').css("display","block");
            $('#tab3').css("display","none");
            $('#tab4').css("display","none");
            $('#tab5').css("display","none");
        }

        function showtab3(){
            $('#tab3').css("display","block"); 
            $('#tab1').css("display","block");
            $('#tab2').css("display","none");
            $('#tab4').css("display","none");
            $('#tab5').css("display","none");
        }

        function showtab4(){
            $('#tab4').css("display","block"); 
            $('#tab1').css("display","block");
            $('#tab3').css("display","none");
            $('#tab2').css("display","none");
            $('#tab5').css("display","none");
        }

        function showtab5(){
            $('#tab5').css("display","block"); 
            $('#tab2').css("display","none");
            $('#tab3').css("display","none");
            $('#tab4').css("display","none");
            $('#tab1').css("display","block");
        }



        </script>

        <script type="text/javascript">
    // Flot Pie Chart with Tooltips
<<<<<<< HEAD
    
            $('#tab1').ready(function() {
 
=======
            $('#e a').click(function() {

>>>>>>> origin/master
                var data = [{
                    label: " > 18 year old",
                    <?php
                    echo "data: ";
                    echo $age1->num_rows();
                    ?>
                }, {
                    label: " 18-25 year old",
                    <?php
                    echo "data: ";
                    echo $age2->num_rows();
                    ?>
                }, {
                    label: " 26-35 year old",
                    <?php
                    echo "data: ";
                    echo $age3->num_rows();
                    ?>
                }, {
                    label: " 36-50 year old",
                    <?php
                    echo "data: ";
                    echo $age4->num_rows();
                    ?>
                },{
                    label: " > 50 year old",
                    <?php
                    echo "data: ";
                    echo $age5->num_rows();
                    ?>
                }];

                var plotObj = $.plot($("#flot-pie-chart-age"), data, {
                    series: {
                        pie: {
                            show: true
                        }
                    },
                    grid: {
                        hoverable: true
                    },
                    tooltip: true,
                    tooltipOpts: {
                    content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                    shifts: {
                        x: 20,
                        y: 0
                    },
                    defaultTheme: false
                }
            });
        
            
    });

        </script>

<script type="text/javascript">
    // Flot Pie Chart with Tooltips
<<<<<<< HEAD
    
    $('#tab1').ready(function() { 
=======
    $('#e a').click(function() {

>>>>>>> origin/master
        var data = [{
            label: " Male",
            <?php
            echo "data: ";
            echo $male->num_rows();
            ?>
        }, {
            label: " Female",
            <?php
            echo "data: ";
            echo $female->num_rows();
            ?>
        }, {
            label: " Unknown",
            <?php
            echo "data: ";
            echo $unkn->num_rows();
            ?>
        }];

        var plotObj = $.plot($("#flot-pie-chart-sex"), data, {
            series: {
                pie: {
                    show: true
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });
        
    });

</script>
<!-- end pie chart package -->



<!-- start use qr again line chart age -->
<script type="text/javascript">
<<<<<<< HEAD
    var tab5;

    $('document').ready(function(){
        
    tab5 =

=======
    var dataqrag =
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-qrag',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$countqragage1d1." , 
                        b: ".$countqragage2d1." , 
                        c: ".$countqragage3d1." , 
                        d: ".$countqragage4d1." , 
                        e: ".$countqragage5d1." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$countqragage1d2." , 
                        b: ".$countqragage2d2." , 
                        c: ".$countqragage3d2." , 
                        d: ".$countqragage4d2." , 
                        e: ".$countqragage5d2." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$countqragage1d3." , 
                        b: ".$countqragage2d3." , 
                        c: ".$countqragage3d3." , 
                        d: ".$countqragage4d3." , 
                        e: ".$countqragage5d3." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$countqragage1d4." , 
                        b: ".$countqragage2d4." , 
                        c: ".$countqragage3d4." , 
                        d: ".$countqragage4d4." , 
                        e: ".$countqragage5d4." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$countqragage1d5." , 
                        b: ".$countqragage2d5." , 
                        c: ".$countqragage3d5." , 
                        d: ".$countqragage4d5." , 
                        e: ".$countqragage5d5." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$countqragage1d6." , 
                        b: ".$countqragage2d6." , 
                        c: ".$countqragage3d6." , 
                        d: ".$countqragage4d6." , 
                        e: ".$countqragage5d6." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$countqragage1d7." , 
                        b: ".$countqragage2d7." , 
                        c: ".$countqragage3d7." , 
                        d: ".$countqragage4d7." , 
                        e: ".$countqragage5d7." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$countqragage1d8." , 
                        b: ".$countqragage2d8." , 
                        c: ".$countqragage3d8." , 
                        d: ".$countqragage4d8." , 
                        e: ".$countqragage5d8." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$countqragage1d9." , 
                        b: ".$countqragage2d9." , 
                        c: ".$countqragage3d9." , 
                        d: ".$countqragage4d9." , 
                        e: ".$countqragage5d9." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$countqragage1d10." , 
                        b: ".$countqragage2d10." , 
                        c: ".$countqragage3d10." , 
                        d: ".$countqragage4d10." , 
                        e: ".$countqragage5d10." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$countqragage1d11." , 
                        b: ".$countqragage2d11." , 
                        c: ".$countqragage3d11." , 
                        d: ".$countqragage4d11." , 
                        e: ".$countqragage5d11." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$countqragage1d12." , 
                        b: ".$countqragage2d12." , 
                        c: ".$countqragage3d12." , 
                        d: ".$countqragage4d12." , 
                        e: ".$countqragage5d12."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$countqragage1d13." , 
                        b: ".$countqragage2d13." , 
                        c: ".$countqragage3d13." , 
                        d: ".$countqragage4d13." , 
                        e: ".$countqragage5d13." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$countqragage1d14." , 
                        b: ".$countqragage2d14." , 
                        c: ".$countqragage3d14." , 
                        d: ".$countqragage4d14." , 
                        e: ".$countqragage5d14."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$countqragage1d15." , 
                        b: ".$countqragage2d15." , 
                        c: ".$countqragage3d15." , 
                        d: ".$countqragage4d15." , 
                        e: ".$countqragage5d15."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$countqragage1d16." , 
                        b: ".$countqragage2d16." , 
                        c: ".$countqragage3d16." , 
                        d: ".$countqragage4d16." , 
                        e: ".$countqragage5d16."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$countqragage1d17." , 
                        b: ".$countqragage2d17." , 
                        c: ".$countqragage3d17." , 
                        d: ".$countqragage4d17." , 
                        e: ".$countqragage5d17."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$countqragage1d18." , 
                        b: ".$countqragage2d18." , 
                        c: ".$countqragage3d18." , 
                        d: ".$countqragage4d18." , 
                        e: ".$countqragage5d18."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$countqragage1d19." , 
                        b: ".$countqragage2d19." , 
                        c: ".$countqragage3d19." , 
                        d: ".$countqragage4d19." , 
                        e: ".$countqragage5d19."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$countqragage1d20." , 
                        b: ".$countqragage2d20." , 
                        c: ".$countqragage3d20." , 
                        d: ".$countqragage4d20." , 
                        e: ".$countqragage5d20."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$countqragage1d21." , 
                        b: ".$countqragage2d21." , 
                        c: ".$countqragage3d21." , 
                        d: ".$countqragage4d21." , 
                        e: ".$countqragage5d21."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$countqragage1d22." , 
                        b: ".$countqragage2d22." , 
                        c: ".$countqragage3d22." , 
                        d: ".$countqragage4d22." , 
                        e: ".$countqragage5d22."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$countqragage1d23." , 
                        b: ".$countqragage2d23." , 
                        c: ".$countqragage3d23." , 
                        d: ".$countqragage4d23." , 
                        e: ".$countqragage5d23."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$countqragage1d24." , 
                        b: ".$countqragage2d24." , 
                        c: ".$countqragage3d24." , 
                        d: ".$countqragage4d24." , 
                        e: ".$countqragage5d24." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$countqragage1d25." , 
                        b: ".$countqragage2d25." , 
                        c: ".$countqragage3d25." , 
                        d: ".$countqragage4d25." , 
                        e: ".$countqragage5d25."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$countqragage1d26." , 
                        b: ".$countqragage2d26." , 
                        c: ".$countqragage3d26." , 
                        d: ".$countqragage4d26." , 
                        e: ".$countqragage5d26."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$countqragage1d27." , 
                        b: ".$countqragage2d27." , 
                        c: ".$countqragage3d27." , 
                        d: ".$countqragage4d27." , 
                        e: ".$countqragage5d27."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$countqragage1d28." , 
                        b: ".$countqragage2d28." , 
                        c: ".$countqragage3d28." , 
                        d: ".$countqragage4d28." , 
                        e: ".$countqragage5d28."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$countqragage1d29." , 
                        b: ".$countqragage2d29." , 
                        c: ".$countqragage3d29." , 
                        d: ".$countqragage4d29." , 
                        e: ".$countqragage5d29."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$countqragage1d30." , 
                        b: ".$countqragage2d30." , 
                        c: ".$countqragage3d30." , 
                        d: ".$countqragage4d30." , 
                        e: ".$countqragage5d30."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$countqragage1d31." , 
                        b: ".$countqragage2d31." , 
                        c: ".$countqragage3d31." , 
                        d: ".$countqragage4d31." , 
                        e: ".$countqragage5d31."}";
                };
            ?>

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['>18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true,
            defaultTheme: false
    });
});
    
    $('#tab5').ready(function(){
        tab5.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });

    $('#d a').click(function(){
        dataqrag.redraw();
    });
</script>
<!-- end use qr again line chart age -->



<!-- start use qr again line chart sex -->
<script type="text/javascript">
<<<<<<< HEAD
var tab5;

    $('document').ready(function(){
    tab5 =
    

=======
$('#d a').click(function() {
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-qrag',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$countqragsex1d1." , 
                        b: ".$countqragsex2d1." , 
                        c: ".$countqragsex3d1." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$countqragsex1d2." , 
                        b: ".$countqragsex2d2." , 
                        c: ".$countqragsex3d2." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$countqragsex1d3." , 
                        b: ".$countqragsex2d3." , 
                        c: ".$countqragsex3d3." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$countqragsex1d4." , 
                        b: ".$countqragsex2d4." , 
                        c: ".$countqragsex3d4." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$countqragsex1d5." , 
                        b: ".$countqragsex2d5." , 
                        c: ".$countqragsex3d5." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$countqragsex1d6." , 
                        b: ".$countqragsex2d6." , 
                        c: ".$countqragsex3d6." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$countqragsex1d7." , 
                        b: ".$countqragsex2d7." , 
                        c: ".$countqragsex3d7." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$countqragsex1d8." , 
                        b: ".$countqragsex2d8." , 
                        c: ".$countqragsex3d8." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$countqragsex1d9." , 
                        b: ".$countqragsex2d9." , 
                        c: ".$countqragsex3d9." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$countqragsex1d10." , 
                        b: ".$countqragsex2d10." , 
                        c: ".$countqragsex3d10." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$countqragsex1d11." , 
                        b: ".$countqragsex2d11." , 
                        c: ".$countqragsex3d11." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$countqragsex1d12." , 
                        b: ".$countqragsex2d12." , 
                        c: ".$countqragsex3d12."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$countqragsex1d13." , 
                        b: ".$countqragsex2d13." , 
                        c: ".$countqragsex3d13." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$countqragsex1d14." , 
                        b: ".$countqragsex2d14." , 
                        c: ".$countqragsex3d14."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$countqragsex1d15." , 
                        b: ".$countqragsex2d15." , 
                        c: ".$countqragsex3d15."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$countqragsex1d16." , 
                        b: ".$countqragsex2d16." , 
                        c: ".$countqragsex3d16."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$countqragsex1d17." , 
                        b: ".$countqragsex2d17." , 
                        c: ".$countqragsex3d17."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$countqragsex1d18." , 
                        b: ".$countqragsex2d18." , 
                        c: ".$countqragsex3d18."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$countqragsex1d19." , 
                        b: ".$countqragsex2d19." , 
                        c: ".$countqragsex3d19."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$countqragsex1d20." , 
                        b: ".$countqragsex2d20." , 
                        c: ".$countqragsex3d20."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$countqragsex1d21." , 
                        b: ".$countqragsex2d21." , 
                        c: ".$countqragsex3d21."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$countqragsex1d22." , 
                        b: ".$countqragsex2d22." , 
                        c: ".$countqragsex3d22."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$countqragsex1d23." , 
                        b: ".$countqragsex2d23." , 
                        c: ".$countqragsex3d23."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$countqragsex1d24." , 
                        b: ".$countqragsex2d24." , 
                        c: ".$countqragsex3d24." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$countqragsex1d25." , 
                        b: ".$countqragsex2d25." , 
                        c: ".$countqragsex3d25."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$countqragsex1d26." , 
                        b: ".$countqragsex2d26." , 
                        c: ".$countqragsex3d26."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$countqragsex1d27." , 
                        b: ".$countqragsex2d27." , 
                        c: ".$countqragsex3d27."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$countqragsex1d28." , 
                        b: ".$countqragsex2d28." , 
                        c: ".$countqragsex3d28."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$countqragsex1d29." , 
                        b: ".$countqragsex2d29." , 
                        c: ".$countqragsex3d29."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$countqragsex1d30." , 
                        b: ".$countqragsex2d30." , 
                        c: ".$countqragsex3d30."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$countqragsex1d31." , 
                        b: ".$countqragsex2d31." , 
                        c: ".$countqragsex3d31."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Male','Female','Unknown'],
        // Disables line smoothing
        colors: ['Red','blue','green'],
        smooth: false,
        resize: true
    });
<<<<<<< HEAD

});
$('#tab5').ready(function(){
        tab5.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
});
>>>>>>> origin/master
</script>
<!-- end use qr again line chart sex -->


<!-- start use qr line chart age -->
<script type="text/javascript">
<<<<<<< HEAD
var tab4;

    $('document').ready(function(){
    tab4 =
=======
$('#c a').click(function() {
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-qr',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$qrage1d1->num_rows()." , 
                        b: ".$qrage2d1->num_rows()." , 
                        c: ".$qrage3d1->num_rows()." , 
                        d: ".$qrage4d1->num_rows()." , 
                        e: ".$qrage5d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$qrage1d2->num_rows()." , 
                        b: ".$qrage2d2->num_rows()." , 
                        c: ".$qrage3d2->num_rows()." , 
                        d: ".$qrage4d2->num_rows()." , 
                        e: ".$qrage5d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$qrage1d3->num_rows()." , 
                        b: ".$qrage2d3->num_rows()." , 
                        c: ".$qrage3d3->num_rows()." , 
                        d: ".$qrage4d3->num_rows()." , 
                        e: ".$qrage5d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$qrage1d4->num_rows()." , 
                        b: ".$qrage2d4->num_rows()." , 
                        c: ".$qrage3d4->num_rows()." , 
                        d: ".$qrage4d4->num_rows()." , 
                        e: ".$qrage5d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$qrage1d5->num_rows()." , 
                        b: ".$qrage2d5->num_rows()." , 
                        c: ".$qrage3d5->num_rows()." , 
                        d: ".$qrage4d5->num_rows()." , 
                        e: ".$qrage5d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$qrage1d6->num_rows()." , 
                        b: ".$qrage2d6->num_rows()." , 
                        c: ".$qrage3d6->num_rows()." , 
                        d: ".$qrage4d6->num_rows()." , 
                        e: ".$qrage5d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$qrage1d7->num_rows()." , 
                        b: ".$qrage2d7->num_rows()." , 
                        c: ".$qrage3d7->num_rows()." , 
                        d: ".$qrage4d7->num_rows()." , 
                        e: ".$qrage5d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$qrage1d8->num_rows()." , 
                        b: ".$qrage2d8->num_rows()." , 
                        c: ".$qrage3d8->num_rows()." , 
                        d: ".$qrage4d8->num_rows()." , 
                        e: ".$qrage5d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$qrage1d9->num_rows()." , 
                        b: ".$qrage2d9->num_rows()." , 
                        c: ".$qrage3d9->num_rows()." , 
                        d: ".$qrage4d9->num_rows()." , 
                        e: ".$qrage5d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$qrage1d10->num_rows()." , 
                        b: ".$qrage2d10->num_rows()." , 
                        c: ".$qrage3d10->num_rows()." , 
                        d: ".$qrage4d10->num_rows()." , 
                        e: ".$qrage5d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$qrage1d11->num_rows()." , 
                        b: ".$qrage2d11->num_rows()." , 
                        c: ".$qrage3d11->num_rows()." , 
                        d: ".$qrage4d11->num_rows()." , 
                        e: ".$qrage5d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$qrage1d12->num_rows()." , 
                        b: ".$qrage2d12->num_rows()." , 
                        c: ".$qrage3d12->num_rows()." , 
                        d: ".$qrage4d12->num_rows()." , 
                        e: ".$qrage5d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$qrage1d13->num_rows()." , 
                        b: ".$qrage2d13->num_rows()." , 
                        c: ".$qrage3d13->num_rows()." , 
                        d: ".$qrage4d13->num_rows()." , 
                        e: ".$qrage5d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$qrage1d14->num_rows()." , 
                        b: ".$qrage2d14->num_rows()." , 
                        c: ".$qrage3d14->num_rows()." , 
                        d: ".$qrage4d14->num_rows()." , 
                        e: ".$qrage5d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$qrage1d15->num_rows()." , 
                        b: ".$qrage2d15->num_rows()." , 
                        c: ".$qrage3d15->num_rows()." , 
                        d: ".$qrage4d15->num_rows()." , 
                        e: ".$qrage5d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$qrage1d16->num_rows()." , 
                        b: ".$qrage2d16->num_rows()." , 
                        c: ".$qrage3d16->num_rows()." , 
                        d: ".$qrage4d16->num_rows()." , 
                        e: ".$qrage5d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$qrage1d17->num_rows()." , 
                        b: ".$qrage2d17->num_rows()." , 
                        c: ".$qrage3d17->num_rows()." , 
                        d: ".$qrage4d17->num_rows()." , 
                        e: ".$qrage5d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$qrage1d18->num_rows()." , 
                        b: ".$qrage2d18->num_rows()." , 
                        c: ".$qrage3d18->num_rows()." , 
                        d: ".$qrage4d18->num_rows()." , 
                        e: ".$qrage5d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$qrage1d19->num_rows()." , 
                        b: ".$qrage2d19->num_rows()." , 
                        c: ".$qrage3d19->num_rows()." , 
                        d: ".$qrage4d19->num_rows()." , 
                        e: ".$qrage5d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$qrage1d20->num_rows()." , 
                        b: ".$qrage2d20->num_rows()." , 
                        c: ".$qrage3d20->num_rows()." , 
                        d: ".$qrage4d20->num_rows()." , 
                        e: ".$qrage5d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$qrage1d21->num_rows()." , 
                        b: ".$qrage2d21->num_rows()." , 
                        c: ".$qrage3d21->num_rows()." , 
                        d: ".$qrage4d21->num_rows()." , 
                        e: ".$qrage5d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$qrage1d22->num_rows()." , 
                        b: ".$qrage2d22->num_rows()." , 
                        c: ".$qrage3d22->num_rows()." , 
                        d: ".$qrage4d22->num_rows()." , 
                        e: ".$qrage5d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$qrage1d23->num_rows()." , 
                        b: ".$qrage2d23->num_rows()." , 
                        c: ".$qrage3d23->num_rows()." , 
                        d: ".$qrage4d23->num_rows()." , 
                        e: ".$qrage5d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$qrage1d24->num_rows()." , 
                        b: ".$qrage2d24->num_rows()." , 
                        c: ".$qrage3d24->num_rows()." , 
                        d: ".$qrage4d24->num_rows()." , 
                        e: ".$qrage5d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$qrage1d25->num_rows()." , 
                        b: ".$qrage2d25->num_rows()." , 
                        c: ".$qrage3d25->num_rows()." , 
                        d: ".$qrage4d25->num_rows()." , 
                        e: ".$qrage5d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$qrage1d26->num_rows()." , 
                        b: ".$qrage2d26->num_rows()." , 
                        c: ".$qrage3d26->num_rows()." , 
                        d: ".$qrage4d26->num_rows()." , 
                        e: ".$qrage5d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$qrage1d27->num_rows()." , 
                        b: ".$qrage2d27->num_rows()." , 
                        c: ".$qrage3d27->num_rows()." , 
                        d: ".$qrage4d27->num_rows()." , 
                        e: ".$qrage5d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$qrage1d28->num_rows()." , 
                        b: ".$qrage2d28->num_rows()." , 
                        c: ".$qrage3d28->num_rows()." , 
                        d: ".$qrage4d28->num_rows()." , 
                        e: ".$qrage5d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$qrage1d29->num_rows()." , 
                        b: ".$qrage2d29->num_rows()." , 
                        c: ".$qrage3d29->num_rows()." , 
                        d: ".$qrage4d29->num_rows()." , 
                        e: ".$qrage5d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$qrage1d30->num_rows()." , 
                        b: ".$qrage2d30->num_rows()." , 
                        c: ".$qrage3d30->num_rows()." , 
                        d: ".$qrage4d30->num_rows()." , 
                        e: ".$qrage5d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$qrage1d31->num_rows()." , 
                        b: ".$qrage2d31->num_rows()." , 
                        c: ".$qrage3d31->num_rows()." , 
                        d: ".$qrage4d31->num_rows()." , 
                        e: ".$qrage5d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['>18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
<<<<<<< HEAD

});
$('#tab4').ready(function(){
        tab4.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
});
>>>>>>> origin/master
</script>
<!-- end use qr line chart age -->


<!-- start use qr line chart sex -->
<script type="text/javascript">
<<<<<<< HEAD
var tab4;

    $('document').ready(function(){
    tab4 =
=======
$('#c a').click(function() {
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-qr',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$qrsex1d1->num_rows()." , 
                        b: ".$qrsex2d1->num_rows()." , 
                        c: ".$qrsex3d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$qrsex1d2->num_rows()." , 
                        b: ".$qrsex2d2->num_rows()." , 
                        c: ".$qrsex3d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$qrsex1d3->num_rows()." , 
                        b: ".$qrsex2d3->num_rows()." , 
                        c: ".$qrsex3d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$qrsex1d4->num_rows()." , 
                        b: ".$qrsex2d4->num_rows()." , 
                        c: ".$qrsex3d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$qrsex1d5->num_rows()." , 
                        b: ".$qrsex2d5->num_rows()." , 
                        c: ".$qrsex3d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$qrsex1d6->num_rows()." , 
                        b: ".$qrsex2d6->num_rows()." , 
                        c: ".$qrsex3d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$qrsex1d7->num_rows()." , 
                        b: ".$qrsex2d7->num_rows()." , 
                        c: ".$qrsex3d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$qrsex1d8->num_rows()." , 
                        b: ".$qrsex2d8->num_rows()." , 
                        c: ".$qrsex3d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$qrsex1d9->num_rows()." , 
                        b: ".$qrsex2d9->num_rows()." , 
                        c: ".$qrsex3d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$qrsex1d10->num_rows()." , 
                        b: ".$qrsex2d10->num_rows()." , 
                        c: ".$qrsex3d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$qrsex1d11->num_rows()." , 
                        b: ".$qrsex2d11->num_rows()." , 
                        c: ".$qrsex3d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$qrsex1d12->num_rows()." , 
                        b: ".$qrsex2d12->num_rows()." , 
                        c: ".$qrsex3d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$qrsex1d13->num_rows()." , 
                        b: ".$qrsex2d13->num_rows()." , 
                        c: ".$qrsex3d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$qrsex1d14->num_rows()." , 
                        b: ".$qrsex2d14->num_rows()." , 
                        c: ".$qrsex3d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$qrsex1d15->num_rows()." , 
                        b: ".$qrsex2d15->num_rows()." , 
                        c: ".$qrsex3d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$qrsex1d16->num_rows()." , 
                        b: ".$qrsex2d16->num_rows()." , 
                        c: ".$qrsex3d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$qrsex1d17->num_rows()." , 
                        b: ".$qrsex2d17->num_rows()." , 
                        c: ".$qrsex3d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$qrsex1d18->num_rows()." , 
                        b: ".$qrsex2d18->num_rows()." , 
                        c: ".$qrsex3d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$qrsex1d19->num_rows()." , 
                        b: ".$qrsex2d19->num_rows()." , 
                        c: ".$qrsex3d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$qrsex1d20->num_rows()." , 
                        b: ".$qrsex2d20->num_rows()." , 
                        c: ".$qrsex3d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$qrsex1d21->num_rows()." , 
                        b: ".$qrsex2d21->num_rows()." , 
                        c: ".$qrsex3d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$qrsex1d22->num_rows()." , 
                        b: ".$qrsex2d22->num_rows()." , 
                        c: ".$qrsex3d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$qrsex1d23->num_rows()." , 
                        b: ".$qrsex2d23->num_rows()." , 
                        c: ".$qrsex3d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$qrsex1d24->num_rows()." , 
                        b: ".$qrsex2d24->num_rows()." , 
                        c: ".$qrsex3d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$qrsex1d25->num_rows()." , 
                        b: ".$qrsex2d25->num_rows()." , 
                        c: ".$qrsex3d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$qrsex1d26->num_rows()." , 
                        b: ".$qrsex2d26->num_rows()." , 
                        c: ".$qrsex3d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$qrsex1d27->num_rows()." , 
                        b: ".$qrsex2d27->num_rows()." , 
                        c: ".$qrsex3d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$qrsex1d28->num_rows()." , 
                        b: ".$qrsex2d28->num_rows()." , 
                        c: ".$qrsex3d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$qrsex1d29->num_rows()." , 
                        b: ".$qrsex2d29->num_rows()." , 
                        c: ".$qrsex3d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$qrsex1d30->num_rows()." , 
                        b: ".$qrsex2d30->num_rows()." , 
                        c: ".$qrsex3d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$qrsex1d31->num_rows()." , 
                        b: ".$qrsex2d31->num_rows()." , 
                        c: ".$qrsex3d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Male','Female','Unknown'],
        // Disables line smoothing
        colors: ['Red','blue','green'],
        smooth: false,
        resize: true
    });
<<<<<<< HEAD

});

$('#tab4').ready(function(){
        tab4.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
});
>>>>>>> origin/master
</script>
<!-- end use qr line chart sex -->



<!-- start recive and into store line chart age -->
<script type="text/javascript">
<<<<<<< HEAD

var tab3;

    $('document').ready(function(){
    tab3 =
=======
$('#b a').click(function() {
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-rein',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$reinage1d1->num_rows()." , 
                        b: ".$reinage2d1->num_rows()." , 
                        c: ".$reinage3d1->num_rows()." , 
                        d: ".$reinage4d1->num_rows()." , 
                        e: ".$reinage5d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$reinage1d2->num_rows()." , 
                        b: ".$reinage2d2->num_rows()." , 
                        c: ".$reinage3d2->num_rows()." , 
                        d: ".$reinage4d2->num_rows()." , 
                        e: ".$reinage5d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$reinage1d3->num_rows()." , 
                        b: ".$reinage2d3->num_rows()." , 
                        c: ".$reinage3d3->num_rows()." , 
                        d: ".$reinage4d3->num_rows()." , 
                        e: ".$reinage5d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$reinage1d4->num_rows()." , 
                        b: ".$reinage2d4->num_rows()." , 
                        c: ".$reinage3d4->num_rows()." , 
                        d: ".$reinage4d4->num_rows()." , 
                        e: ".$reinage5d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$reinage1d5->num_rows()." , 
                        b: ".$reinage2d5->num_rows()." , 
                        c: ".$reinage3d5->num_rows()." , 
                        d: ".$reinage4d5->num_rows()." , 
                        e: ".$reinage5d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$reinage1d6->num_rows()." , 
                        b: ".$reinage2d6->num_rows()." , 
                        c: ".$reinage3d6->num_rows()." , 
                        d: ".$reinage4d6->num_rows()." , 
                        e: ".$reinage5d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$reinage1d7->num_rows()." , 
                        b: ".$reinage2d7->num_rows()." , 
                        c: ".$reinage3d7->num_rows()." , 
                        d: ".$reinage4d7->num_rows()." , 
                        e: ".$reinage5d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$reinage1d8->num_rows()." , 
                        b: ".$reinage2d8->num_rows()." , 
                        c: ".$reinage3d8->num_rows()." , 
                        d: ".$reinage4d8->num_rows()." , 
                        e: ".$reinage5d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$reinage1d9->num_rows()." , 
                        b: ".$reinage2d9->num_rows()." , 
                        c: ".$reinage3d9->num_rows()." , 
                        d: ".$reinage4d9->num_rows()." , 
                        e: ".$reinage5d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$reinage1d10->num_rows()." , 
                        b: ".$reinage2d10->num_rows()." , 
                        c: ".$reinage3d10->num_rows()." , 
                        d: ".$reinage4d10->num_rows()." , 
                        e: ".$reinage5d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$reinage1d11->num_rows()." , 
                        b: ".$reinage2d11->num_rows()." , 
                        c: ".$reinage3d11->num_rows()." , 
                        d: ".$reinage4d11->num_rows()." , 
                        e: ".$reinage5d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$reinage1d12->num_rows()." , 
                        b: ".$reinage2d12->num_rows()." , 
                        c: ".$reinage3d12->num_rows()." , 
                        d: ".$reinage4d12->num_rows()." , 
                        e: ".$reinage5d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$reinage1d13->num_rows()." , 
                        b: ".$reinage2d13->num_rows()." , 
                        c: ".$reinage3d13->num_rows()." , 
                        d: ".$reinage4d13->num_rows()." , 
                        e: ".$reinage5d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$reinage1d14->num_rows()." , 
                        b: ".$reinage2d14->num_rows()." , 
                        c: ".$reinage3d14->num_rows()." , 
                        d: ".$reinage4d14->num_rows()." , 
                        e: ".$reinage5d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$reinage1d15->num_rows()." , 
                        b: ".$reinage2d15->num_rows()." , 
                        c: ".$reinage3d15->num_rows()." , 
                        d: ".$reinage4d15->num_rows()." , 
                        e: ".$reinage5d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$reinage1d16->num_rows()." , 
                        b: ".$reinage2d16->num_rows()." , 
                        c: ".$reinage3d16->num_rows()." , 
                        d: ".$reinage4d16->num_rows()." , 
                        e: ".$reinage5d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$reinage1d17->num_rows()." , 
                        b: ".$reinage2d17->num_rows()." , 
                        c: ".$reinage3d17->num_rows()." , 
                        d: ".$reinage4d17->num_rows()." , 
                        e: ".$reinage5d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$reinage1d18->num_rows()." , 
                        b: ".$reinage2d18->num_rows()." , 
                        c: ".$reinage3d18->num_rows()." , 
                        d: ".$reinage4d18->num_rows()." , 
                        e: ".$reinage5d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$reinage1d19->num_rows()." , 
                        b: ".$reinage2d19->num_rows()." , 
                        c: ".$reinage3d19->num_rows()." , 
                        d: ".$reinage4d19->num_rows()." , 
                        e: ".$reinage5d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$reinage1d20->num_rows()." , 
                        b: ".$reinage2d20->num_rows()." , 
                        c: ".$reinage3d20->num_rows()." , 
                        d: ".$reinage4d20->num_rows()." , 
                        e: ".$reinage5d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$reinage1d21->num_rows()." , 
                        b: ".$reinage2d21->num_rows()." , 
                        c: ".$reinage3d21->num_rows()." , 
                        d: ".$reinage4d21->num_rows()." , 
                        e: ".$reinage5d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$reinage1d22->num_rows()." , 
                        b: ".$reinage2d22->num_rows()." , 
                        c: ".$reinage3d22->num_rows()." , 
                        d: ".$reinage4d22->num_rows()." , 
                        e: ".$reinage5d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$reinage1d23->num_rows()." , 
                        b: ".$reinage2d23->num_rows()." , 
                        c: ".$reinage3d23->num_rows()." , 
                        d: ".$reinage4d23->num_rows()." , 
                        e: ".$reinage5d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$reinage1d24->num_rows()." , 
                        b: ".$reinage2d24->num_rows()." , 
                        c: ".$reinage3d24->num_rows()." , 
                        d: ".$reinage4d24->num_rows()." , 
                        e: ".$reinage5d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$reinage1d25->num_rows()." , 
                        b: ".$reinage2d25->num_rows()." , 
                        c: ".$reinage3d25->num_rows()." , 
                        d: ".$reinage4d25->num_rows()." , 
                        e: ".$reinage5d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$reinage1d26->num_rows()." , 
                        b: ".$reinage2d26->num_rows()." , 
                        c: ".$reinage3d26->num_rows()." , 
                        d: ".$reinage4d26->num_rows()." , 
                        e: ".$reinage5d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$reinage1d27->num_rows()." , 
                        b: ".$reinage2d27->num_rows()." , 
                        c: ".$reinage3d27->num_rows()." , 
                        d: ".$reinage4d27->num_rows()." , 
                        e: ".$reinage5d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$reinage1d28->num_rows()." , 
                        b: ".$reinage2d28->num_rows()." , 
                        c: ".$reinage3d28->num_rows()." , 
                        d: ".$reinage4d28->num_rows()." , 
                        e: ".$reinage5d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$reinage1d29->num_rows()." , 
                        b: ".$reinage2d29->num_rows()." , 
                        c: ".$reinage3d29->num_rows()." , 
                        d: ".$reinage4d29->num_rows()." , 
                        e: ".$reinage5d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$reinage1d30->num_rows()." , 
                        b: ".$reinage2d30->num_rows()." , 
                        c: ".$reinage3d30->num_rows()." , 
                        d: ".$reinage4d30->num_rows()." , 
                        e: ".$reinage5d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$reinage1d31->num_rows()." , 
                        b: ".$reinage2d31->num_rows()." , 
                        c: ".$reinage3d31->num_rows()." , 
                        d: ".$reinage4d31->num_rows()." , 
                        e: ".$reinage5d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['>18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
});
<<<<<<< HEAD
$('#tab3').ready(function(){
        tab3.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
>>>>>>> origin/master
</script>
<!-- end recive and into store line chart age -->


<!-- start recive and into store line chart sex -->
<script type="text/javascript">
<<<<<<< HEAD
var tab3;

    $('document').ready(function(){
    tab3 =
=======
$('#b a').click(function() {
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-rein',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$reinsex1d1->num_rows()." , 
                        b: ".$reinsex2d1->num_rows()." , 
                        c: ".$reinsex3d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$reinsex1d2->num_rows()." , 
                        b: ".$reinsex2d2->num_rows()." , 
                        c: ".$reinsex3d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$reinsex1d3->num_rows()." , 
                        b: ".$reinsex2d3->num_rows()." , 
                        c: ".$reinsex3d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$reinsex1d4->num_rows()." , 
                        b: ".$reinsex2d4->num_rows()." , 
                        c: ".$reinsex3d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$reinsex1d5->num_rows()." , 
                        b: ".$reinsex2d5->num_rows()." , 
                        c: ".$reinsex3d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$reinsex1d6->num_rows()." , 
                        b: ".$reinsex2d6->num_rows()." , 
                        c: ".$reinsex3d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$reinsex1d7->num_rows()." , 
                        b: ".$reinsex2d7->num_rows()." , 
                        c: ".$reinsex3d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$reinsex1d8->num_rows()." , 
                        b: ".$reinsex2d8->num_rows()." , 
                        c: ".$reinsex3d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$reinsex1d9->num_rows()." , 
                        b: ".$reinsex2d9->num_rows()." , 
                        c: ".$reinsex3d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$reinsex1d10->num_rows()." , 
                        b: ".$reinsex2d10->num_rows()." , 
                        c: ".$reinsex3d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$reinsex1d11->num_rows()." , 
                        b: ".$reinsex2d11->num_rows()." , 
                        c: ".$reinsex3d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$reinsex1d12->num_rows()." , 
                        b: ".$reinsex2d12->num_rows()." , 
                        c: ".$reinsex3d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$reinsex1d13->num_rows()." , 
                        b: ".$reinsex2d13->num_rows()." , 
                        c: ".$reinsex3d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$reinsex1d14->num_rows()." , 
                        b: ".$reinsex2d14->num_rows()." , 
                        c: ".$reinsex3d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$reinsex1d15->num_rows()." , 
                        b: ".$reinsex2d15->num_rows()." , 
                        c: ".$reinsex3d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$reinsex1d16->num_rows()." , 
                        b: ".$reinsex2d16->num_rows()." , 
                        c: ".$reinsex3d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$reinsex1d17->num_rows()." , 
                        b: ".$reinsex2d17->num_rows()." , 
                        c: ".$reinsex3d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$reinsex1d18->num_rows()." , 
                        b: ".$reinsex2d18->num_rows()." , 
                        c: ".$reinsex3d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$reinsex1d19->num_rows()." , 
                        b: ".$reinsex2d19->num_rows()." , 
                        c: ".$reinsex3d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$reinsex1d20->num_rows()." , 
                        b: ".$reinsex2d20->num_rows()." , 
                        c: ".$reinsex3d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$reinsex1d21->num_rows()." , 
                        b: ".$reinsex2d21->num_rows()." , 
                        c: ".$reinsex3d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$reinsex1d22->num_rows()." , 
                        b: ".$reinsex2d22->num_rows()." , 
                        c: ".$reinsex3d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$reinsex1d23->num_rows()." , 
                        b: ".$reinsex2d23->num_rows()." , 
                        c: ".$reinsex3d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$reinsex1d24->num_rows()." , 
                        b: ".$reinsex2d24->num_rows()." , 
                        c: ".$reinsex3d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$reinsex1d25->num_rows()." , 
                        b: ".$reinsex2d25->num_rows()." , 
                        c: ".$reinsex3d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$reinsex1d26->num_rows()." , 
                        b: ".$reinsex2d26->num_rows()." , 
                        c: ".$reinsex3d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$reinsex1d27->num_rows()." , 
                        b: ".$reinsex2d27->num_rows()." , 
                        c: ".$reinsex3d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$reinsex1d28->num_rows()." , 
                        b: ".$reinsex2d28->num_rows()." , 
                        c: ".$reinsex3d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$reinsex1d29->num_rows()." , 
                        b: ".$reinsex2d29->num_rows()." , 
                        c: ".$reinsex3d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$reinsex1d30->num_rows()." , 
                        b: ".$reinsex2d30->num_rows()." , 
                        c: ".$reinsex3d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$reinsex1d31->num_rows()." , 
                        b: ".$reinsex2d31->num_rows()." , 
                        c: ".$reinsex3d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Male','Female','Unknown'],
        // Disables line smoothing
        colors: ['Red','blue','green'],
        smooth: false,
        resize: true
    });
});
<<<<<<< HEAD
$('#tab3').ready(function(){
        tab3.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
>>>>>>> origin/master
</script>
<!-- end recive and into store line chart sex -->



<!-- start recive promotion line chart age -->
<script type="text/javascript">
<<<<<<< HEAD
var tab2;

    $('document').ready(function(){
    tab2 =
=======
$('#a a').click(function() {

>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-re',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$reage1d1->num_rows()." , 
                        b: ".$reage2d1->num_rows()." , 
                        c: ".$reage3d1->num_rows()." , 
                        d: ".$reage4d1->num_rows()." , 
                        e: ".$reage5d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$reage1d2->num_rows()." , 
                        b: ".$reage2d2->num_rows()." , 
                        c: ".$reage3d2->num_rows()." , 
                        d: ".$reage4d2->num_rows()." , 
                        e: ".$reage5d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$reage1d3->num_rows()." , 
                        b: ".$reage2d3->num_rows()." , 
                        c: ".$reage3d3->num_rows()." , 
                        d: ".$reage4d3->num_rows()." , 
                        e: ".$reage5d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$reage1d4->num_rows()." , 
                        b: ".$reage2d4->num_rows()." , 
                        c: ".$reage3d4->num_rows()." , 
                        d: ".$reage4d4->num_rows()." , 
                        e: ".$reage5d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$reage1d5->num_rows()." , 
                        b: ".$reage2d5->num_rows()." , 
                        c: ".$reage3d5->num_rows()." , 
                        d: ".$reage4d5->num_rows()." , 
                        e: ".$reage5d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$reage1d6->num_rows()." , 
                        b: ".$reage2d6->num_rows()." , 
                        c: ".$reage3d6->num_rows()." , 
                        d: ".$reage4d6->num_rows()." , 
                        e: ".$reage5d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$reage1d7->num_rows()." , 
                        b: ".$reage2d7->num_rows()." , 
                        c: ".$reage3d7->num_rows()." , 
                        d: ".$reage4d7->num_rows()." , 
                        e: ".$reage5d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$reage1d8->num_rows()." , 
                        b: ".$reage2d8->num_rows()." , 
                        c: ".$reage3d8->num_rows()." , 
                        d: ".$reage4d8->num_rows()." , 
                        e: ".$reage5d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$reage1d9->num_rows()." , 
                        b: ".$reage2d9->num_rows()." , 
                        c: ".$reage3d9->num_rows()." , 
                        d: ".$reage4d9->num_rows()." , 
                        e: ".$reage5d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$reage1d10->num_rows()." , 
                        b: ".$reage2d10->num_rows()." , 
                        c: ".$reage3d10->num_rows()." , 
                        d: ".$reage4d10->num_rows()." , 
                        e: ".$reage5d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$reage1d11->num_rows()." , 
                        b: ".$reage2d11->num_rows()." , 
                        c: ".$reage3d11->num_rows()." , 
                        d: ".$reage4d11->num_rows()." , 
                        e: ".$reage5d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$reage1d12->num_rows()." , 
                        b: ".$reage2d12->num_rows()." , 
                        c: ".$reage3d12->num_rows()." , 
                        d: ".$reage4d12->num_rows()." , 
                        e: ".$reage5d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$reage1d13->num_rows()." , 
                        b: ".$reage2d13->num_rows()." , 
                        c: ".$reage3d13->num_rows()." , 
                        d: ".$reage4d13->num_rows()." , 
                        e: ".$reage5d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$reage1d14->num_rows()." , 
                        b: ".$reage2d14->num_rows()." , 
                        c: ".$reage3d14->num_rows()." , 
                        d: ".$reage4d14->num_rows()." , 
                        e: ".$reage5d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$reage1d15->num_rows()." , 
                        b: ".$reage2d15->num_rows()." , 
                        c: ".$reage3d15->num_rows()." , 
                        d: ".$reage4d15->num_rows()." , 
                        e: ".$reage5d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$reage1d16->num_rows()." , 
                        b: ".$reage2d16->num_rows()." , 
                        c: ".$reage3d16->num_rows()." , 
                        d: ".$reage4d16->num_rows()." , 
                        e: ".$reage5d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$reage1d17->num_rows()." , 
                        b: ".$reage2d17->num_rows()." , 
                        c: ".$reage3d17->num_rows()." , 
                        d: ".$reage4d17->num_rows()." , 
                        e: ".$reage5d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$reage1d18->num_rows()." , 
                        b: ".$reage2d18->num_rows()." , 
                        c: ".$reage3d18->num_rows()." , 
                        d: ".$reage4d18->num_rows()." , 
                        e: ".$reage5d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$reage1d19->num_rows()." , 
                        b: ".$reage2d19->num_rows()." , 
                        c: ".$reage3d19->num_rows()." , 
                        d: ".$reage4d19->num_rows()." , 
                        e: ".$reage5d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$reage1d20->num_rows()." , 
                        b: ".$reage2d20->num_rows()." , 
                        c: ".$reage3d20->num_rows()." , 
                        d: ".$reage4d20->num_rows()." , 
                        e: ".$reage5d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$reage1d21->num_rows()." , 
                        b: ".$reage2d21->num_rows()." , 
                        c: ".$reage3d21->num_rows()." , 
                        d: ".$reage4d21->num_rows()." , 
                        e: ".$reage5d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$reage1d22->num_rows()." , 
                        b: ".$reage2d22->num_rows()." , 
                        c: ".$reage3d22->num_rows()." , 
                        d: ".$reage4d22->num_rows()." , 
                        e: ".$reage5d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$reage1d23->num_rows()." , 
                        b: ".$reage2d23->num_rows()." , 
                        c: ".$reage3d23->num_rows()." , 
                        d: ".$reage4d23->num_rows()." , 
                        e: ".$reage5d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$reage1d24->num_rows()." , 
                        b: ".$reage2d24->num_rows()." , 
                        c: ".$reage3d24->num_rows()." , 
                        d: ".$reage4d24->num_rows()." , 
                        e: ".$reage5d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$reage1d25->num_rows()." , 
                        b: ".$reage2d25->num_rows()." , 
                        c: ".$reage3d25->num_rows()." , 
                        d: ".$reage4d25->num_rows()." , 
                        e: ".$reage5d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$reage1d26->num_rows()." , 
                        b: ".$reage2d26->num_rows()." , 
                        c: ".$reage3d26->num_rows()." , 
                        d: ".$reage4d26->num_rows()." , 
                        e: ".$reage5d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$reage1d27->num_rows()." , 
                        b: ".$reage2d27->num_rows()." , 
                        c: ".$reage3d27->num_rows()." , 
                        d: ".$reage4d27->num_rows()." , 
                        e: ".$reage5d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$reage1d28->num_rows()." , 
                        b: ".$reage2d28->num_rows()." , 
                        c: ".$reage3d28->num_rows()." , 
                        d: ".$reage4d28->num_rows()." , 
                        e: ".$reage5d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$reage1d29->num_rows()." , 
                        b: ".$reage2d29->num_rows()." , 
                        c: ".$reage3d29->num_rows()." , 
                        d: ".$reage4d29->num_rows()." , 
                        e: ".$reage5d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$reage1d30->num_rows()." , 
                        b: ".$reage2d30->num_rows()." , 
                        c: ".$reage3d30->num_rows()." , 
                        d: ".$reage4d30->num_rows()." , 
                        e: ".$reage5d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$reage1d31->num_rows()." , 
                        b: ".$reage2d31->num_rows()." , 
                        c: ".$reage3d31->num_rows()." , 
                        d: ".$reage4d31->num_rows()." , 
                        e: ".$reage5d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['>18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
});
<<<<<<< HEAD
$('#tab2').ready(function(){
        tab2.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
>>>>>>> origin/master
</script>
<!-- end recive promotion line chart age -->


<!-- start recive promotion line chart sex -->
<script type="text/javascript">
<<<<<<< HEAD
var tab2;

    $('document').ready(function(){
    tab2 =
=======
$('#a a').click(function() {
    
>>>>>>> origin/master
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-re',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                if ($day >= 1) {
                    echo "{da: '".$year."-".$month."-01',";
                    echo "a: ".$resex1d1->num_rows()." , 
                        b: ".$resex2d1->num_rows()." , 
                        c: ".$resex3d1->num_rows()." },";
                };
            ?>
            
         
            <?php 
                if ($day >= 2) {
                    echo "{da: '".$year."-".$month."-02',";
                    echo "a: ".$resex1d2->num_rows()." , 
                        b: ".$resex2d2->num_rows()." , 
                        c: ".$resex3d2->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 3) {
                    echo "{da: '".$year."-".$month."-03',";
                    echo "a: ".$resex1d3->num_rows()." , 
                        b: ".$resex2d3->num_rows()." , 
                        c: ".$resex3d3->num_rows()." },";
                };
            ?>
        
         
            <?php 
                if ($day >= 4) {
                    echo "{da: '".$year."-".$month."-04',";
                    echo "a: ".$resex1d4->num_rows()." , 
                        b: ".$resex2d4->num_rows()." , 
                        c: ".$resex3d4->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 5) {
                    echo "{da: '".$year."-".$month."-05',";
                    echo "a: ".$resex1d5->num_rows()." , 
                        b: ".$resex2d5->num_rows()." , 
                        c: ".$resex3d5->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 6) {
                    echo "{da: '".$year."-".$month."-06',";
                    echo "a: ".$resex1d6->num_rows()." , 
                        b: ".$resex2d6->num_rows()." , 
                        c: ".$resex3d6->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 7) {
                    echo "{da: '".$year."-".$month."-07',";
                    echo "a: ".$resex1d7->num_rows()." , 
                        b: ".$resex2d7->num_rows()." , 
                        c: ".$resex3d7->num_rows()." }, ";
                };
            ?>
        
       
            <?php 
                if ($day >= 8) {
                    echo " {da: '".$year."-".$month."-08',";
                    echo "a: ".$resex1d8->num_rows()." , 
                        b: ".$resex2d8->num_rows()." , 
                        c: ".$resex3d8->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 9) {
                    echo "{da: '".$year."-".$month."-09',";
                    echo "a: ".$resex1d9->num_rows()." , 
                        b: ".$resex2d9->num_rows()." , 
                        c: ".$resex3d9->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 10) {
                    echo " {da: '".$year."-".$month."-10',";
                    echo "a: ".$resex1d10->num_rows()." , 
                        b: ".$resex2d10->num_rows()." , 
                        c: ".$resex3d10->num_rows()." }, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 11) {
                    echo " {da: '".$year."-".$month."-11',";
                    echo "a: ".$resex1d11->num_rows()." , 
                        b: ".$resex2d11->num_rows()." , 
                        c: ".$resex3d11->num_rows()." },";
                };
            ?>
        
        
            <?php 
                if ($day >= 12) {
                    echo "{da: '".$year."-".$month."-12',";
                    echo "a: ".$resex1d12->num_rows()." , 
                        b: ".$resex2d12->num_rows()." , 
                        c: ".$resex3d12->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 13) {
                    echo "{da: '".$year."-".$month."-13',";
                    echo "a: ".$resex1d13->num_rows()." , 
                        b: ".$resex2d13->num_rows()." , 
                        c: ".$resex3d13->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 14) {
                    echo "{da: '".$year."-".$month."-14',";
                    echo "a: ".$resex1d14->num_rows()." , 
                        b: ".$resex2d14->num_rows()." , 
                        c: ".$resex3d14->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 15) {
                    echo "{da: '".$year."-".$month."-15',";
                    echo "a: ".$resex1d15->num_rows()." , 
                        b: ".$resex2d15->num_rows()." , 
                        c: ".$resex3d15->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 16) {
                    echo "{da: '".$year."-".$month."-16',";
                    echo "a: ".$resex1d16->num_rows()." , 
                        b: ".$resex2d16->num_rows()." , 
                        c: ".$resex3d16->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 17) {
                    echo "{da: '".$year."-".$month."-17',";
                    echo "a: ".$resex1d17->num_rows()." , 
                        b: ".$resex2d17->num_rows()." , 
                        c: ".$resex3d17->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 18) {
                    echo "{da: '".$year."-".$month."-18',";
                    echo "a: ".$resex1d18->num_rows()." , 
                        b: ".$resex2d18->num_rows()." , 
                        c: ".$resex3d18->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 19) {
                    echo "{da: '".$year."-".$month."-19',";
                    echo "a: ".$resex1d19->num_rows()." , 
                        b: ".$resex2d19->num_rows()." , 
                        c: ".$resex3d19->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 20) {
                    echo "{da: '".$year."-".$month."-20',";
                    echo "a: ".$resex1d20->num_rows()." , 
                        b: ".$resex2d20->num_rows()." , 
                        c: ".$resex3d20->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 21) {
                    echo "{da: '".$year."-".$month."-21',";
                    echo "a: ".$resex1d21->num_rows()." , 
                        b: ".$resex2d21->num_rows()." , 
                        c: ".$resex3d21->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 22) {
                    echo "{da: '".$year."-".$month."-22',";
                    echo "a: ".$resex1d22->num_rows()." , 
                        b: ".$resex2d22->num_rows()." , 
                        c: ".$resex3d22->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 23) {
                    echo "{da: '".$year."-".$month."-23',";
                    echo "a: ".$resex1d23->num_rows()." , 
                        b: ".$resex2d23->num_rows()." , 
                        c: ".$resex3d23->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 24) {
                    echo "{da: '".$year."-".$month."-24',";
                    echo "a: ".$resex1d24->num_rows()." , 
                        b: ".$resex2d24->num_rows()." , 
                        c: ".$resex3d24->num_rows()." },";
                };
            ?>
         
        
            <?php 
                if ($day >= 25) {
                    echo "{da: '".$year."-".$month."-25',";
                    echo "a: ".$resex1d25->num_rows()." , 
                        b: ".$resex2d25->num_rows()." , 
                        c: ".$resex3d25->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 26) {
                    echo "{da: '".$year."-".$month."-26',";
                    echo "a: ".$resex1d26->num_rows()." , 
                        b: ".$resex2d26->num_rows()." , 
                        c: ".$resex3d26->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 27) {
                    echo "{da: '".$year."-".$month."-27',";
                    echo "a: ".$resex1d27->num_rows()." , 
                        b: ".$resex2d27->num_rows()." , 
                        c: ".$resex3d27->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 28) {
                    echo "{da: '".$year."-".$month."-28',";
                    echo "a: ".$resex1d28->num_rows()." , 
                        b: ".$resex2d28->num_rows()." , 
                        c: ".$resex3d28->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 29) {
                    echo "{da: '".$year."-".$month."-29',";
                    echo "a: ".$resex1d29->num_rows()." , 
                        b: ".$resex2d29->num_rows()." , 
                        c: ".$resex3d29->num_rows()."}, ";
                };
            ?>
        
        
            <?php 
                if ($day >= 30) {
                    echo "{da: '".$year."-".$month."-30',";
                    echo "a: ".$resex1d30->num_rows()." , 
                        b: ".$resex2d30->num_rows()." , 
                        c: ".$resex3d30->num_rows()."},";
                };
            ?>
         
        
            <?php 
                if ($day >= 31) {
                    echo "{da: '".$year."-".$month."-31',";
                    echo "a: ".$resex1d31->num_rows()." , 
                        b: ".$resex2d31->num_rows()." , 
                        c: ".$resex3d31->num_rows()."}";
                };
            ?>
        

         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Male','Female','Unknown'],
        // Disables line smoothing
        colors: ['Red','blue','green'],
        smooth: false,
        resize: true
    });
});
<<<<<<< HEAD
$('#tab2').click(function(){
        tab2.redraw();
        $('#morris-line-chart-age-qrag svg').css('width','100%');
    });
=======
>>>>>>> origin/master
</script>
<!-- end recive promotion line chart sex -->





</body>

</html>
