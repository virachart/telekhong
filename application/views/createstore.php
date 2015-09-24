
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
        <link  href="<?=base_url()?>assets/css/bootstrap-timepicker.min.css" />
        <script src="<?=base_url()?>assets/js/jquery-1.9.1.min.js"></script>
        <script  src="<?=base_url()?>assets/js/bootstrap-timepicker.min.js"></script>
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
            }else if (timepicker1.value == '') {
                alert("Please input store open time.");
                document.getElementById("timepicker1").focus();
                return false;
            }else if (timepicker2.value == '') {
                alert("Please input store close time.");
                document.getElementById("timepicker2").focus();
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
                else if(tele.length>10){
                    event.returnValue = false;
                    alert("Your telephone number must not be over 10 digits");
                }
        }          
        </script>

            

            <div id="page-wrapper">

                <center><h3>Create Store</h3></center><hr>

                <form action="http://localhost/telekhong2/index.php/createstore/create" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="javascript:return checkfield();">
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
                    <div class="input-group bootstrap-timepicker timepicker">
                        <input id="timepicker1" type="text" class="form-control input-small" name="opti" placeholder="Put HH:MM & click-->" >
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                </div>
                </div>
                <div class="col-lg-1" style="text-align:center">to</div>
                <div class="col-lg-2">
                    <div class="input-group bootstrap-timepicker timepicker">
                        <input id="timepicker2" type="text" class="form-control input-small" name="clti" placeholder="Put HH:MM & click-->" >
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                </div>
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store detail -->
                <div class="col-lg-6" style="text-align:right;" >Store Detail :</div>
                <div class="col-lg-6"><textarea class="form-control" name="detail" rows="3" style="width:250px" placeholder="Detail of Store" id="des"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store picture -->
                <div class="col-lg-6" style="text-align:right;" >Store Picture :</div>
                <div class="form-group col-lg-6">
                    <input type="file" id="image" name="picture" >
                    <label>(Picture size less than 1024x1024 pixel is best size)</label>
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                

                    <div class="col-lg-6" style="text-align:right;" >Package :</div>
                    <div class="col-lg-6">
                    <select class="form-control col-lg-8" name="pack" style="width:300px ;">

                      <?php
                        foreach ($pack as $r) {
                            echo "<option value='".$r['package_id']."'>Package ".$r['package_name']." : ".$r['price']."B/month</option>";
                        }
                        
                      ?>
                   </select>
                   <div class="col-lg-1"></div>
                   <button type="button" class="btn btn-info col-lg-3" data-toggle="modal" data-target="#myModal1" style="margin-right:10px;width:140px">Package Detail</button>
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
                    <th colspan="2" style="width:10%">Beacon Use</th>
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
                    <td >Info Receive</td>      
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
               
               <div class="col-lg-12" style="text-align:center;margin-top:40px; margin-down: 30px" >

                <?php echo anchor("store", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                <input class="btn btn-success" type="submit" name="btsave" value="Create & Pay" style="margin-left: 30px">


            </div>	

            </form>

            <div>
             <br>
             <script type="text/javascript">
                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    template: 'modal',
                    appendWidgetTo: 'body',
                    showSeconds: false,
                    showMeridian: false,
                    defaultTime: false
                });
            
           
                $('#timepicker2').timepicker({
                    minuteStep: 1,
                    template: 'modal',
                    appendWidgetTo: 'body',
                    showSeconds: false,
                    showMeridian: false,
                    defaultTime: false
                });
            
            </script>
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



<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>


</body>

</html>
