<?php 
    session_start();
    require_once 'database.php';
    require_once 'register-inc.php';
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                    <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <?php
                    if(!isset($_SESSION['login'])){ ?>
                    <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>


                    <?php  }else { ?>
                    <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>


                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>