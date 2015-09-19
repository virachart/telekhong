<!DOCTYPE html>
<html>
<head>
    <title>Edit Store</title>
</head>
<body>
    <h1>Edit Store</h1>
    <?php 
        echo form_open_multipart("managestoreowner/edit/");
    ?>
    <table>
        <tr>
            <td>Strore Name : </td>
            <td><input type="text" name="name" class="form-control" style="width:200px" value="<?php echo $store['store_name']; ?>"></td>
        </tr>
        <tr>
            <td>Address : </td>
            <td><textarea class="form-control" name="address" rows="3" style="width:250px"><?php echo $store['address']; ?></textarea></td>
        </tr>
        <tr>
            <td>Telepphone : </td>
            <td><input type="text" name="tel" class="form-control" style="width:200px" value="<?php echo $store['tel']; ?>"></td>
        </tr>
        <tr>
            <td>Detail : </td>
            <td><textarea class="form-control" name="detail" rows="3" style="width:250px"><?php echo $store['detail']; ?></textarea></td>
        </tr>
        <tr>
            <td>Opentime : </td>
            <td>
                <input id="timepicker1" type="text" class="form-control input-small" name="opti" value="<?php echo substr($store['open_time'], 0,5); ?>"> 
                <span> to </span>
                <input id="timepicker2" type="text" class="form-control input-small" name="clti" value="<?php echo substr($store['open_time'], 8,5); ?>">
            </td>
        </tr>
        <tr>
            <td>Store Picture : </td>
            <td>
                <input type="file" id="image" name="picture">
                <label>(Picture size less than 1024x1024 pixel is best size)</label>
            </td>
        </tr>

        <tr>
            <td>&nbsp</td>
            <td><input type="submit" name="btsave" value="Save"> &nbsp <?php echo anchor("store","Cancle"); ?></td>
        </tr>
    </table>
    <?php 
        echo form_close();
    ?>
</body>
</html>