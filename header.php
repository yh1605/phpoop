<?php
    require("classes/User2.php");
    session_start();

    $id = $_SESSION['userid'];
    $user = new User;
    $userdetail = $user->selectOne($id);

    echo $userdetail['username'];

    
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/website.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="img/artboard 1.png" width="50" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="items.php">Items</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navDropdown" data-toggle="dropdown">
                            <i class="fas fa-user"><?php echo "Welcome, " . $userdetail['firstname'] ." ". $userdetail['lastname'];?></i>
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-user-times">Logout</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>