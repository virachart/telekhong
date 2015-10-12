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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<style>
      tr:nth-child(even) {
    background-color:#FAEDD9;

}
hr { border: 1px solid;
    color: #2D6AA5;
    margin-top: 50px;
    width: 80%;
}

</style>

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
                    .hr{
                        color: #0066CC ;
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
            
        
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                        <li >
                            <a href="<?=base_url()?>index.php/store"><i class="fa fa-fw fa-desktop"></i> Store</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/statisticsowner"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>index.php/payment"><i class="fa fa-fw fa-table"></i> Payment</a>
                        </li>
                        <li class="active">
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
            
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>All QR Code</h2></center>
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div class="col-lg-3" >

                                    Total of QR Code is : <span class="badge progress-bar-success"><?php echo $num1->num_rows(); ?></span> <br>
                
                                </div>
                                <div class=" pull-right">
                                    <form action="<?php echo site_url('manageqr/search');?>" method = "post">
                                    
                                    <div >
                                        
                                        <input class="btn btn-primary  pull-right" style="margin-bottom:20px" type="submit" name="btsave" value="Search">
                                        <input type="text" name="searchqr" class="form-control  pull-right" style="width: 200px; " placeholder="Search By Store Name">
                                     </div>
                                     </form>
                                </div>
                                <thead style="background-color:#E6A340;color:#FFFFFF">
                                    <tr>
                                        <td>No.</td>
                                        <td>Store Name</td>
                                        <td>Message Name</td>
                                        <td>Catagory</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(count($rs)==0)
                                        {
                                            echo "<tr><td align='center'>---no data----</td></tr>";
                                        }else {
                                            $no = $this->uri->segment(3)+1;
                                            // echo var_dump($rs);
                                            foreach ($rs as $r) {
                                                echo "<tr>";
                                                echo "<td>".$no."</td>";
                                                echo "<td>".$r['store_name']."</td>";
                                                echo "<td>".$r['info_name']."</td>";
                                                echo "<td>".$r['catagory']."</td>";
                                                echo "<td>";
                                                echo anchor("manageqrowner/del/".$r["qr_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                echo "</td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        }
                                     ?>




                                    <!-- <tr>
                                        <td>1</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-warning">Blocked</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>scverwvsfd</td>
                                        <td>Store 1</td>
                                        <td>Get 1 free 1</td>
                                        <td>12/07/2015</td>
                                        <td>13/06/2015</td>
                                        <td>13:50</td>
                                        <td><span class="label label-success">Avaliable</span></td>
                                        <td>
                                        <button type="button" class="btn btn-info">Detail</button>&nbsp
                                        <button type="button" class="btn btn-warning">Block</button>&nbsp
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
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

</body>

</html>
