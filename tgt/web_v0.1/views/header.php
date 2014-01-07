<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>USTogether</title>
    <link rel="stylesheet" type="text/css" href="assets/css/nonresponsivene.css"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">


    body {
        /*font-family: Helvetica, Verdana, Arial, sans-serif;*/
        font-size: 10pt;
        /*margin: 10px;*/
    }
    label {
        position: relative;
        vertical-align: middle;
        /*bottom: 1px;*/
    }
    input[type=text], input[type=password], input[type=submit], input[type=email] {
        display: block;
        /*margin-bottom: 15px;*/
    }
    input[type=checkbox] {
        /*margin-bottom: 15px;*/
    }
    </style>
</head>
<body>
    <?php

// show negative messages
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }

// show positive messages
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }

    ?>   
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
           <!--      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="index.php"><strong>USTogether</strong></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- left side -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="views/login.php">Login</a></li>
                    <li class="active"><a href="register.php">Sign up</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Team</a></li>
                            <li class="divider"></li>
                            <li><a href="#">About Us</a></li>

                <!-- <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li> -->
            </ul>
        </li>
    </ul>
</div><!--/.nav-collapse -->   
</div>
</div>  


