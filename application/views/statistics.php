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
    <link href="<?=base_url()?>assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

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
                        <li >
                            <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageuser">Manage User</a>
                                </li>
                                <li >
                                    <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managesensoro">Manage Beacon</a>
                                </li>
                            </ul>
                        </li>
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

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3><?php
                                $numStore = $store->num_rows();
                                echo $numStore;?></h3>
                                <p>Store</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          
                      </div>
                  </div><!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3><?php
                            $numSen = $sensoro->num_rows();
                            echo $numSen;?></h3>
                            <p>Beacon</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-bullseye"></i>
                      </div>
                      
                  </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php
                        $numUser = $user->num_rows();
                        echo $numUser;?></h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person"></i>
                  </div>
                  
              </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php
                    $numOwn = $owner->num_rows();
                    echo $numOwn;?></h3>
                    <p>Store Owners</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
              </div>
              
          </div>
      </div><!-- ./col -->
  </div>

                    

                    <!-- Flot Charts -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h2 class="page-header">All Chart in </h2></div>
                            <div class="dropdown col-lg-6">
                                <?php echo form_open()?>

                                <select onchange="this.form.action='<?php echo site_url('statistics')?>/'+this.value;this.form.submit()" class="form-control" style="width : 100px;background-color : #286090;color:#fff;" >
                                    <option hidden><?php echo $year; ?></option>
                                    <option value="">2015</option>
                                    <option value="ye14">2014</option>
                                </select>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                        <!-- /.row user line graph -->
                        <div class="col-lg-12" >
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> User Graph </h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-line-chart-user"></div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- /.row owner line graph-->
                        <div class="col-lg-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="background-color : #337ab7; border-color: #337ab7;">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Owner Graph </h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-line-chart-owner"></div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- /.row sensoro line graph -->
                        <div class="col-lg-12" >
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Beacon Graph </h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-line-chart-sen"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row" style="display:none;">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Line Graph Example with Tooltips</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- /.row -->
                        <div class="row" style=" margin-top: 40px;">
                            <div class="col-lg-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Package Chart </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-pie-chart-package"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Package Chart</h4>
                                    <div class="table-responsive">
                                        <style>
                                            table.table1 th{
                                            background-color: #5EB85E;
                                            text-align: center;
                                            color: #ffffff;
                                            }
                                            table.table1 td{    
                                            text-align: center;
                                            }
                                        </style>
                                        <table class="table table-bordered table-hover table1">
                                            <thead>
                                                <tr>
                                                    <th>Normal Package</th>
                                                    <th>Gold Package</th>
                                                    <th>Silver Package</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php $pa1 = $pack1->num_rows(); echo $pa1; ?></td>
                                                    <td><?php $pa2 = $pack2->num_rows(); echo $pa2; ?></td>
                                                    <td><?php $pa3 = $pack3->num_rows(); echo $pa3; ?></td>
                                                    <td><?php $pa = $pa1+$pa2+$pa3; echo $pa; ?></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                 
                            </div>

                    </div>
                    <!-- /.row .........................-->

                    
                    <div><br></div>
                    <center><div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/Telekhong</li>
                                <li> KingMongkutt's University of technology thonburi</li>
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
        <!-- <script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script> -->



        <!-- user line graph -->
        <!-- start -->
        <script type="text/javascript">
            var months = ["January", "Febuary", "March", "Apirl", "May", "June", "July", "August", "September", "October", "November", "December"];
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-user',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
        // month 1
        <?php
        
        $yy = date("Y");
        if ($year == $yy) {
            $z = date("n");
        }else{
            $z = 12;
        }

        
        if ($z >= 1) {
            echo "{
                M: '".$year."-01',
                visits: ";
                echo $user1->num_rows();
                echo "}, ";
            };?> 

        // month 2
        <?php
        if ($z >= 2) {
            echo "{
                M: '".$year."-02',
                visits: ";
                $numUser = $user2->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 3
        <?php
        if ($z >= 3) {
            echo "{
                M: '".$year."-03',
                visits: ";
                $numUser = $user3->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 4
        <?php
        if ($z >= 4) {
            echo "{
                M: '".$year."-04',
                visits: ";
                $numUser = $user4->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 5
        <?php
        if ($z >= 5) {
            echo "{
                M: '".$year."-05',
                visits: ";
                $numUser = $user5->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 6
        <?php
        if ($z >= 6) {
            echo "{
                M: '".$year."-06',
                visits: ";
                $numUser = $user6->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 7
        <?php
        if ($z >= 7) {
            echo "{
                M: '".$year."-07',
                visits: ";
                $numUser = $user7->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 8
        <?php
        if ($z >= 8) {
            echo "{
                M: '".$year."-08',
                visits: ";
                $numUser = $user8->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 9
        <?php
        if ($z >= 9) {
            echo "{
                M: '".$year."-09',
                visits: ";
                $numUser = $user9->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 10
        <?php
        if ($z >= 10) {
            echo "{
                M: '".$year."-10',
                visits: ";
                $numUser = $user10->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 11
        <?php
        if ($z >= 11) {
            echo "{
                M: '".$year."-11',
                visits: ";
                $numUser = $user11->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        // month 12
        <?php
        if ($z >= 12) {
            echo "{
                M: '".$year."-12',
                visits: ";
                $numUser = $user12->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        //end of value 12 month
        ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'M',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<?php echo $year ?>'],

        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
            var month = months[x.getMonth()];
            return month;
        },
        // Disables line smoothing
        smooth: false,
        resize: true
    });
</script>
<!-- end user line graph -->


<!-- owner line graph -->
<!-- start -->
<script type="text/javascript">
    var months = ["January", "Febuary", "March", "Apirl", "May", "June", "July", "August", "September", "October", "November", "December"];
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-owner',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
        // month 1
        <?php
        
        $yy = date("Y");
        if ($year == $yy) {
            $z = date("n");
        }else{
            $z = 12;
        }
        //month1
        if ($z >= 1) {
            echo "{
                M: '".$year."-01',
                visits: ";
                echo $owner1->num_rows();
                echo "}, ";
            };?> 

        // month 2
        <?php
        if ($z >= 2) {
            echo "{
                M: '".$year."-02',
                visits: ";
                $numUser = $owner2->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 3
        <?php
        if ($z >= 3) {
            echo "{
                M: '".$year."-03',
                visits: ";
                $numUser = $owner3->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 4
        <?php
        if ($z >= 4) {
            echo "{
                M: '".$year."-04',
                visits: ";
                $numUser = $owner4->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 5
        <?php
        if ($z >= 5) {
            echo "{
                M: '".$year."-05',
                visits: ";
                $numUser = $owner5->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 6
        <?php
        if ($z >= 6) {
            echo "{
                M: '".$year."-06',
                visits: ";
                $numUser = $owner6->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 7
        <?php
        if ($z >= 7) {
            echo "{
                M: '".$year."-07',
                visits: ";
                $numUser = $owner7->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 8
        <?php
        if ($z >= 8) {
            echo "{
                M: '".$year."-08',
                visits: ";
                $numUser = $owner8->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 9
        <?php
        if ($z >= 9) {
            echo "{
                M: '".$year."-09',
                visits: ";
                $numUser = $owner9->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 10
        <?php
        if ($z >= 10) {
            echo "{
                M: '".$year."-10',
                visits: ";
                $numUser = $owner10->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 11
        <?php
        if ($z >= 11) {
            echo "{
                M: '".$year."-11',
                visits: ";
                $numUser = $owner11->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        // month 12
        <?php
        if ($z >= 12) {
            echo "{
                M: '".$year."-12',
                visits: ";
                $numUser = $owner12->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        //end of value 12 month
        ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'M',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<?php echo $year ?>'],

        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
            var month = months[x.getMonth()];
            return month;
        },
        // Disables line smoothing
        smooth: false,
        resize: true
    });
</script>
<!-- end owner line graph -->

<!-- sensoro line graph -->
<!-- start -->
<script type="text/javascript">
    var months = ["January", "Febuary", "March", "Apirl", "May", "June", "July", "August", "September", "October", "November", "December"];
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sen',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
        // month 1
        <?php
        
        $yy = date("Y");
        if ($year == $yy) {
            $z = date("n");
        }else{
            $z = 12;
        }
        //month1
        if ($z >= 1) {
            echo "{
                M: '".$year."-01',
                visits: ";
                echo $sen1->num_rows();
                echo "}, ";
            };?> 

        // month 2
        <?php
        if ($z >= 2) {
            echo "{
                M: '".$year."-02',
                visits: ";
                $numUser = $sen2->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 3
        <?php
        if ($z >= 3) {
            echo "{
                M: '".$year."-03',
                visits: ";
                $numUser = $sen3->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 4
        <?php
        if ($z >= 4) {
            echo "{
                M: '".$year."-04',
                visits: ";
                $numUser = $sen4->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 5
        <?php
        if ($z >= 5) {
            echo "{
                M: '".$year."-05',
                visits: ";
                $numUser = $sen5->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 6
        <?php
        if ($z >= 6) {
            echo "{
                M: '".$year."-06',
                visits: ";
                $numUser = $sen6->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 7
        <?php
        if ($z >= 7) {
            echo "{
                M: '".$year."-07',
                visits: ";
                $numUser = $sen7->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 8
        <?php
        if ($z >= 8) {
            echo "{
                M: '".$year."-08',
                visits: ";
                $numUser = $sen8->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 

        // month 9
        <?php
        if ($z >= 9) {
            echo "{
                M: '".$year."-09',
                visits: ";
                $numUser = $sen9->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 10
        <?php
        if ($z >= 10) {
            echo "{
                M: '".$year."-10',
                visits: ";
                $numUser = $sen10->num_rows();
                echo $numUser;
                echo "}, ";
            };?> 
        // month 11
        <?php
        if ($z >= 11) {
            echo "{
                M: '".$year."-11',
                visits: ";
                $numUser = $sen11->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        // month 12
        <?php
        if ($z >= 12) {
            echo "{
                M: '".$year."-12',
                visits: ";
                $numUser = $sen12->num_rows();
                echo $numUser;
                echo "}, ";
            };?>
        //end of value 12 month
        ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'M',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<?php echo $year ?>'],

        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
            var month = months[x.getMonth()];
            return month;
        },
        // Disables line smoothing
        smooth: false,
        resize: true
    });
</script>
<!-- end sensoro line graph -->


<!-- pie chart package -->
<!-- start -->
<script type="text/javascript">
    // Flot Pie Chart with Tooltips
    $(function() {

        var data = [{
            label: "Normal Package",
            <?php
            echo "data: ";
            echo $pack1->num_rows();
            ?>
        }, {
            label: "Silver Package",
            <?php
            echo "data: ";
            echo $pack2->num_rows();
            ?>
        }, {
            label: "Gold Package",
            <?php
            echo "data: ";
            echo $pack3->num_rows();
            ?>
        }];

        var plotObj = $.plot($("#flot-pie-chart-package"), data, {
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
</body>

</html>
