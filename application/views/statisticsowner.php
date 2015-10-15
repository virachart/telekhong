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
                    <a class="navbar-brand" href="<?=base_url()?>index.php/store">Telekhong</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    
                       <?php
                    $dissta = "";
                    $dismanage = "";
                    $disdelete = "";
                    $disupload = "";
                    $stastore = $this->session->userdata('statuspack');
                    if ($stastore == 1) {
                        $dissta = "style = 'display : none' ";
                        $dismanage = "style = 'display : none'";
                    }elseif ($stastore == 5) {
                        $dissta = "class = 'disabled'";
                        $dismanage = "class = 'disabled'";
                        $disdelete = "disabled";
                        $disupload = "disabled";
                    }

                ?>



                <style type="text/css">
                    .not-active {
                       pointer-events: none;
                       cursor: default;
                    }

                </style>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> &nbsp<?php $storename = $this->session->userdata('storename'); echo substr($storename, 0,15) ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <?php
                        if ($allstore == null) {
                            echo "<li><center> You must have at least 1 store.</center> </li>";
                        }else{
                            foreach ($allstore as $r) {
                                $sta = "";
                                if ($r['status_store_id']=="1" && $r['expire_date'] != null) {

                                }else{
                                    $sta = "class='not-active'";
                                }
                                echo "<li ".$sta.">
                                <a href='";
                                echo site_url("store/selectst/".$r['store_id']);
                                echo "'> ".substr($r['store_name'],0,13); 
                                    if ($r['status_store_id']=="1" ) {
                                        echo "<span class='label label-success' style='float : right;'>Avaliable</span></a>
                                    </li>";
                                }elseif ($r['status_store_id']=="2" ) {
                                    echo "<span class='label label-warning' style='float : right;'>Blocked</span></a>
                                </li>";    
                            }elseif ($r['status_store_id']=="3" ) {
                                echo "<span class='label label-danger' style='float : right;'>Ban</span></a>
                            </li>";    
                            }
                            }
                        }

                ?>
                        <li class="divider"></li>
                            <li style="text-align:center;">
                                <a href="<?=base_url()?>index.php/createstore"> <i class="fa fa-plus-circle"></i> Create Store</a>
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
                    <!-- start script check permission owner -->
                    <?php
                        $dismanage = "";
                        $disfirst = "";
                        $dissecond = "";
                        $stastore = $this->session->userdata('statuspack');
                        if ($stastore == 2) {
                            $disfirst = "style = 'display : none'";
                            $dissecond = "style = 'display : none'";
                            $dismanage = "style = 'display : none'";
                        }

                    ?>
        <!-- end script check permission owner -->
        
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                        <li >
                            <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li  class="active">
                            <a href="<?=base_url()?>index.php/statisticsowner"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li <?php echo $dismanage; ?>>
                            <a href="<?=base_url()?>index.php/manageqrowner"><i class="glyphicon glyphicon-qrcode"></i> QRCode</a> 
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/contact"><i class="fa fa-fw fa-edit"></i> Contact</a>
                        </li>
                    </ul>
                </ul>
            </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">
                    <!-- /.row -->

                    <!-- Flot Charts -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h2>All Chart in :</h2></div>
                            <div class="col-lg-10">
                            <div class="dropdown col-lg-12" style="margin-top:20px" >
                                <?php echo form_open()?>
                               <table>
                                    <tr>
                                        <td>
                                            <select onchange="this.form.action='<?php echo site_url('statisticsowner')?>/otherinfo/'+this.value;this.form.submit()" class="form-control" style="width : 200px;background-color : #286090;color:#fff;" >
                                                <option hidden><?php echo $getinfoname['info_name']; ?></option>
                                                <?php
                                                    foreach ($rs as $r) {
                                                        echo "<option value='".$r['info_id']."'>".substr($r['info_name'], 0,20)."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>

                                    </tr>
                                </table>
                                <?php echo form_close()?>
                                </div>
                            </div>
                        </div>



                        <div class="tabbable" > <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs" id="mytab">
                                <li class="active"><a href="#tab1" data-toggle="tab" onclick="showtab1()" id="mytab1">General Graph</a></li>
                                <li ><a href="#tab2" data-toggle="tab" onclick="showtab2()" id="mytab2">User Received</a></li>
                                <li ><a href="#tab3" data-toggle="tab" onclick="showtab3()" id="mytab3">Received and come to Store</a></li>
                                <li <?php echo $disfirst; ?>><a href="#tab4" data-toggle="tab" onclick="showtab4()" id="mytab4">First QR Code</a></li>
                                <li <?php echo $dissecond; ?>><a href="#tab5" data-toggle="tab" onclick="showtab5()" id="mytab5">Second or more QR Code</a></li>     
                            </ul>
                            <div class="tab-content ">

            <!-- begin tab2 -->
                                <div class=" active" id="tab2" >
                                
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
            <!-- end tab4 -->
            <!-- begin tab5 -->
                                <div class="active" id="tab5">

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
                                                                

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <?php 
                                                                $pa1 = $age1->num_rows(); 
                                                                $pa2 = $age2->num_rows(); 
                                                                $pa3 = $age3->num_rows(); 
                                                                $pa4 = $age4->num_rows(); 
                                                                $pa5 = $age5->num_rows(); 
                                                                $pa = $pa1+$pa2+$pa3+$pa4+$pa5;
                                                                ?>
                                                                <td><?php $pa1 = ($pa1/$pa)*100; echo number_format($pa1,2)."%"; ?></td>
                                                                <td><?php $pa2 = ($pa2/$pa)*100; echo number_format($pa2,2)."%"; ?></td>
                                                                <td><?php $pa3 = ($pa3/$pa)*100; echo number_format($pa3,2)."%"; ?></td>
                                                                <td><?php $pa4 = ($pa4/$pa)*100; echo number_format($pa4,2)."%"; ?></td>
                                                                <td><?php $pa5 = ($pa5/$pa)*100; echo number_format($pa5,2)."%"; ?></td>
                                                                

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

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <?php 
                                                                $pa1 = $male->num_rows();
                                                                $pa2 = $female->num_rows();
                                                                $pa3 = $unkn->num_rows(); 
                                                                $pa = $pa1+$pa2+$pa3;
                                                            ?>
                                                                <td><?php $pa1 = ($pa1/$pa)*100; echo number_format($pa1,2)."%"; ?></td>
                                                                <td><?php $pa2 = ($pa2/$pa)*100; echo number_format($pa2,2)."%"; ?></td>
                                                                <td><?php $pa3 = ($pa3/$pa)*100; echo number_format($pa3,2)."%"; ?></td>

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
            $('#tab1').css("display","none");
            $('#tab3').css("display","none");
            $('#tab4').css("display","none");
            $('#tab5').css("display","none");
        }
        function showtab3(){
            $('#tab3').css("display","block"); 
            $('#tab1').css("display","none");
            $('#tab2').css("display","none");
            $('#tab4').css("display","none");
            $('#tab5').css("display","none");
        }
        function showtab4(){
            $('#tab4').css("display","block"); 
            $('#tab1').css("display","none");
            $('#tab3').css("display","none");
            $('#tab2').css("display","none");
            $('#tab5').css("display","none");
        }
        function showtab5(){
            $('#tab5').css("display","block"); 
            $('#tab2').css("display","none");
            $('#tab3').css("display","none");
            $('#tab4').css("display","none");
            $('#tab1').css("display","none");
        }
        </script>

        <script type="text/javascript">
    // Flot Pie Chart with Tooltips
            $('#mytab1').click(function (){
                var data = [{
                    label: " < 18 year old",
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
        
        $('#tab1').ready(function (){
                var data = [{
                    label: " < 18 year old",
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
    $('#mytab1').click(function (){
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

    $('#tab1').ready(function (){
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

<?php
    $begindate = $getinfoname['info_begin_date'];
    $expiredate = $getinfoname['info_expire_date'];
    $dbegin = substr($begindate, 8,2);
    $mbegin = substr($begindate, 5,2);
    $ybegin = substr($begindate, 0,4);

    $dexpire = substr($expiredate, 8,2);
    $mexpire = substr($expiredate, 5,2);
    $yexpire = substr($expiredate, 0,4);
?>

<!-- start use qr again line chart age -->
<script type="text/javascript">
$('#tab5').ready(function (){    
    var tab5 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-qrag',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                    $simumonth = $mbegin;
                    $simuday = $dbegin;
                    $simuyear = $ybegin;
                    $count = 0;
                    if ($yexpire == $ybegin) {
                        for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            if ($dayofmonth > $dexpire && $i == $mexpire) {
                                $dayofmonth = $dexpire;
                            }
                            if ($dayofmonth < $simuday) {
                                $simuday = 1;
                            }
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qragage1[$count]." , 
                                    b: ".$qragage2[$count]." , 
                                    c: ".$qragage3[$count]." , 
                                    d: ".$qragage4[$count]." , 
                                    e: ".$qragage5[$count]." },
                                    ";
                                

                                $count++;
                                $simuday++;
                            }
                        }
                    }else{
                        for ($i=$simumonth; $i <= 12 ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            
                            if ($dayofmonth < $simuday) {
                                $simuday = 1;
                            }
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qragage1[$count]." , 
                                    b: ".$qragage2[$count]." , 
                                    c: ".$qragage3[$count]." , 
                                    d: ".$qragage4[$count]." , 
                                    e: ".$qragage5[$count]." },";

                                $count++;
                                $simuday++;
                            }
                        }
                        $simuyear+=1;
                        for ($i=1; $i <= $mexpire ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            if ($dayofmonth > $dexpire && $i == $mexpire) {
                                $dayofmonth = $dexpire;
                            }
                            $simuday = 1;
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qragage1[$count]." , 
                                    b: ".$qragage2[$count]." , 
                                    c: ".$qragage3[$count]." , 
                                    d: ".$qragage4[$count]." , 
                                    e: ".$qragage5[$count]." },";

                                $count++;
                                $simuday++;
                                
                            }
                        }
                    }


            ?>
        
         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true,
            defaultTheme: false
    });
$('#mytab5').click(function(){
        tab5.redraw();
    });
});
</script>
<!-- end use qr again line chart age -->


<!-- start use qr again line chart sex -->
<script type="text/javascript">

$('#tab5').ready(function (){   
    var tab5=
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-qrag',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 

                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qragsex1[$count]." , 
                                b: ".$qragsex2[$count]." , 
                                c: ".$qragsex3[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qragsex1[$count]." , 
                                b: ".$qragsex2[$count]." , 
                                c: ".$qragsex3[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qragsex1[$count]." , 
                                b: ".$qragsex2[$count]." , 
                                c: ".$qragsex3[$count]."  
                                 },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }

                
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
$('#mytab5').click(function(){
        tab5.redraw();
    });
});
    
</script>
<!-- end use qr again line chart sex -->


<!-- start use qr line chart age -->
<script type="text/javascript">
$('#tab4').ready(function (){
    var tab4 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-qr',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 

                    $simumonth = $mbegin;
                    $simuday = $dbegin;
                    $simuyear = $ybegin;
                    $count = 0;
                    if ($yexpire == $ybegin) {
                        for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            if ($dayofmonth > $dexpire && $i == $mexpire) {
                                $dayofmonth = $dexpire;
                            }
                            if ($dayofmonth < $simuday) {
                                $simuday = 1;
                            }
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qrage1[$count]." , 
                                    b: ".$qrage2[$count]." , 
                                    c: ".$qrage3[$count]." , 
                                    d: ".$qrage4[$count]." , 
                                    e: ".$qrage5[$count]." },
                                    ";
                                

                                $count++;
                                $simuday++;
                            }
                        }
                    }else{
                        for ($i=$simumonth; $i <= 12 ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            
                            if ($dayofmonth < $simuday) {
                                $simuday = 1;
                            }
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qrage1[$count]." , 
                                    b: ".$qrage2[$count]." , 
                                    c: ".$qrage3[$count]." , 
                                    d: ".$qrage4[$count]." , 
                                    e: ".$qrage5[$count]." },";

                                $count++;
                                $simuday++;
                            }
                        }
                        $simuyear+=1;
                        for ($i=1; $i <= $mexpire ; $i++) { 
                            $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                            if ($dayofmonth > $dexpire && $i == $mexpire) {
                                $dayofmonth = $dexpire;
                            }
                            $simuday = 1;
                            if ($i < 10) {
                                $i = "0".$i;
                            }
                            for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                                if ($j < 10) {
                                    $j = "0".$j;
                                } 
                                echo "{da: '".$simuyear."-".$i."-".$j."',";
                                echo "a: ".$qrage1[$count]." , 
                                    b: ".$qrage2[$count]." , 
                                    c: ".$qrage3[$count]." , 
                                    d: ".$qrage4[$count]." , 
                                    e: ".$qrage5[$count]." },";

                                $count++;
                                $simuday++;
                                
                            }
                        }
                    }

                ?>
        
         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
    $('#mytab4').click(function(){
        tab4.redraw();
    });
});
</script>
<!-- end use qr line chart age -->


