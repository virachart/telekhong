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
    <link href="<?=base_url()?>assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?=base_url()?>assets/font-awesome/css/plugins/morris.css" rel="stylesheet" type="text/css">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?php session_name()?></strong>
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
                                            <h5 class="media-heading"><strong><?php session_name()?></strong>
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
                                            <h5 class="media-heading"><strong><?php session_name()?></strong>
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
                        <li class="active">
                            <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        
                        <li>
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
                                DashBoard
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3><?php
                                $numuser = $user->num_rows();
                                echo $numuser;?></h3>
                                <p>User</p>
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
                                $numowner = $owner->num_rows();
                                echo $numowner;?></h3>
                            <p>Owner</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                      </div>
                      
                  </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php
                            $numStore = $store->num_rows();
                            echo $numStore;?></h3>
                        <p>Store</p>
                    </div>
                    <div class="icon">
                      <i class="glyphicon glyphicon-ok-circle"></i>
                  </div>
                  
              </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php
                    $numsen12 = $sen12->num_rows();
                    echo $numsen12;?></h3>
                    <p>Beacon In Stock</p>
                </div>
                <div class="icon" style="margin-top: 25 px">
                  <i class="glyphicon glyphicon-exclamation-sign"></i>
              </div>
              
          </div>
      </div><!-- ./col -->
  </div>

<div class="row">
    <?php
        function check_port($port) {
            $conn = @fsockopen("10.4.43.99", $port, $errno, $errstr, 0.2);
            if ($conn) {
            fclose($conn);
            return true;
            }
        }

        function server_report() {
            $report = array();
            $svcs = array(
            '22'=>'SSH',
            '80'=>'HTTP',
            '3306'=>'MySQL');
            foreach ($svcs as $port=>$service) {
            $report[$service] = check_port($port);
            }
            return $report;
        }

        $report = server_report();
    ?>


    <table width="15%">
        <tr bgcolor="pink">
        <td><b>Service</b></td>
        <td><b>Status</b></td>
        </tr>
        
        <tr>
        <td><b>SSH / SFTP</b></td>
        <td><?php echo $report['SSH'] ? "<font color='red'>Online</font>" : "Offline"; ?></td>
        </tr>
        
        <tr>
        <td><b>HTTP</b></td>
        <td><?php echo $report['HTTP'] ? "<font color='red'>Online</font>" : "Offline"; ?></td>
        </tr>
        
        <tr>
        <td><b>MySQL</b></td>
        <td><?php echo $report['MySQL'] ? "<font color='red'>Online</font>" : "Offline"; ?></td>
        </tr>
    </table>

                                        <div class="row" style=" margin-top: 40px;">
                                        <div class="col-lg-6">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Age of Becon Chart </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="flot-chart">
                                                        <div class="flot-chart-content" id="flot-pie-chart"></div>
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

                                                                <td> < 6 month</td>
                                                                <td> 6 - 12 month</td>
                                                                <td> > 12 month</td>
                                                                <td>Total</td>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php $pa1 = $sen6->num_rows(); echo $pa1; ?></td>
                                                                <td><?php $pa2 = $sen12->num_rows(); echo $pa2; ?></td>
                                                                <td><?php $pa3 = $senover->num_rows(); echo $pa3; ?></td>
                                                                <td><?php $pa = $pa1+$pa2+$pa3; echo $pa; ?></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                 
                                        </div>

                                    </div>
<?php $a = $sen6->num_rows();?>
<?php $b = $sen12->num_rows();?>
<?php $c = $senover->num_rows();?>
        
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
<!-- <script src="<?=base_url()?>assets/js/plugins/morris/morris-data.js"></script> -->

<!-- Flot Charts JavaScript -->
<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
<script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.js"></script>
<script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
<!-- <script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script> -->

<script type="text/javascript">
    // Flot Pie Chart with Tooltips
    $(function() {

    var data = [{
        label: " < 6 month",
        data: <?php echo $a;?>
    }, {
        label: " 6 - 12 month",
        data: <?php echo $b;?>
    }, {
        label: " > 12 month",
        data: <?php echo $c;?>
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
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


            // $(function() {
            //     var data = [{
            //         label: " < 6 month",
            //         data :
            //         <?php
            //         echo $sen6->num_rows();
            //         ?>
            //     }, {
            //         label: " 6 - 12 month",
            //         data :
            //         <?php
            //         echo $sen12->num_rows();
            //         ?>
            //     }, {
            //         label: " > 12 month",
            //         data :
            //         <?php
            //         echo $senover->num_rows();
            //         ?>
            //     }];

            //     var plotObj = $.plot($("#flot-pie-chart-sensoro"), data, {
            //         series: {
            //             pie: {
            //                 show: true
            //             }
            //         },
            //         grid: {
            //             hoverable: true
            //         },
            //         tooltip: true,
            //         tooltipOpts: {
            //         content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            //         shifts: {
            //             x: 20,
            //             y: 0
            //         },
            //         defaultTheme: false
            //     }
            // });
            // });


        </script>

</body>

</html>