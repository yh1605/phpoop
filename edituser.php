<?php
require("classes/User2.php");
$user = new User;
$id = $_GET['id'];
$row = $user->selectOne($id);

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];

    $updateuser = $user->update($id, $username, $firstname, $lastname);
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
                <div class="card-header bg-dark text-light"><h5>Edit User</h5></div>
                <form method="post">
                    <div class="form-group mt-2 mx-2">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>">
                    </div>
                    <div class="form-group mx-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>">
                    </div>
                    <div class="form-group mx-2">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $row['firstname'];?>">
                    </div>
                    <div class="form-group mx-2">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $row['lastname'];?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-info btn-block">Edit User</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>