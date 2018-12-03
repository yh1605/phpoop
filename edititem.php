<?php
require("classes/item.php");
$item = new Item;
$id = $_GET['id'];
$row = $item->selectOne($id);

if(isset($_POST["save"])){
    $iname = $_POST['iname'];
    $idetail = $_POST['idetail'];
    $iquantity = $_POST['iquantity'];
    $iprice = $_POST['iprice'];

    $updateitem = $item->update($id, $iname, $idetail, $iquantity, $iprice);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mt-5">
            <div class="card">
                <div class="card-header bg-dark text-light"><h5>Add item</h5></div>
                <form method="post">
                    <div class="form-group">
                        <label>Item ID</label>
                        <input type="text" name="itemid" class="form-control" value="<?php echo $row['item_id'];?>">
                    </div>
                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" name="iname" class="form-control" value="<?php echo $row['item_name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Item Details</label>
                        <input type="text" name="idetail" class="form-control" value="<?php echo $row['item_details'];?>">
                    </div>
                        <label>Item Quantity</label>
                        <input type="text" name="iquantity" class="form-control" value="<?php echo $row['item_quantity'];?>">
                    </div>
                    <div class="form-group">
                        <label>Item Price</label>
                        <input type="text" name="iprice" class="form-control" value="<?php echo $row['item_price'];?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-info form-control">Save</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>