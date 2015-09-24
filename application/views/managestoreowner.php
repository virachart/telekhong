<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Store</title>
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
</head>
<body>
    <div id="page-wrapper">
    <center><h1>Edit Store</h1></center>
    <?php 
        echo form_open_multipart("managestoreowner/edit/");
    ?>
    <div style="margin-top:40px">
    <table align="center">
        <tr>
            <td>Strore Name : &nbsp</td>
            <td><input type="text" name="name" class="form-control" style="width:200px" value="<?php echo $store['store_name']; ?>"></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Address : </td>
            <td><textarea class="form-control" name="address" rows="3" style="width:250px"><?php echo $store['address']; ?></textarea></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Telepphone : </td>
            <td><input type="text" name="tel" class="form-control" style="width:200px" value="<?php echo $store['tel']; ?>"></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Detail : </td>
            <td><textarea class="form-control" name="detail" rows="3" style="width:250px"><?php echo $store['detail']; ?></textarea></td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Opentime : </td>
            <td class="input-group bootstrap-timepicker timepicker">
                <input id="timepicker1" type="text" class="form-control input-small" name="opti" value="<?php echo substr($store['open_time'], 0,5); ?>"> 
                <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                </td>
        </tr>
        <tr>
            <td>&nbsp</td> 
                
        </tr>
        <tr>
            <td>Closetime : </td> 
                <td class="input-group bootstrap-timepicker timepicker">
                <input id="timepicker2" type="text" class="form-control input-small" name="clti" value="<?php echo substr($store['open_time'], 8,5); ?>">
                <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                </td> 
                
        </tr>
        <tr><td>&nbsp</td></tr> 
        <tr>
            <td>Store Picture : </td>
            <td>
                <input type="file" id="image" name="picture">
                <label>(Picture size less than 1024x1024 pixel is best size)</label>
            </td>
        </tr>
        <tr><td>&nbsp</td></tr> 
        </table>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="text-align:center" >
            <?php echo anchor("store","<button type='button' style='width:70px' class='btn btn-default'>Cancle</button>"); ?>
           &nbsp&nbsp &nbsp&nbsp
           <input class="btn btn-primary" style="width:70px" type="submit" name="btsave" value="Save"> 
            
        </div>
    
    <?php 
        echo form_close();
    ?>
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
 </div>
</body>
</html>