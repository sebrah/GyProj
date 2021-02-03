<?php 

include "includes/Vars.php";
include "code.php";

session_start();

checkActive();

logger("visited mat");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Janson Entian">
    <meta charset="UTF-8">
    <link rel="icon" href="src/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styling/scrollbar.css">
    <link rel="stylesheet" href="styling/delsidor/delsidor.css">
    <link rel="stylesheet" href="styling/delsidor/mat/mat.css">
    <script src="https://kit.fontawesome.com/845f8d1abe.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/dev.js" defer></script>
    <title>Handlaren | Menyer</title>
</head>
<body>
    <div class="header">
        <div id="title">Restaurang Handlaren</div>
    </div>
    <div class="main main-fix">
        <div class="content">
            <div class="cont">
                <div class="cont-title">menyer</div>
                <div class="menus">
                    <div id="lunch"><i class="fas fa-sun"></i><p>lunch</p></div>
                    <div id="middag"><i class="fas fa-moon"></i><p>middag</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="inf">
            <div class="kontakt">
                <p class="ttl">Kontakt</p>
                <div class="txt">
                    <p class="tel">+46 16 788 7491</p>
                    <p class="epost">kontakt@restaurang.se</p>
                </div>
            </div>
        </div>
        <div class="decl">Copyright &copy; 2020 Samuel Entian</div>
    </div>
</body>
</html>