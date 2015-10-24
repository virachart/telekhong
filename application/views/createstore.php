
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

        <link type="text/css" href="css/bootstrap.min.css" />
        <script src="<?=base_url()?>assets/js/jquery.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.cropit.js"></script>
    <!-- Bootstrap Core CSS -->
    


<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <script>
        function checkfield() {

            if (stn.value == '') {
                alert("Please input store name.");
                document.getElementById("stn").focus();
                return false;
            }else if (address.value == '') {
                alert("Please input store address.");
                document.getElementById("address").focus();
                return false;
            }else if (telnum.value == '') {
                alert("Please input store telephone number.");
                document.getElementById("telnum").focus();
                return false;
            }else if (time1.value == '') {
                alert("Please input store open time.");
                document.getElementById("time1").focus();
                return false;
            }else if (time2.value == '') {
                alert("Please input store close time.");
                document.getElementById("time2").focus();
                return false;
            }else if (des.value == '') {
                alert("Please input store detail.");
                document.getElementById("des").focus();
                return false;
            }else if (document.getElementById("image").value == '') {
                alert("Please upload store picture.");
                 document.getElementById("image").focus();
                return false;
            }
            return true;
        }
        function numCheck(tel) {
            var tele = document.getElementById("telnum").value; 
            e_k=event.keyCode
            //if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
            if (e_k != 13 && (e_k < 48) || (e_k > 57))  {
                    event.returnValue = false;
                    alert("Input Number Only");
                }
                else if(tele.length>9){
                    event.returnValue = false;
                    alert("Your telephone number must not be over 10 digits");
                }
        }          
        </script>
        <style>
                      .cropit-image-preview {
                        background-color: #f8f8f8;
                        background-size: cover;
                        border: 1px solid #ccc;
                        border-radius: 3px;
                        margin-top: 7px;
                        width: 400px;
                        height: 400px;
                        cursor: move;
                    }
                    .cropit-image-background {
                        opacity: .2;
                        cursor: auto;
                    }
                    .image-size-label {
                        margin-top: 10px;
                    }
                    input {
                        display: block;
                    }

                </style>

            

            <div id="page-wrapper">

                <center><h3>Create Store</h3></center><hr>

                <form action="<?php echo site_url();?>/createstore/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();">
                <!-- store name -->
                <div class="col-lg-6" style="text-align:right;" >Store Name :</div>
                <div class="col-lg-6"><input type="text" name="storename" class="form-control" placeholder="Store name" style="width:200px" id="stn"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store address -->
                <div class="col-lg-6" style="text-align:right;" >Address :</div>
                <div class="col-lg-6"><textarea class="form-control" name="address" rows="3" style="width:250px" placeholder="Address" id="address"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Tel -->
                <div class="col-lg-6" style="text-align:right;" >Telephone Number :</div>
                <div class="col-lg-6"><input type="text" name="tel" class="form-control" placeholder="0X-XXXX-XXXX" style="width:200px" id="telnum" onkeypress= numCheck();></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Open Time -->
                <div class="col-lg-6" style="text-align:right;" >Open Time :</div>
                
                <div class="col-lg-2">
                    <div >
                        <input id="time1" type="time" class="form-control input-small" name="opti"  >
                    
                </div>
                </div>
                <div class="col-lg-1" style="text-align:center">to</div>
                <div class="col-lg-2">
                    <div >
                        <input id="time2" type="time" class="form-control input-small" name="clti" >
                    
                </div>
                </div> 
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store detail -->
                <div class="col-lg-6" style="text-align:right;" >Store Detail :</div>
                <div class="col-lg-6"><textarea class="form-control" name="detail" rows="3" style="width:250px" placeholder="Detail of Store" id="des"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store picture -->
                <div class="col-lg-6" style="text-align:right;" >Picture :</div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal" >Image Upload</button>
                        <div class="modal fade" id="modal" role="dialog">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                        <h4 class="modal-title" >Image Upload</h4>
                                    </div>
                                    <div class="modal-body"style="padding:20px 50px 20px 50px;">
                                        <p style="text-align:center;color:red">You can upload image.jpg/.png/.gif/.jpeg only ! </p>
                                        <div class="image-editor" style="margin-left:50px">
                                            <input type="file" id="image"  name='picture' class="cropit-image-input" onchange="enablebt();" >
                                            <div class="cropit-image-preview" ></div>
                                            <div class="image-size-label">
                                                Resize image
                                            </div>
                                            <input type="range" class="cropit-image-zoom-input" style="width:400px">
                                            <input type="hidden" name="image-data" class="hidden-image-data" />


                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="export btn btn-primary" disabled id="bt1" data-dismiss="modal">Crop</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>

                                    </div>
                                    </div>
                                    </div>
                                    </div>
                        <script>

                            $('.image-editor').cropit();
                            $('.export').click(function() {
                              var imageData = $('.image-editor').cropit('export');
                              $('.cropped').empty();
                              $('.cropped').append('<img src="'+imageData+'" height="120" width="120">');

                          });
                            $('form').submit(function() {
                                // Move cropped image data to hidden input
                                var imageData = $('.image-editor').cropit('export');
                                $('.hidden-image-data').val(imageData);
                                return true;
                            });

                        </script>
                        <script>
                            function enablebt(){
                                document.getElementById("bt1").disabled = false;

                            }
                        </script>

                    

                    <div class="col-lg-12" style="margin-top:10px;"></div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                    <div class="cropped"></div>
                    </div>
                    
                    <div class="col-lg-12">&nbsp</div>
                    <div class="col-lg-6" style="text-align:right;" >Package :</div>
                    <div class="col-lg-6">
                    <select class="form-control col-lg-8" name="pack" style="width:300px ;">

                      <?php
                        foreach ($pack as $r) {
                            echo "<option value='".$r['package_id']."'>Package ".$r['package_name']." : ".$r['price']."B/month</option>";
                        }
                        
                      ?>
                   </select>
                   
                   <button type="button" class="btn btn-info col-lg-3" data-toggle="modal" data-target="#myModal1" style="margin-right:10px;margin-left:20px;width:140px">Package Detail</button>
                   <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title" >Package Detail</h4>
                </div>
                <div class="modal-body">

                    <table style="width:100%;color:#000000">
                <tr>
                    <th colspan="2" style="width:10%">Package</th>
                    <td>Bronze</td>
                    <td>Silver</td>
                    <td>Gold</td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Upload Limit</th>
                    <td>5</td>
                    <td>10</td>
                    <td>15</td>       
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Khong Use</th>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <th rowspan="6" style="width:10%">Statistics</th>

                </tr>
                <tr>
                    <td >General</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Message Receive</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Come to Store</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >QR Buy</td>      
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <td >Come back again</td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-remove" style="border:none;color:red"></span></td>
                    <td><span class="glyphicon glyphicon-ok" style="border:none;color:green"></span></td>
                </tr>
                <tr>
                    <th colspan="2" style="width:10%">Service Charge</th>
                    <td>1,200 x 12 Month</td>
                    <td>2,000 x 12 Month</td>
                    <td>3,000 x 12 Month</td>
                </tr>
            </table>
            
            <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: center;    
            }
            </style>


                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
        </div>

            </div>	
            <div class="col-lg-12" style="text-align:center;margin-top:40px;" >
                <input class="btn btn-success" type="submit" name="btsave" value="Create & Pay" style="margin-left: 30px">
                &nbsp&nbsp&nbsp
                <?php echo anchor("store", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                
            </div>
            </form>

            <div>
             <br>
             
         </div>

        

         <center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 40px">
                   <ol class="breadcrumb">
                     <li>You can contact us in this page </li>
                                <li> facebook : www.facebook.com/Telekhong</li>
                                <li> KingMongkutt's University of technology thonburi</li>
                 </ol>
             </div>
         </div>
     </center>
     <!-- /.container-fluid -->

 </div>
 <!-- /#page-wrapper -->


</body>

</html>
