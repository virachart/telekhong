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
                                <a href="<?php echo site_url('auth/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                                <li class="active">
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
                                    <a href="<?=base_url()?>index.php/managesensoro">Manage Khong</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- /.navbar-collapse -->
        </nav>

        <script type="text/javascript">
           // $('#nameadmin').live('keypress',function(e){
           //      var name = $("#nameadmin").val();
           //      $.ajax({
           //          url:"<?php echo site_url("manageuser/seadmin");?>/",
           //          type: "POST",
           //          data: "name="+name,
           //          dataType:"json",
           //          success:function(res){
           //              console.log(JSON.stringify(res));
           //              var obj = jQuery.parseJSON(res);
           //              var fb= obj.fbid;
           //              alert(fb.length);
           //              var settable = "";
           //              // var co = res.length ;
           //              // alert(co);
           //              // if (co > 0) {
           //              //     for (i = 0; i < co; i++) { 
           //              //         settable = settable+" <tr><td align='center'><input type='radio' name='user' value='"+res.fbid+"'></td><td align='center'>"+res.fbid[i]+"</td><td align='center'>"+res.fbname[i]+"</td><td align='center'>"+res.sex[i]+"</td><td align='center'>"+res.regis[i].substr(0,10)+"</td></tr>";
           //              //     }
           //              // }else{
           //              //     settable = "<td colspan='5' align='center'>Not Have User</td>";
           //              // }
           //              // $("#tbadmin").html(settable);
                        
           //          },
           //          error:function(err){
           //              console.log("error : "+err);
           //          },
           //      });
           //  });
        </script>

        <script type="text/javascript">
            // function searchuser (){
                
            // };
        </script>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1>All User</h1></center>
                                <div class="modal fade" id="myModaladmin" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"></button>
                                                <h4 class="modal-title" >Vote to Admin</h4>
                                            </div>
                                        <div class="modal-body" style="padding:20px 30px;">
                                            <div class="col-lg-12 pull-left" >
                                            <label class="pull-right">
                                                <input type="text" id="nameadmin" class="form-control col-lg-1" style="width: 200px;" placeholder="Facebook Name">
                                            </label>
                                                
                                                    <!-- &nbsp
                                                <input class="btn btn-default " type="submit" name="btsave" value="Search"> -->
                                            </div>
                                                                 
                                        <!-- <div class="col-lg-12"> -->
                                            <!-- <label >
                                                <input type="radio" name="selectsearch" id="cat1" value="fb_name"> Facebook Name
                                            </label> -->
                                            <!-- <label >
                                                <input type="radio" name="selectsearch" id="cat1" value="fb_id" checked="checked"> Facebook ID &nbsp
                                            </label> -->
                                        <!-- </div> -->

                                            <table class="table1 col-lg-12" style="margin-top:20px">
                                                <style>
                                                    .table1 th{
                                                        background-color: #2B68A5;
                                                        color: #ffffff;
                                                        text-align: center;
                                                        
                                                    }
                                                </style>
                                                <thead width="100%">
                                                    <tr>
                                                        <th >Select</th>
                                                        <th >Facebook ID</th>
                                                        <th >Facebook Name</th>
                                                        <th >Gender</th>
                                                        <th >Register Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbadmin">
                                                <?php echo form_open("manageuser/addadmin"); ?>
                                                    <tr>
                                                        <td colspan="5" align="center">Please search for vote admin.</td>
                                                    </tr>
                                                    
                                                </tbody>
                                                </table>
                                        </div>
                                        <div class="modal-footer" style="text-align:center;margin-top:80%">
                                            <button type="button" class="btn btn-success" onclick="javascript:return confirm('Confirm for add admin!!');">Confirm</button>
                                                &nbsp&nbsp&nbsp
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                                            <?php echo form_close(); ?>                  
                                        </div>
                                        </div>
                                    </div>
                                </div>


                                

                        <div class="table-responsive">
                            <table class="table  table-hover">
                                <div>
                                <form action="<?php echo site_url('manageuser/search');?>" method = "post">
                                        <!-- <button type="button" class="btn btn-warning pull-left"  data-toggle="modal" data-target="#myModaladmin">Vote to Admin</button> -->
                                            
                                        <div class="pull-right">
                                            <input class="btn btn-default pull-right" type="submit" name="btsave" value="Search">
                                            <input type="text" name="searchfb" class="form-control pull-right" style="width: 200px;" placeholder="Search Input">

                                        </div>
                                     
                                     <div class="col-lg-12">
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="fb_name"> Facebook Name
                                        </label>
                                        <label class="pull-right">
                                            <input type="radio" name="selectsearch" id="cat1" value="fb_id" checked="checked"> Facebook ID &nbsp
                                        </label>
                                        <!-- <label class="pull-left"><a href="<?php //echo site_url('votead');?>"><button type='button' class='btn btn-warning'>Vote Admin</button></a></label> -->
                                    </div>
                                     </form>
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
                                        <th>Facebook ID</th>
                                        <th>Facebook Name</th>
                                        <th>Gender</th>
                                        <th>Register Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(count($rs)==0)
                                        {
                                            echo "<tr><td colspan='5' align='center'>---Don't Have User. Please Search Again!!!----</td></tr>";
                                        }else {
                                            $no = $this->uri->segment(3)+1;
                                            // echo var_dump($rs);
                                            foreach ($rs as $r) {
                                                $tr = "";
                                                if (($no%2) == 1 ) {
                                                    $tr = "class = 'info' ";
                                                }
                                                echo "<tr ".$tr.">";
                                                echo "<td style='text-align:center;'>".$no."</td>";
                                                echo "<td>".$r['fb_id']."</td>";
                                                echo "<td>".$r['fb_name']."</td>";
                                                echo "<td style='text-align:center;'>".$r['sex']."</td>";
                                                echo "<td style='text-align:center;'>".$r['user_date']."</td>";

                                                // echo "<td style='text-align:center;'> <button type='button' class='btn btn-warning'  data-toggle='modal' data-target='#myModaladmin".$r['fb_id']."'  >";
                                                // echo "Vote To Admin";
                                                // echo "</button>";
                                                // echo "</td>";
                                                // echo "<td>";
                                                // echo "<div class='modal fade' id='myModaladmin".$r['fb_id']."' role='dialog'>
                                                //         <div class='modal-dialog'>
                                                //           <div class='modal-content'>
                                                //             <div class='modal-header'>
                                                //                 <button type='button' class='close' data-dismiss='modal'></button>
                                                //                 <h4 class='modal-title' >Confirm Vote Admin</h4>
                                                //             </div>
                                                //             <div class='modal-body'style='padding:50px 50px;'>

                                                //                 <table style='margin : 0 auto;'>
                                                //                     <tr >
                                                //                         <td align='right'>FB ID : &nbsp</td>
                                                //                         <td>".$r['fb_id']."</td>
                                                //                     </tr>
                                                //                     <tr><td>&nbsp</td></tr>
                                                //                     <tr >
                                                //                         <td align='right'>Name : </td>
                                                //                         <td >".$r['fb_name']."</td>
                                                //                     </tr>
                                                //                     <tr><td>&nbsp</td></tr>
                                                                    
                                                //                 </table>
                                                //             </div>
                                                //             <div class='modal-footer'>";
                                                //                 echo anchor("manageuser/addadmin/".$r["fb_id"], "<button type='button' class='btn btn-success'>Confirm</button>");
                                                //             echo " &nbsp<button type='button' class='btn btn-danger' data-dismiss='modal'>Cancle</button>
                                                //             </div>

                                                //         </div>
                                                //     </div>
                                                // </div>";
                                                // echo "</td>";

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
    

</body>

</html>
