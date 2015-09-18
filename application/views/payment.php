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

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <script>
    function payment(){
                var month = $("#priod").val();
                var p = <?php echo $storedetail['price']+0;?>;
                var total = p*month ;
                $("#price").attr("value",total);
        }
    </script>

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
                        <li>
                            <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li class="active">
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
                            Payment
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-desktop"></i>  <a href="<?=base_url()?>store">store</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Payments
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                <div class="col-lg-3" >

                Your Package is : <?php echo $storedetail['package_name']; ?><br>
                Service Charge : <?php echo $storedetail['price']; ?> / Month<br>
                Service start in : <?php echo substr($firstday['date'],0,10); ?><br>
                End of agreement : <?php $y = substr($firstday['date'],0,4); $y+=1; echo $y.substr($firstday['date'],4,6); ?><br>
                </div>
                <div class="col-lg-6">

                <Form method="post" action="https://www.paysbuy.com/paynow.aspx"> 
                    
                    <p class="col-lg-6">You can choose more than 1 period :</p>
                    <select class="form-control col-lg-12" style="width:50px" onchange="payment()" id="priod">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        
                    </select>

                    <div class="col-lg-12" style="height:10px;"></div>
                    <p class="col-lg-4">Click this for payment :</p>
                    <div class="col-lg-6">
                    <input type="Hidden" Name="psb" value="psb"/> 
                    <input Type="Hidden" Name="biz" value="sleepyjob.oneside@gmail.com"/> 
                    
                    <?php
                        $store = $storedetail['store_id'];
                        if ($store <10) {
                            $store = "00".$store;
                        }elseif ($store < 100) {
                            $store = "0".$store;
                        }
                    ?>

                    <!-- inv is Some String text from paysbuy-->
                    <input Type="Hidden" Name="inv" value="<?php echo "pack".$store."".$storedetail['price']."";?>"/> 
                    <input Type="Hidden" Name="itm" value="Service Charge"/> 
                    
                    <!-- amt is Store Package Charge--> 
                    <input Type="Hidden" Name="amt" value="1" id="price"/>
                    
                    <!-- Redirect Web Controller-->
                    <input Type="Hidden" Name="postURL" value="http://www.telekhong.me/index.php/payment/checkpayment"/> 
                    <input type="image" src="https://www.paysbuy.com/imgs/L_click2buy.gif" border="0" name="submit" alt="Make it easier,PaySbuy - it's fast,free and secure!"/> 
                    </div>
                </Form >
                
                </div>
            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>You can pay between XX XX XX - XX XX XX </li></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">Payment Logs</h2>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" style="text-align:center">
                                <thead>
                                    <tr>
                                        <td>Period</td>
                                        <td>Amount</td>
                                        <td>Date</td>
                                        <td>Time</td>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $i = 1;
                                        foreach ($payment as $r) {
                                        echo "<tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$r['amount']."</td>";
                                        echo "<td>".substr($r['date'],0,10)."</td>";
                                        echo "<td>".substr($r['date'],11,8)."</td>";
                                        echo "</tr>";
                                        $i++;
                                        }
                                    ?>
                                    <!-- <tr>
                                        <td>7</td>
                                        <td>2000</td>
                                        <td>12/7/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>2000</td>
                                        <td>12/6/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2000</td>
                                        <td>12/5/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2000</td>
                                        <td>12/4/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2000</td>
                                        <td>12/3/58</td>
                                        <td>13:50</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2000</td>
                                        <td>12/2/58</td>
                                        <td>13:30</td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2500</td>
                                        <td>12/1/58</td>
                                        <td>13:50</td>
                                    </tr> -->
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

</body>

</html>