<!-- start use qr line chart sex -->
<script type="text/javascript">
$('#tab4').ready(function (){
    var tab4 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-qr',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qrsex1[$count]." , 
                                b: ".$qrsex2[$count]." , 
                                c: ".$qrsex3[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qrsex1[$count]." , 
                                b: ".$qrsex2[$count]." , 
                                c: ".$qrsex3[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$qrsex1[$count]." , 
                                b: ".$qrsex2[$count]." , 
                                c: ".$qrsex3[$count]."  
                                 },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }
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
    $('#mytab4').click(function(){
        tab4.redraw();
    });
});
</script>
<!-- end use qr line chart sex -->



<!-- start recive and into store line chart age -->
<script type="text/javascript">
$('#tab3').ready(function (){
    var tab3 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-rein',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 

                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinage1[$count]." , 
                                b: ".$reinage2[$count]." , 
                                c: ".$reinage3[$count]." , 
                                d: ".$reinage4[$count]." , 
                                e: ".$reinage5[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinage1[$count]." , 
                                b: ".$reinage2[$count]." , 
                                c: ".$reinage3[$count]." , 
                                d: ".$reinage4[$count]." , 
                                e: ".$reinage5[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinage1[$count]." , 
                                b: ".$reinage2[$count]." , 
                                c: ".$reinage3[$count]." , 
                                d: ".$reinage4[$count]." , 
                                e: ".$reinage5[$count]." },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }

            ?>
        
         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
    $('#mytab3').click(function(){
        tab3.redraw();
    });
});
</script>
<!-- end recive and into store line chart age -->


