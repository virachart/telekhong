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
                <a class="navbar-brand" href="<?=base_url()?>index.php/dashboard">Telekhong</a>
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
                                <li >
                                    <a href="<?=base_url()?>index.php/manageowner">Manage Owner</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/managestore">Manage Store</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/manageqr">Manage QRCode</a>
                                </li>
                                <li class="active">
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
                            Manage Khong
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Manage Khong                       
                             </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                <div class="col-lg-3" >

                Total of Store is : <span class="badge"><?php echo $num1->num_rows(); ?></span> <br>
                Avaliable Store is :<span class="badge"><?php echo $num2->num_rows(); ?></span><br>
                Blocked Store is : <span class="badge"><?php echo $num3->num_rows(); ?></span><br>
                Ban Store is : <span class="badge"><?php echo $num4->num_rows(); ?></span><br>
                Khong Type 1 is : <span class="badge"><?php echo $num5->num_rows(); ?></span><br>
                Khong Type 2 is : <span class="badge"><?php echo $num6->num_rows(); ?></span><br>
                
                </div>

                <!-- script create beacon -->
                <script type="text/javascript">
                    // create beacon
                    $('#create').live("click",function(){
                        $.ajax({
                            url:"managesensoro/add",
                            type: "POST",
                            cache: false,
                            data: "uuid="+$("#uuid").val()+"&major="+$("#major").val()+"&minor="+$("#minor").val()+"&type="+$("#type").val(),
                        });
                        location.reload("managesensoro");
                    });
                    // end create beacon

                    // edit beacon
                    $('#edit').live("click",function(){
                        $.ajax({
                            url:"managesensoro/edit",
                            type: "POST",
                            cache: false,
                            data: "senid="+$("#senid").val()+"&storeid="+$("#store").val()+"&type="+$("#typedetail").val()+"&status="+$("#statusdetail").val(),
                        });
                        location.reload("managesensoro");
                    });

                    // change Battery
                    $('#change').live("click",function(){
                        var a = $("#changebatt").val();
                        var year = a.substring(0, 4);
                        var month = a.substring(5, 7);
                        var day = a.substring(8, 10);
                        var forday = year+"-"+month+"-"+day+" 08:00:00";
                        $.ajax({
                            url:"managesensoro/change",
                            type: "POST",
                            cache: false,
                            data: "senid="+$("#senidbatt").val()+"&day="+forday,
                        });
                        location.reload("managesensoro");
                    });

                </script>

