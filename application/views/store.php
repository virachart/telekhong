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
                                    <!-- first name of user -->
                                    
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong> Testttt </strong>
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

                <style type="text/css">
                    .not-active {
                       pointer-events: none;
                       cursor: default;
                    }

                </style>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-desktop"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <?php
                        if ($allstore == null) {
                            echo "<li><center> You have only 1 store.</center> </li>";
                        }else{
                            foreach ($allstore as $r) {
                                $sta = "";
                                if ($r['status_store_id']=="1") {

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
                        <li class="active">
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
                                <li  class="active">
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
                <div class="col-lg-12">
                    <div class="col-lg-9">
                        <h1 class="page-header">
                            <?php echo $rs['store_name']; ?>  <small>(Package <?php echo $rs['package_name']; ?>)</small>
                        </h1>
                    </div>
                <div>
                    <div class="col-lg-3"style="margin-top :45px">
                            <button type="button" class="btn btn-warning btn-default " data-toggle="modal" data-target="#myModal3">Change Package</button>
                            <?php
                                echo anchor("storeowner/del/".$this->session->userdata("storeid"), "<button type='button' class='btn btn-danger pull-right' data-toggle='modal' data-target='#myModal'>Delete Store</button>");
                            ?>
                            <!-- <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Delete Store</button>    -->
                    </div>
    
      <!-- Modal content-->

      
      <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" >Change Package</h4>
                            </div>
                            <div class="modal-body"style="padding:50px 50px;">
          
                            <div class="col-sm-12">Select your new package :</div><br><hr>
                            
                            <div class="col-sm-12"><center>
                                <label class="radio-inline"><input type="radio" name="optradio" value="">Package 1</label>
                                <label class="radio-inline"><input type="radio" name="optradio" value="">Package 2</label>
                                <label class="radio-inline"><input type="radio" name="optradio" value="">Package 3</label>
                                <label class="radio-inline"><input type="radio" name="optradio" value="">Package 4</label>
                                </center></div><br>
                            
          
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Change</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                        
                        </div>
                        </div>
                        </div>
                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
    
      <!-- Modal content-->
                <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm</h4>
                    </div>
                    <div class="modal-body">
                    <p>This store was deleted , Are you sure ?</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
      
                </div>
            </div>
                </div>
                </div>
                    
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                               <div class="col-md-12"><h4>Limit of your package in this period </h4></div> 
                            </li>
                            <div class="progress">
                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php $up = $rs['upload']; echo $up;?>" aria-valuemin="0" aria-valuemax="<?php $lim=$rs['upload_limit']; echo $lim;?>" style="width: <?php $cal=($up/$lim)*100; if($cal==0) echo "3"; else echo $cal; ?>%;">
                    <?php 
                       
                        echo $up." / ".$lim; 
                        
                        ?>
                    </div>
                    </div>
                        </ol>
                    </div>


                
                <!-- /.row -->
                
                    <script type="text/javascript">
                        function getedit(id){
                            edit=false;
                            infoid=id;
                            $.ajax({
                                url:"store/showinfo/"+id,
                                type: "POST",
                                dataType:"json",
                                success:function(res){
                                    console.log(JSON.stringify(res));
                                    var textname = "<h3 class='panel-title'> "+res.info_name+"</h3>";
                                    var textpic = "<?=base_url();?>images/info/"+res.info_pic;
                                    var textbutton = "<a href='<?=base_url();?>index.php/storeowner/del/"+res.info_id+"' onclick='javascript:return confirm('Do you want to delete?');'><button type='button' class='btn btn-danger btn-default pull-right' style='text-align:right;'>Delete</button></a>";
                                    $("#info_detail").html(textname);
                                    $("#infopic").attr("src",textpic);
                                    $("#des").attr("value",res.info_descrip);
                                    $("#begin").attr("value",res.info_begin_date);
                                    $("#expire").attr("value",res.info_expire_date);
                                    $("#qr").attr("value",res.qr);
                                    $("#infodel").html(textbutton);

                                },
                                error:function(err){
                                    console.log("error : "+err);
                                },
                            });
                        }


                    </script>
                
                
         
                <!-- /.row -->
                
                    <div class="col-lg-12">
                        <div class="col-lg-5" style="width:472px;">
                        <div class="panel panel-primary">    
                            <div class="panel-heading" id="info_detail">
                                <h3 class="panel-title"> sale 20 % for this month !!</h3>
                            </div>
                            <div class="panel-body" style="min-height: 760px; max-height: 760px;" >
                                <img class="img-thumbnail" src="http://placehold.it/420x420" id="infopic" alt="" >
                            <div class="col-sm-12" style="margin-top:12px">
                                    
                            <table >
                                <tr>
                                    <td>Description :&nbsp</td> 
                                    <td><textarea name="des" rows="3" class="form-control" style="width:250px;" id="des" disabled></textarea></td>
                                </tr>
                                <tr><td>&nbsp</td></tr>
                                <tr>
                                    <td>Begin Date :&nbsp</td>
                                    <td><input type="text" name="bdate" class="form-control" id="begin" disabled/></td>
                                </tr>
                                <tr><td>&nbsp</td></tr>
                                <tr>
                                    <td>Expire Date :&nbsp</td> 
                                    <td><input type="text" name="edate" class="form-control" id="expire" disabled/></td>
                                </tr>
                                <tr><td>&nbsp</td></tr>
                                <tr>
                                    <td>QR Code :&nbsp</td> 
                                    <td><input type="text" name="qrcode" class="form-control" style="width:50px;" id="qr" disabled/></td>
                                </tr>
                                
                                        
                            </table>
                            <br>
                            <?php
                                $amount = $lim - $up;
                                if ($amount < 1) {
                                    $dis = "disabled";
                                }else{
                                    $dis = null;
                                }

                                echo anchor("storeowner/addinfo/".$this->session->userdata('storeid'), "<button type='button' class='btn btn-primary btn-default pull-right' style='margin-right:20px;margin-left:10px;' ".$dis." >+ New Upload</button>");
                                // echo anchor("storeowner/del/".$this->session->userdata('storedel'), "<button type='button' class='btn btn-danger btn-default pull-right' style='text-align:right;'>Delete</button>",array("onclick"=>"javascript:return confirm('Do you want to delete?');"));
                            ?>
                            <!-- <a href="<?=base_url();?>index.php/storeowner/addinfo/6"><button type="button" class="btn btn-primary btn-default pull-right" style="margin-right:20px;margin-left:10px;">+ New Upload</button></a> -->
                            <span id="infodel"></span>
                            <!-- <a href="<?=base_url();?>index.php/storeowner/del" onclick="javascript:return confirm('Do you want to delete?');"><button type="button" class="btn btn-danger btn-default pull-right" style="text-align:right;">Delete</button></a> -->
                            </div>
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Confirm</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>This info was deleted , Are you sure ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    
                        <div class="col-lg-7" style="width:660px;">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i>Information Log</h3>
                            </div>
                       
                            <div class="panel-body" style="min-height: 760px; max-height: 760px;overflow-y: scroll;">

                                <div  class="list-group">

                                <?php
                                    if ($info != null) {
                                        foreach ($info as $key => $r) {
                                            echo "<a href='javascript:void(0);' onclick='getedit(".$r['info_id'].")' class='list-group-item'>
                                                <img class='img-thumbnail' src='".base_url()."images/info/".$r['info_pic']."' width='75px' height='75px' alt=''> ".$r['info_name']."
                                                </a>";

                                        }

                                        
                                        
                                    }else{
                                        echo "<center><h2> --- No Information ---</h2> </center>";
                                    }

                                ?>

                                    <!-- <a href="#" class="list-group-item">
                                        <span class="badge" style="margin-top :35px">just now</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 50 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge "style="margin-top :35px">2 weeks ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> get 1 free 1 
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"style="margin-top :35px">1 month ago</span>
                                        <img class="img-thumbnail" src="http://placehold.it/75x75" alt=""> sale 20 %
                                    </a> -->

                                </div>
                                <!--<div class="text-right">
                                    <a href="<?=base_url()?>infolog">View all information <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                -->
                            </div>
                        </div>
                        </div>  
                    </div>
            
               
                    <center><div class="col-lg-12">
                                <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Upload Information</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="col-lg-12" >  
                                            <div class="form-group col-lg-4 " style="margin-top:55px;">
                                                <label>Upload image here</label>
                                                <input type="file" name="upl" multiple="true">
                                            </div>
                                            <div class="col-lg-8" >
                                                <div class="col-lg-4">Topic :</div><div class="col-lg-8"><input type="text" name="topic" id="topic" class="form-control"/></div>
                                                <div class="col-lg-12" style="margin-top:10px;"></div>
                                                <div class="col-lg-4">Category :</div>
                                                    <div class="dropdown col-lg-8">
                                                        <div class="form-group">
                                                            
                                                            <select class="form-control" id="sel1">
                                                                <option>Select Category</option>
                                                                <option>Food</option>                           
                                                                <option>Fashion</option>
                                                                <option>IT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="col-lg-12"></div>
                                                <div class="col-lg-4">Expire Date :</div>
                                                <div class="col-lg-8">
                                                    <form action="action_page.php">
                                                        <input type="date" name="day" class="form-control">  
                                                    </form>
                                                </div>
                                                <div class="col-lg-12" style="margin-top:10px;"></div>
                                                <div class="col-lg-4">Description :</div><div class="col-lg-8"><textarea name="description" id="des" class="form-control"></textarea></div>
                                                <div class="col-lg-12"></div>
                                                <div class="col-lg-4" style="margin-top:20px;">Use QR Coce ? :</div>
                                                <div class="col-lg-8" style="margin-top:20px;">
                                                    <label class="radio-inline"><input type="radio" name="optradio">YES</label>
                                                    <label class="radio-inline"><input type="radio" name="optradio">NO</label>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer" style="margin-top:250px">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal4">Submit</button>
                                            <div class="modal fade" id="myModal4" role="dialog">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirm</h4>
                                                        </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                    </center>
                
                
                     
                    
                    
                <!-- /.row -->

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

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/morris/morris-data.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ui.widget.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.iframe-transport.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.fileupload.js"></script>  
    <script src="<?=base_url()?>assets/js/script.js"></script>

    
</body>

</html>
