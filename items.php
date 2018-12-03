<?php
require("classes/item.php");

$item = new Item;
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
            <div class="col mt-5">
                <div class="card">
                    <div class="card-head bg-dark text-light py-2 pl-2"><h5>Item list</h5></div>
                    <div class="card-body">
                        <form method="post">
                            <table class="table">
                                <thead>
                                    <th>ID</th>
                                    <th>Item Name</th>
                                    <th>Item Details</th>
                                    <th>Item Quantity</th>
                                    <th>Item Price</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = $item->select();
                                        if($result){
                                            foreach($result as $key =>$row){
                                                $id = $row['item_id'];
                                                echo "<tr>";
                                                echo "<td>" . $row['item_id'] . "</td>";
                                                echo "<td>" . $row['item_name'] . "</td>";
                                                echo "<td>" . $row['item_details'] . "</td>";
                                                echo "<td>" . $row['item_quantity'] . "</td>";
                                                echo "<td>" . $row['item_price'] . "</td>";
                                                echo "<td>
                                                <a href='edititem.php?id=$id' class='btn btn-sm btn-info'>Edit</a>
                                                <a href='deleteitem.php?id=$id' class='btn btn-sm btn-danger'>Delete</a>
                                                </td>";
                                            }
                                        }
                                        else{
                                            echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                                        }

                                    ?>
                                </tbody>
                            </table>
                            <a href="additem.php" class="btn btn-sm btn-secondary">Add Item</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
    
</body>
</html>