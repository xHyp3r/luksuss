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
<div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
                        <h2 class="dart-heading" align = "center">Uzraksti savas domas par mums/Uzjautā kaut ko!</h2>
                    </div>
<section class="contactus-one" id="contactus">
<div class = "container">
<div class="contact-form"><!-- contact form -->
                        <form class="row" id="contact" name="contact" method="post" >
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="cName" id="cName" placeholder="Vārds" required >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="cSurname" id="cSurname" placeholder="Uzvārds" required >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" name="cEmail" id="cEmail" placeholder="E-pasts" required >
                            </div>
                            <div class="form-group col-md-12">
								<label for="InputMessage">Ziņojums/Atsauksme</label>
								<textarea class="form-control" name="cMessage" id="cMessage" rows="4" required></textarea>
                            </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase">NOSŪTĪT</button>
                        </form>
                    </div>
				</div>
</section>
</body>
</html>
