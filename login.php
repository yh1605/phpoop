<?php
require("classes/User2.php");
$user = new User;
session_start();

if(isset($_POST["login"])){
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $login = $user->login($username,$password);

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
           <div class="col-4 bg-info border-top-0 border border-dark mt-5">
                <h5>Account Login</h5>
           </div>  
        </div>
        <div class="row justify-content-center">
            <div class="col-4 border-bottom-0 border border-dark">
                <form method="post">
                    <div class="form-group"> 
                        <input type="text" name="uname" placeholder="Username" class="form-control mt-3 mb-3">
                        <input type="password" name="pass" placeholder="Password" class="form-control">
                        <div class="checkbox form-check mt-3 mb-3">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="login">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>