<!-- start recive and into store line chart sex -->
<script type="text/javascript">
$('#tab3').ready(function (){
    var tab3 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-rein',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinsex1[$count]." , 
                                b: ".$reinsex2[$count]." , 
                                c: ".$reinsex3[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinsex1[$count]." , 
                                b: ".$reinsex2[$count]." , 
                                c: ".$reinsex3[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reinsex1[$count]." , 
                                b: ".$reinsex2[$count]." , 
                                c: ".$reinsex3[$count]."  
                                 },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }

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
    $('#mytab3').click(function(){
        tab3.redraw();
    });
});
</script>
<!-- end recive and into store line chart sex -->



<!-- start recive promotion line chart age -->
<script type="text/javascript">
$('#tab2').ready(function (){
    var tab2 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-age-re',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 

                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reage1[$count]." , 
                                b: ".$reage2[$count]." , 
                                c: ".$reage3[$count]." , 
                                d: ".$reage4[$count]." , 
                                e: ".$reage5[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reage1[$count]." , 
                                b: ".$reage2[$count]." , 
                                c: ".$reage3[$count]." , 
                                d: ".$reage4[$count]." , 
                                e: ".$reage5[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$reage1[$count]." , 
                                b: ".$reage2[$count]." , 
                                c: ".$reage3[$count]." , 
                                d: ".$reage4[$count]." , 
                                e: ".$reage5[$count]." },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }

            ?>
        
         ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'da',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['a','b','c','d','e'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['<18','18-25','26-35','36-50','>51'],
        // Disables line smoothing
        colors: ['Red','blue','green','yellow','gray'],
        smooth: false,
        resize: true
    });
    $('#mytab2').click(function(){
        tab2.redraw();
    });
});
</script>
<!-- end recive promotion line chart age -->


