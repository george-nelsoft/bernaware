<?php
include_once("backend/ConfigAccess.php"); 
$page = str_replace("/","",$_SERVER['PHP_SELF']); 
$title = getTitleAndTab($page)[0];
$tabNumber = getTitleAndTab($page)[1];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Bernaware</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="<?php echo strtolower(getCurrentTheme());?>" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Bernaware
                </a>
            </div>

            <ul class="nav">
                <li <?php echo setActiveTab($tabNumber,0);?>>
                    <a href="index.php">
                        <i class="pe-7s-note2"></i>
                        <p>Mantis Quick Editor</p>
                    </a>
                </li>
                <li <?php echo setActiveTab($tabNumber,1);?>>
                    <a href="weeklyreport.php">
                        <i class="pe-7s-graph"></i>
                        <p>Weekly Report</p>
                    </a>
                </li>
                <li <?php echo setActiveTab($tabNumber,2);?>>
                    <a href="monthlyreport.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Monthly Report</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $title;?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Theme
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li <?php echo setActiveTheme(0);?>><a href="#" onclick="saveNewTheme(this)">Blue</a></li>
                                <li <?php echo setActiveTheme(1);?>><a href="#" onclick="saveNewTheme(this)">Azure</a></li>
                                <li <?php echo setActiveTheme(2);?>><a href="#" onclick="saveNewTheme(this)">Green</a></li>
                                <li <?php echo setActiveTheme(3);?>><a href="#" onclick="saveNewTheme(this)">Red</a></li>
                                <li <?php echo setActiveTheme(4);?>><a href="#" onclick="saveNewTheme(this)">Orange</a></li>
                                <li <?php echo setActiveTheme(5);?>><a href="#" onclick="saveNewTheme(this)">Purple</a></li>
                                <li <?php echo setActiveTheme(6);?>><a href="#" onclick="saveNewTheme(this)">Gray</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
