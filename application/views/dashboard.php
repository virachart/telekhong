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
                        <li class="active">
                            <a href="<?=base_url()?>index.php/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li>
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
                                <li >
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
                            <p>Sensoro</p>
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

<div class="row">
    <div class="col-lg-2">
        <h2 class="page-header">All Chart in </h2></div>
        
        <!-- /.row -->
        <div class="col-lg-12" >
            <div class="panel panel-red">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> User Graph </h3>
                </div>
                <div class="panel-body">
                    <div id="morris-line-chart"></div>
                    <div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        
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
<script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script>

<script type="text/javascript">
    $(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: 'iPhone',
            geekbench: 136
        }, {
            device: 'iPhone 3G',
            geekbench: 137
        }, {
            device: 'iPhone 3GS',
            geekbench: 275
        }, {
            device: 'iPhone 4',
            geekbench: 380
        }, {
            device: 'iPhone 4S',
            geekbench: 655
        }, {
            device: 'iPhone 5',
            geekbench: 1571
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
</script>

<script type="text/javascript">
    var months = ["January", "Febuary", "March", "Apirl", "May", "June", "July", "August", "September", "October", "November", "December"];
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
        // month 1
        <?php
        $z = date("n");
        if ($z >= 1) {
            echo "{
            M: '2015-01',
            visits: ";
            echo $user1->num_rows();
            echo "}, ";
        };?> 
        
        // month 2
        <?php
        if ($z >= 2) {
            echo "{
            M: '2015-02',
            visits: ";
            $numUser = $user2->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 3
        <?php
        if ($z >= 3) {
            echo "{
            M: '2015-03',
            visits: ";
            $numUser = $user3->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 4
        <?php
        if ($z >= 4) {
            echo "{
            M: '2015-04',
            visits: ";
            $numUser = $user4->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 5
        <?php
        if ($z >= 5) {
            echo "{
            M: '2015-05',
            visits: ";
            $numUser = $user5->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 6
        <?php
        if ($z >= 6) {
            echo "{
            M: '2015-06',
            visits: ";
            $numUser = $user6->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
        
        // month 7
        <?php
        if ($z >= 7) {
            echo "{
            M: '2015-07',
            visits: ";
            $numUser = $user7->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 8
        <?php
        if ($z >= 8) {
            echo "{
            M: '2015-08',
            visits: ";
            $numUser = $user8->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
         
        // month 9
        <?php
        if ($z >= 9) {
            echo "{
            M: '2015-09',
            visits: ";
            $numUser = $user9->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
        // month 10
        <?php
        if ($z >= 10) {
            echo "{
            M: '2015-10',
            visits: ";
            $numUser = $user10->num_rows();
            echo $numUser;
            echo "}, ";
        };?> 
        // month 11
        <?php
        if ($z >= 11) {
            echo "{
            M: '2015-11',
            visits: ";
            $numUser = $user11->num_rows();
            echo $numUser;
            echo "}, ";
        };?>
        // month 12
        <?php
        if ($z >= 12) {
            echo "{
            M: '2015-12',
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
        labels: ['2015'],

        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
        var month = months[x.getMonth()];
        return month;
        },
        // Disables line smoothing
        smooth: false,
        resize: true
    });
</script>

</body>

</html>