<!-- start recive promotion line chart sex -->
<script type="text/javascript">
$('#tab2').ready(function (){
    var tab2 =
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart-sex-re',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [<?php 
                $simumonth = $mbegin;
                $simuday = $dbegin;
                $simuyear = $ybegin;
                $count = 0;
                if ($yexpire == $ybegin) {
                    for ($i=$simumonth; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$resex1[$count]." , 
                                b: ".$resex2[$count]." , 
                                c: ".$resex3[$count]." },
                                ";
                            

                            $count++;
                            $simuday++;
                        }
                    }
                }else{
                    for ($i=$simumonth; $i <= 12 ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        
                        if ($dayofmonth < $simuday) {
                            $simuday = 1;
                        }
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$resex1[$count]." , 
                                b: ".$resex2[$count]." , 
                                c: ".$resex3[$count]." },";

                            $count++;
                            $simuday++;
                        }
                    }
                    $simuyear+=1;
                    for ($i=1; $i <= $mexpire ; $i++) { 
                        $dayofmonth = cal_days_in_month(CAL_GREGORIAN,$i,$simuyear);
                        if ($dayofmonth > $dexpire && $i == $mexpire) {
                            $dayofmonth = $dexpire;
                        }
                        $simuday = 1;
                        if ($i < 10) {
                            $i = "0".$i;
                        }
                        for ($j=$simuday ; $j <= $dayofmonth ; $j++) {
                            if ($j < 10) {
                                $j = "0".$j;
                            } 
                            echo "{da: '".$simuyear."-".$i."-".$j."',";
                            echo "a: ".$resex1[$count]." , 
                                b: ".$resex2[$count]." , 
                                c: ".$resex3[$count]."  
                                 },";

                            $count++;
                            $simuday++;
                            
                        }
                    }
                }
                
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
    $('#mytab2').click(function(){
        tab2.redraw();
    });
});
</script>
<!-- end recive promotion line chart sex -->





</body>

</html>