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
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href = "index.php">
        <img src="images/mainlogo.png" alt="logo" style="width:90px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index">Pakalpojumi, to cenas</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="galerija.html" id="navbardrop" data-toggle="dropdown">
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
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Reģistrēties</h5>
                    <form action = "register" class="form-signin" method = "post">
                        <div class="form-label-group">
                            <input type="email" name = "clientEmail" id="clientEmail" class="form-control" placeholder="E-pasts" required autofocus>
                            <label for="clientEmail"></label>
                        </div>
						<div class="form-label-group">
                            <input type="text" name = "clientName" id="clientName" class="form-control" placeholder="Vārds" required>
                            <label for="clientName"></label>
                        </div>
						<div class="form-label-group">
                            <input type="text" name = "clientSurname" id="clientSurname" class="form-control" placeholder="Uzvārds" required>
                            <label for="clientSurname"></label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name = "clientPassword" id="clientPassword" class="form-control" placeholder="Parole" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Parolei jābūt vismaz ar vienu ciparu, vienu lielo un mazo burtu un jābūt vismaz 8 simbolu garam." required>
                            <label for="clientPassword"></label>
                        </div>
						<p class="text-left"><a href="luxus">Ielogoties</a></p>
						<button class="btn btn-lg btn-primary btn-block text-uppercase" name = "register" type="submit" >Reģistrēties</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>