<!-- Modal content-->
      <!-- modal of create beacon -->
    <div class="modal fade" id="myModalcre1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Create Khong</h4>
                </div>
                <div class="modal-body"style="padding:50px 50px;">

                    <table>
                        <tr >
                            <td align="center">UUID : </td>
                            <td align="center"><textarea class="form-control" name="uuid" id="uuid" rows="3" style="width:400px" placeholder="UUID"></textarea></td>
                        </tr>
                        <tr><td>&nbsp</td></tr>
                        <tr >
                            <td align="center">Major : </td>
                            <td align="center"><input type="text" name="major" id="major" class="form-control" placeholder="Major" style="width:200px"></td>
                        </tr>
                        <tr><td>&nbsp</td></tr>
                        <tr >
                            <td align="center">Minor : </td>
                            <td align="center"><input type="text" name="minor" id="minor" class="form-control" placeholder="Minor" style="width:200px"></td>
                        </tr>
                        <tr><td>&nbsp</td></tr>
                        <tr >
                            <td align="center">Type of Work :</td>
                            <td align="center">
                                <select class="form-control" name="type" id="type" style="width:300px ;">  
                                    <option value="1">Type 1 : Use for send message</option>
                                    <option value="2">Type 2 : Use for check customer</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id='create' data-dismiss="modal">Create</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal of create beacon -->

   

                <script type="text/javascript">
                 // show edit detail
                function edit(id){
                    // alert($("#ownerid"+id).val()+"-"+$("#owneremail"+id).val()+"-"+$("#ownertel"+id).val()+"-"+$("#ownerstatus"+id).val());
                    $.ajax({
                        url:"<?php echo site_url("managesensoro/edit");?>",
                        type: "POST",
                        cache: false,
                        data: "senid="+$("#senid"+id).val()+"&storeid="+$("#store"+id).val()+"&type="+$("#typedetail"+id).val()+"&status="+$("#statusdetail"+id).val(),
                        
                    });
                    location.reload("managesensoro");
                };

                function editbatt(id){
                    // alert($("#ownerid"+id).val()+"-"+$("#owneremail"+id).val()+"-"+$("#ownertel"+id).val()+"-"+$("#ownerstatus"+id).val());
                    $.ajax({
                        url:"<?php echo site_url("managesensoro/change");?>",
                        type: "POST",
                        cache: false,
                        data: "senid="+$("#senidbatt"+id).val()+"&day="+$("#changebatt"+id).val(),
                        
                    });
                    location.reload("managesensoro");
                };
                    
                </script>


            </div>
            <div class="row">
             <div class="col-lg-12 " style=" margin-top: 20px;" >
                <ol class="breadcrumb"><li>-------------------------------</li></ol>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>Total of Khong</h2></center>
                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div class="input-group" style="margin-bottom:20px">
                                        <button type='button' class='btn btn-primary col-sm-2' data-toggle="modal" data-target="#myModalcre1" >Create Khong + </button>
                                   
                                    
                                    <form action="<?php echo site_url('managestore/search');?>" method = "post">
                                    <input type="text" name="searchst" class="form-control input-sm pull-right" style="width: 200px; margin-top : 2px" placeholder="Search By Store Name">
                                    <div class="input-group-btn">
                                        <input class="btn btn-default" type="submit" name="btsave" value="Search">
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
                                        <th>Store Name</th>
                                        <th>Major</th>
                                        <th>Minor</th>
                                        <th>Khong Type</th>
                                        <th>Battery Date</th>
                                        <th>Status</th>
                                        <th style="text-align: center">Action</td>
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
                                                if ($r['status_sensoro_id'] == 1) {
                                                    $staown = "<span class='label label-success'>Avaliable</span>";
                                                }elseif ($r['status_sensoro_id'] == 2) {
                                                    $staown = "<span class='label label-warning'>Blocked</span>";
                                                }elseif ($r['status_sensoro_id'] == 3) {
                                                    $staown = "<span class='label label-danger'>Baned</span>";
                                                }
                                                $sentype = "";
                                                if ($r['sensoro_type'] == 1) {
                                                    $sentype = "<span class='label label-primary'>Send</span>";
                                                }elseif ($r['sensoro_type'] == 2) {
                                                    $sentype = "<span class='label label-info'>Count</span>";
                                                }
                                                echo "<tr>";
                                                echo "<td>".$no."</td>";
                                                echo "<td>".$r['store_name']."</td>";
                                                echo "<td>".$r['major']."</td>";
                                                echo "<td>".$r['minor']."</td>";
                                                echo "<td>".$sentype."</td>";
                                                echo "<td>".substr($r['sensoro_date'],0,10)."</td>";
                                                echo "<td>".$staown."</td>";
                                                echo "<td align= center>";
                                                // echo "<button type='button' class='btn btn-success' onclick='showdetailbatt(".$r["sensoro_id"].")' data-toggle='modal' data-target='#myModal3' >Change Battery</button>";
                                                echo "<button type='button' class='btn btn-success'  data-toggle='modal' data-target='#myModalbatt".$r['sensoro_id']."'  >";
                                                echo "Change Battery";
                                                echo "</button>";
                                                echo "&nbsp";
                                                // echo "<button type='button' class='btn btn-warning' onclick='showdetail(".$r["sensoro_id"].")' data-toggle='modal' data-target='#myModal2' >Edit</button>";
                                                echo "<button type='button' class='btn btn-warning'  data-toggle='modal' data-target='#myModal".$r['sensoro_id']."'  >";
                                                echo "Edit";
                                                echo "</button>";
                                                echo "&nbsp";
                                                echo anchor("managesensoro/del/".$r["sensoro_id"], "<button type='button' class='btn btn-danger'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                                                echo "</td>";
                                                echo "<td>";

                                                 // <!-- modal of edit beacon -->
                                                echo "<div class='modal fade' id='myModal".$r['sensoro_id']."' role='dialog'>
                                                        <div class='modal-dialog'>
                                                            <div class='modal-content'>
                                                                <div class='modal-header'>
                                                                    <button type='button' class='close' data-dismiss='modal'></button>
                                                                    <h4 class='modal-title' >Edit Khong</h4>
                                                                </div>
                                                                <div class='modal-body'style='padding:50px 50px;'>

                                                                    <table>
                                                                        <tr >
                                                                            <td align='center'>Khong ID : </td>
                                                                            <td align='center'><input type='text' id='senid".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['sensoro_id']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Major : </td>
                                                                            <td align='center'><input type='text' id='majordetail".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['major']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Minor : </td>
                                                                            <td align='center'><input type='text' id='minordetail".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['minor']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Store ID : </td>
                                                                            <td align='center'><input type='text' id='store".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['store_id']."'></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Type of Work : </td>
                                                                            <td align='center'>
                                                                                <select class='form-control' name='type' id='typedetail".$r['sensoro_id']."' style='width:300px ;'> ";
                                                                                $se1 = "";
                                                                                $se2 = "";
                                                                                if ($r['sensoro_type'] == 1) {
                                                                                    $se1 = "selected";
                                                                                }else{
                                                                                    $se2 = "selected";
                                                                                }

                                                                                $sta1 = "";
                                                                                $sta2 = "";
                                                                                $sta3 = "";
                                                                                if ($r['status_sensoro_id'] == 1) {
                                                                                    $sta1 = "selected";
                                                                                }elseif ($r['status_sensoro_id'] == 2) {
                                                                                    $sta2 = "selected";
                                                                                }else{
                                                                                    $sta3 = "selected";
                                                                                }

                                                                                echo  "<option id='type1' value='1' ".$se1.">Type 1 : Use for send message</option>
                                                                                    <option id='type2' value='2' ".$se2.">Type 2 : Use for check customer</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Status Khong : &nbsp</td>
                                                                            <td align='center'>
                                                                                <select class='form-control' name='type' id='statusdetail".$r['sensoro_id']."' style='width:300px ;'>  
                                                                                    <option id='status1' value='1' ".$sta1.">Avaliable</option>
                                                                                    <option id='status2' value='2' ".$sta2.">Block</option>
                                                                                    <option id='status3' value='3' ".$sta3.">Ban</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <button type='button' class='btn btn-default' onclick='edit(".$r['sensoro_id'].")' data-dismiss='modal'>Save</button>
                                                                    
                                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>";

                                                    // <!-- end modal edit beacon   -->



                                                    // <!-- modal of change batt beacon -->
                                                    echo "<div class='modal fade' id='myModalbatt".$r['sensoro_id']."' role='dialog'>
                                                        <div class='modal-dialog'>
                                                            <div class='modal-content'>
                                                                <div class='modal-header'>
                                                                    <button type='button' class='close' data-dismiss='modal'></button>
                                                                    <h4 class='modal-title' >Change Battery Khong</h4>
                                                                </div>
                                                                <div class='modal-body'style='padding:50px 50px;'>

                                                                    <table>
                                                                        <tr >
                                                                            <td align='center'>Khong ID : </td>
                                                                            <td align='center'><input type='text' id='senidbatt".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['sensoro_id']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Major : </td>
                                                                            <td align='center'><input type='text' id='majorbatt".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['major']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Minor : </td>
                                                                            <td align='center'><input type='text' id='minorbatt".$r['sensoro_id']."' class='form-control' style='width:200px' value='".$r['minor']."' disabled></td>
                                                                        </tr>
                                                                        <tr><td>&nbsp</td></tr>
                                                                        <tr >
                                                                            <td align='center'>Changed Date : &nbsp</td>
                                                                            <td align='center'><input type='date' id='changebatt".$r['sensoro_id']."' class='form-control' placeholder='Text input' style='width:200px'></td>
                                                                        </tr>
                                                                        
                                                                    </table>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <button type='button' class='btn btn-default' onclick='editbatt(".$r['sensoro_id'].")' data-dismiss='modal'>Save</button>
                                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>";
                                                    // <!-- end modal change batt beacon   -->

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

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>

</html>
