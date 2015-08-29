
<!DOCTYPE html>
<?php //include_once 't.php';?>
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
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
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
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
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
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
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
                        <li class="active">
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
                            Package
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Package
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- php code show package -->
                <?php
                $no = 0;
                $a[0] = "panel-info";
                $a[1] = "panel-green";
                $a[2] = "panel-red";
                foreach ($rs as $r) {
                    echo "<div  class='col-sm-4 '' >
                    <div class='panel ";
                    if ($no == 0) {
                        echo $a[0];
                        $no++;
                    }elseif ($no == 1) {
                        echo $a[1];
                        $no++;
                    }else{
                        echo $a[2];
                        $no = 0;
                    }

                        // echo "panel-info";
                    echo "'>
                    <div class='panel-heading'>
                        <h3 class='panel-title'>Package ";
                            echo $r['package_name'];
                            echo "</h3>

                        </div>
                        <div class='panel-body'>
                            <div class='col-sm-8'><p> Upload Limit : ";
                                echo $r['upload_limit']."</p><br>";
                                echo "<p> Description : ".$r['package_descrip']."</p>";  
                                echo "<p> Price : ".$r['price']." ฿</p>";      
                                echo "</div>";
                                echo anchor("package/del/".$r["package_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                echo "</div>
                            </div>
                        </div>";
                        // echo "<tr>";
                        // echo "<td>".$no."</td>";
                        // echo "<td>".$r['store_name']."</td>";
                        // echo "<td>".$r['tel']."</td>";
                        // echo "<td>".$r['expire_date']."</td>";
                        // echo "<td>".$r['store_date']."</td>";
                        // echo "<td align= center>";
                        // echo anchor("managestore/edit/".$r["store_id"], "<button type='button' class='btn btn-warning'>Edit</button>");
                        // echo "&nbsp";
                        // echo anchor("managestore/del/".$r["store_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                        // echo "</td>";
                        // echo "</tr>";
                        // $no++;

                    }
                    ?>




                    <!-- /.row -->
                <!-- <div  class="col-sm-4 " >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Package 1</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-4">
                                <img class="img-thumbnail" src="http://placehold.it/75x75" alt="">
                            </div>
                            <div class="col-sm-8">
                                Detail of package 1
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-4 " >
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="panel-title">Package 2</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-4">
                                <img class="img-thumbnail" src="http://placehold.it/75x75" alt="">
                            </div>
                            <div class="col-sm-8">
                                Detail of package 2
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-4 " >
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h3 class="panel-title">Package 3</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-4">
                             <img class="img-thumbnail" src="http://placehold.it/75x75" alt="">
                         </div>
                         <div class="col-sm-8">
                            Detail of package 3
                        </div>
                    </div>
                </div>
            </div> -->


            <div  class="col-sm-12 " style=" margin-top: 20px;">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> + New Package</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" >Create New Package</h4>
                        </div>
                        <div class="modal-body"style="padding:50px 50px;">
                            <?php 
                            echo form_open('package/add');
                            ?>
                            <div class="col-sm-4">Package Name :</div><div class="col-sm-4"><input type="text" name="name" /></div><br><hr>
                            <div class="col-sm-4">Description :</div><div class="col-sm-4"><textarea name="desc"></textarea></div><br><hr>
                            <div class="col-sm-4">Upload Limits :</div><div class="col-sm-4"><input type="text" name="upload"/></div><br><hr>
                            <div class="col-sm-4">Price :</div><div class="col-sm-4"><input type="text" name="price"/></div><br><hr>

                            <div class="modal-footer">
                            <input class="btn btn-success" type="submit" name="btsave" value="Create"> &nbsp
                            <?php 
                                echo anchor("package", "<button type='button' class='btn btn-danger'>Cancle</button>");
                                
                                echo form_close();
                                ?>
                            </div>
                        </div>

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
