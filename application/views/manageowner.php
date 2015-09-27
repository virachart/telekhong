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
                        
                        <li >
                            <a href="<?=base_url()?>index.php/statistics"><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
                        </li>
                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="<?=base_url()?>index.php/manageuser">Manage User</a>
                                </li>
                                <li class="active">
                                    <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managesensoro">Manage Khong</a>
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
                            Manage Owner
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> ManageOwner                         
                             </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                <div class="col-lg-3" >

                Total of Owner is : <span class="badge"><?php echo $num1->num_rows(); ?></span> <br>
                Avaliable Owner is :<span class="badge"><?php echo $num2->num_rows(); ?></span><br>
                Blocked Owmer is : <span class="badge"><?php echo $num3->num_rows(); ?></span><br>
                Ban Owner is : <span class="badge"><?php echo $num4->num_rows(); ?></span><br>
                
                </div>
                
            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>-------------------------------</li></ol>
            </div>
        </div>

       
                


                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>All Owner</h2></center>
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div class="input-group">

                                    <form action="<?php echo site_url('manageowner/search');?>" method = "post">
                                    <div class="col-lg-12">
                                    <div class="input-group-btn">
                                            <input class="btn btn-default pull-right" type="submit" name="btsave" value="Search">
                                        <input type="text" name="searchow" class="form-control input-sm pull-right" style="width: 200px; margin-top : 2px" placeholder="Search Input">
                                        </div>
                                    
                                    <script type="text/javascript">

                                         // show edit detail
                                        function edit(id){
                                            // alert($("#ownerid"+id).val()+"-"+$("#owneremail"+id).val()+"-"+$("#ownertel"+id).val()+"-"+$("#ownerstatus"+id).val());
                                            $.ajax({
                                                url:"<?php echo site_url("manageowner/edit");?>",
                                                type: "POST",
                                                cache: false,
                                                data: "id="+$("#ownerid"+id).val()+"&email="+$("#owneremail"+id).val()+"&tel="+$("#ownertel"+id).val()+"&status="+$("#ownerstatus"+id).val(),
                                                
                                            });
                                            location.reload("manageowner");
                                        };

                                    </script>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="owner_tel"> Tel &nbsp
                                        </label>
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="owner_email"> E-Mail &nbsp
                                        </label>
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="owner_name" checked="checked"> Name &nbsp
                                        </label>
                                    </div>
                                    </form>
                                </div>
                                <style>
                                .table th{
                                    background-color: #2B68A5;
                                    color: #ffffff;
                                    text-align: center;
                                }
                                </style>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Owner Email</th>
                                        <th>Owner Tel</th>
                                        <th>Status</th>
                                        <th>Register Date</th>
                                        <th>Action</th>
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
                                                $staown = "";
                                                if ($r['status_owner'] == 1) {
                                                    $staown = "<span class='label label-success'>Avaliable</span>";
                                                }elseif ($r['status_owner'] == 2) {
                                                    $staown = "<span class='label label-warning'>Blocked</span>";
                                                }elseif ($r['status_owner'] == 3) {
                                                    $staown = "<span class='label label-danger'>Baned</span>";
                                                }
                                                echo "<tr>";
                                                echo "<td>".$no."</td>";
                                                echo "<td>".$r['fb_name']."</td>";
                                                echo "<td>".$r['owner_email']."</td>";
                                                echo "<td>".$r['owner_tel']."</td>";
                                                echo "<td>".$staown."</td>";
                                                echo "<td>".$r['owner_date']."</td>";
                                                echo "<td align= center>";
                                                // echo "<button type='button' class='btn btn-warning' onclick='showdetail(".$r["owner_id"].")' data-toggle='modal' data-target='#myModal1'>Edit</button>";
                                                echo "<button type='button' class='btn btn-info'  data-toggle='modal' data-target='#myModaldetail".$r['owner_id']."'  >";
                                                echo "Detail";
                                                echo "</button>";
                                                echo "&nbsp";
                                                echo "<button type='button' class='btn btn-warning'  data-toggle='modal' data-target='#myModal".$r['owner_id']."'  >";
                                                echo "Edit";
                                                echo "</button>";
                                                echo "&nbsp";
                                                echo anchor("manageowner/del/".$r["owner_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                echo "</td>";
                                                echo "<td>";
                                                
                                                echo "<div class='modal fade' id='myModaldetail".$r['owner_id']."' role='dialog'>
                                                        <div class='modal-dialog'>
                                                          <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'></button>
                                                                <h4 class='modal-title' >Owner Detail</h4>
                                                            </div>
                                                            <div class='modal-body'style='padding:50px 50px;'>

                                                                <table style='margin : 0 auto;'>
                                                                    <tr >
                                                                        <td align='right'>Owner ID : &nbsp</td>
                                                                        <td>".$r['owner_id']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Name : </td>
                                                                        <td >".$r['fb_name']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Email : </td>
                                                                        <td>".$r['owner_email']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Telephone : </td>
                                                                        <td>".$r['owner_tel']."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr>
                                                                        <td align='right'>Status : </td>
                                                                        <td>".$staown."</td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='right'>Number of Store : </td>
                                                                        <td>".$r['storenum']." &nbsp ".anchor("managestore/searchstore/".$r["owner_id"], "<button type='button' class='btn btn-info'>Show all store</button>")." </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>";
                                                echo "<div class='modal fade' id='myModal".$r['owner_id']."' role='dialog'>
                                                        <div class='modal-dialog'>
                                                          <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'></button>
                                                                <h4 class='modal-title' >Edit Owner</h4>
                                                            </div>
                                                            <div class='modal-body'style='padding:50px 50px;'>

                                                                <table>
                                                                    <tr >
                                                                        <td align='center'>Owner ID : &nbsp</td>
                                                                        <td align='center'><input type='text' name='ownerid' id='ownerid".$r['owner_id']."' class='form-control' style='width:200px' value='".$r['owner_id']."' disabled></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Name : </td>
                                                                        <td align='center'><input type='text' name='ownername' id='ownername".$r['owner_id']."' class='form-control' style='width:200px' value='".$r['fb_name']."' disabled></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Email : </td>
                                                                        <td align='center'><input type='text' name='owneremail' id='owneremail".$r['owner_id']."' class='form-control' style='width:200px' value='".$r['owner_email']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Tel : </td>
                                                                        <td align='center'><input type='text' name='ownertel' id='ownertel".$r['owner_id']."' class='form-control' style='width:200px' value='".$r['owner_tel']."'></td>
                                                                    </tr>
                                                                    <tr><td>&nbsp</td></tr>
                                                                    <tr >
                                                                        <td align='center'>Status : </td>
                                                                        <td align='center'><input type='text' name='ownerstatus' id='ownerstatus".$r['owner_id']."' class='form-control' style='width:200px' value='".$r['status_owner']."'></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' onclick='edit(".$r['owner_id'].")' data-dismiss='modal'>Edit</button>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>";
                                                echo "</td>";


                                                echo "</tr>";




                                                $no++;
                                            }
                                        }
                                     ?>


                                </tbody>
                            </table>
                            <?php
                                echo $this->pagination->create_links();
                            ?>
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



</body>

</html>
