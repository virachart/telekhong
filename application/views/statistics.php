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
                            <div class="dropdown col-lg-6">
                                <?php echo form_open()?>

                                <select onchange="this.form.action='<?php echo site_url('statistics')?>/'+this.value;this.form.submit()" class="form-control" style="width : 100px;background-color : #286090;color:#fff;">
                                    <option value="ye15">2015</option>
                                    <option value="ye14">2014</option>
                                </select>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

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
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-bar-chart"></div>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Bar Chart in 2015</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>

                                                <td>Total/Month</td>
                                                <td>Jan</td>
                                                <td>Feb</td>
                                                <td>March</td>
                                                <td>Apirl</td>
                                                <td>May</td>
                                                <td>June</td>
                                                <td>July</td>
                                                <td>Aug</td>
                                                <td>Sep</td>
                                                <td>Oct</td>
                                                <td>Nov</td>
                                                <td>Dec</td>
                                                <td>Total</td>

                                            </tr>

                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>receiver</td>
                                                <td>10</td>
                                                <td>20</td>
                                                <td>30</td>
                                                <td>40</td>
                                                <td>50</td>
                                                <td>60</td>
                                                <td>70</td>
                                                <td>80</td>
                                                <td>90</td>
                                                <td>100</td>
                                                <td>110</td>
                                                <td>120</td>
                                                <td>780</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>                                 
                        </div>
                        <div class="row" style=" margin-top: 40px;">
                            <div class="col-lg-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Pie Chart </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-pie-chart"></div>
                                        </div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Pie Chart in 2015</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>

                                                    <td>11-15</td>
                                                    <td>16-20</td>
                                                    <td>21-25</td>
                                                    <td>26-30</td>
                                                    <td>Total</td>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>50</td>
                                                    <td>100</td>
                                                    <td>650</td>
                                                    <td>200</td>
                                                    <td>1000</td>

                                                </tr>
                                                <tr>
                                                    <td>5 %</td>
                                                    <td>10 %</td>
                                                    <td>65 %</td>
                                                    <td>20 %</td>
                                                    <td>100 %</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="col-lg-8" style="display:none;">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Multiple Axes Line Graph Example with Tooltips and Raw Data</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-multiple-axes-chart"></div>
                                        </div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row" >
                            <div class="col-lg-6" style="display:none;">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Moving Line Chart</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-moving-line-chart"></div>
                                        </div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->

                        <!-- Morris Charts -->
                        <div class="row" style="display:none;">
                            <div class="col-lg-12">
                                <h2 class="page-header">Morris Charts</h2>
                                <p class="lead">Morris.js is a very simple API for drawing line, bar, area and donut charts. For full usage instructions and documentation for Morris.js charts, visit <a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row" style="display:none;">
                            <div class="col-lg-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Area Line Graph Example with Tooltips</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-area-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row" >
                            <div class="col-lg-4" style="display:none;">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart Example</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-donut-chart"></div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="display:none;">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Line Graph Example with Tooltips</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-line-chart"></div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" >
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-bar-chart"></div>
                                        <div class="text-right">
                                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Bar Graph in 2015</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>

                                                <td>Total/Month</td>
                                                <td>Jan</td>
                                                <td>Feb</td>
                                                <td>March</td>
                                                <td>Apirl</td>
                                                <td>May</td>
                                                <td>June</td>
                                                <td>July</td>
                                                <td>Aug</td>
                                                <td>Sep</td>
                                                <td>Oct</td>
                                                <td>Nov</td>
                                                <td>Dec</td>
                                                <td>Total</td>

                                            </tr>

                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Buy</td>
                                                <td>10</td>
                                                <td>20</td>
                                                <td>30</td>
                                                <td>40</td>
                                                <td>50</td>
                                                <td>60</td>
                                                <td>70</td>
                                                <td>80</td>
                                                <td>90</td>
                                                <td>100</td>
                                                <td>110</td>
                                                <td>120</td>
                                                <td>780</td>

                                            </tr>

                                        </tbody>
                                    </table>
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
            <!-- <script src="<?=base_url()?>assets/js/plugins/morris/morris-data.js"></script>-->

            <!-- Flot Charts JavaScript -->
            <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
            <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.js"></script>
            <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
            <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
            <script src="<?=base_url()?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
            <script src="<?=base_url()?>assets/js/plugins/flot/flot-data.js"></script>

            <script type="text/javascript">
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

                // Line Chart
                Morris.Line({
                    // ID of the element in which to draw the chart.
                    element: 'morris-line-chart',
                    // Chart data records -- each entry in this array corresponds to a point on
                    // the chart.
                    data: [{
                        d: '2012-10-01',
                        visits: 802
                    }, {
                        d: '2012-10-02',
                        visits: 783
                    }, {
                        d: '2012-10-03',
                        visits: 820
                    }, {
                        d: '2012-10-04',
                        visits: 839
                    }, {
                        d: '2012-10-05',
                        visits: 792
                    }, {
                        d: '2012-10-06',
                        visits: 859
                    }, {
                        d: '2012-10-07',
                        visits: 790
                    }, {
                        d: '2012-10-08',
                        visits: 1680
                    }, {
                        d: '2012-10-09',
                        visits: 1592
                    }, {
                        d: '2012-10-10',
                        visits: 1420
                    }, {
                        d: '2012-10-11',
                        visits: 882
                    }, {
                        d: '2012-10-12',
                        visits: 889
                    }, {
                        d: '2012-10-13',
                        visits: 819
                    }, {
                        d: '2012-10-14',
                        visits: 849
                    }, {
                        d: '2012-10-15',
                        visits: 870
                    }, {
                        d: '2012-10-16',
                        visits: 1063
                    }, {
                        d: '2012-10-17',
                        visits: 1192
                    }, {
                        d: '2012-10-18',
                        visits: 1224
                    }, {
                        d: '2012-10-19',
                        visits: 1329
                    }, {
                        d: '2012-10-20',
                        visits: 1329
                    }, {
                        d: '2012-10-21',
                        visits: 1239
                    }, {
                        d: '2012-10-22',
                        visits: 1190
                    }, {
                        d: '2012-10-23',
                        visits: 1312
                    }, {
                        d: '2012-10-24',
                        visits: 1293
                    }, {
                        d: '2012-10-25',
                        visits: 1283
                    }, {
                        d: '2012-10-26',
                        visits: 1248
                    }, {
                        d: '2012-10-27',
                        visits: 1323
                    }, {
                        d: '2012-10-28',
                        visits: 1390
                    }, {
                        d: '2012-10-29',
                        visits: 1420
                    }, {
                        d: '2012-10-30',
                        visits: 1529
                    }, {
                        d: '2012-10-31',
                        visits: 1892
                    }, ],
                    // The name of the data record attribute that contains x-visitss.
                    xkey: 'd',
                    // A list of names of data record attributes that contain y-visitss.
                    ykeys: ['visits'],
                    // Labels for the ykeys -- will be displayed when you hover over the
                    // chart.
                    labels: ['Visits'],
                    // Disables line smoothing
                    smooth: false,
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

</script>
</body>

</html>
