<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Luxus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/kontakti.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand">
        <img src="images/mainlogo.png" alt="logo" style="width:90px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index">Pakalpojumi, to cenas</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="galerija" id="navbardrop" data-toggle="dropdown">
                Galerija
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="galerija">Bildes</a>
                <a class="dropdown-item" href="video_galerija">Video</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="kontakti">Kontakti</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="sazina">Saziņa</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="register">Reģistrēties</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="luxus">Ielogoties</a>
        </li>
    </ul>
</nav>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<section class="contactus-one" id="contactus"><!-- Section id-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="map">
                    <iframe src="https://maps.google.com/maps?q=R%C4%ABgas%20Valsts%20Tehnikums&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                    <div class=" row contact-info">
                    <div class="col-md-12 col-sm-12">
                        <p class="addre"><i class="fa fa-map-marker"></i>Rīgas Valsts Tehnikums <br> Krišjāņa Valdemāra iela 1C, Centra rajons, Rīga, LV-1010</p>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+22803322">+371 22803322</a></p>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p class="mail-id"><i class="fa fa-envelope"></i>luxuss@inbox.lv</p>
                </div>
            </div>
            <div class=" col-md-5 col-sm-6">
                <div class="contact-block">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
</body>
</html>