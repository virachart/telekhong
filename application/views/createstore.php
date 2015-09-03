
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


            

            <div id="page-wrapper">

                <center><h3>Create Store</h3></center><hr>

                <?php echo form_open_multipart("createstore/create"); ?>
                <!-- store name -->
                <div class="col-lg-6" style="text-align:right;" >Store Name :</div>
                <div class="col-lg-6"><input type="text" name="storename" class="form-control" placeholder="Store name" style="width:200px"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store address -->
                <div class="col-lg-6" style="text-align:right;" >Address :</div>
                <div class="col-lg-6"><textarea class="form-control" name="address" rows="3" style="width:250px" placeholder="Address"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Tel -->
                <div class="col-lg-6" style="text-align:right;" >Telephone Number :</div>
                <div class="col-lg-6"><input type="text" name="tel" class="form-control" placeholder="0X-XXXX-XXXX" style="width:200px"></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store Open Time -->
                <div class="col-lg-6" style="text-align:right;" >Open Time :</div>
                <div class="col-lg-6">
                    <select class="form-control" name="opho" style="width:70px ; display : inline;">
                        <?php 
                        for ($x = 0; $x <= 23; $x++) {
                            echo "<option value='".$x."'>".$x."</option>";
                        } 
                        ?>
                    </select>
                    :
                    <select class="form-control" name="opmi" style="width:70px ; display : inline;">
                        <?php 
                        for ($x = 0; $x <= 59; $x++) {
                            echo "<option value='".$x."'>".$x."</option>";
                        } 
                        ?>
                    </select>
                     To 
                     <select class="form-control" name="clho" style="width:70px ; display : inline;">
                        <?php 
                        for ($x = 0; $x <= 23; $x++) {
                            echo "<option value='".$x."'>".$x."</option>";
                        } 
                        ?>
                    </select>
                    :
                    <select class="form-control" name="clmi" style="width:70px ; display : inline;">
                        <?php 
                        for ($x = 0; $x <= 59; $x++) {
                            echo "<option value='".$x."'>".$x."</option>";
                        } 
                        ?>
                    </select>
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store detail -->
                <div class="col-lg-6" style="text-align:right;" >Store Detail :</div>
                <div class="col-lg-6"><textarea class="form-control" name="detail" rows="3" style="width:250px" placeholder="Detail of Store"></textarea></div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                <!-- store picture -->
                <div class="col-lg-6" style="text-align:right;" >Store Picture :</div>
                <div class="col-lg-6">
                    <input type="file" id="image" name="picture"  /> 
                    (Picture size less than 1024x1024 pixel is best size)
                    
                </div>
                <div class="col-lg-12" style="margin-top:30px;"></div>

                

                    <div class="col-lg-6" style="text-align:right;" >Package :</div>
                    <div class="col-lg-6">
                      <select class="form-control" name="pack" style="width:300px ;">
                       
                       <option value="1">Package 1 : 1000B/month</option>
                       <option value="2">Package 2 : 2000B/month</option>
                       <option value="3">Package 3 : 3000B/month</option>
                       <option value="4">Package 4 : 4000B/month</option>
                   </select>
               </div>
               <div class="col-lg-12" style="text-align:center;margin-top:40px; margin-down: 30px" >

                <?php echo anchor("dashboardowner", "<button type='button' class='btn btn-danger'>Cancle</button>"); ?>
                <input class="btn btn-success" type="submit" name="btsave" value="Create" style="margin-left: 30px">


            </div>	

            <?php echo form_close();?>

            <div>
             <br>
         </div>

         <center>
            <div class="row">
                <div class="col-lg-12" style="margin-top: 40px">
                   <ol class="breadcrumb">
                     <li>You can contact us in this page </li>
                     <li> facebook : www.facebook.com/promotion2you</li>
                     <li> tel.08X-XXX-XXXX KingMongkutt's University of technology thonburi</li>
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
