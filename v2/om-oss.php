<?php 

include "includes/Vars.php";
include "code.php";

session_start();

checkActive();

logger("visited om oss");

if ($_SESSION['stateOm']) {
    $display1 = "";
    $display0 = " ";
} else {
    $display1 = "display:none";
    $display0 = " main-fix ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-heght, initial-scale=1.0">
    <meta name="author" content="Samuel Janson Entian">
    <meta charset="UTF-8">
    <link rel="icon" href="src/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styling/scrollbar.css">
    <link rel="stylesheet" href="styling/delsidor/delsidor.css">
    <link rel="stylesheet" href="styling/delsidor/om-oss/om-oss.css">
    <script src="https://kit.fontawesome.com/845f8d1abe.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/dev.js" defer></script>
    <title>Handlaren | Om oss</title>
</head>
<body>
    <div class="header">
        <div id="title">Restaurang Handlaren</div>
    </div>
    <div class="main<?php echo $display0 ?>main-om-fix">
        <div class="content">
            <div class="cont">
                <div class="cont-title">Om Restaurangen</div>
                <p>Med en ägare som en gång i tiden började sin yrkesbana som snickare och slöjdlärare, som sen startade och framgångsrikt drev inredningsföretaget Svensk Inredning i över 30 år, så signalerar självklart inredningskoncept och mat äkta hantverk. <br></br> Handlaren ska vara en restaurang med ett personligt tilltal där kärleken för hantverket står i fokus och där goda grannar och levnadsglada stockholmare kan mötas, säger Torgny Johansson ägare av Restaurang Handlaren.</p>
                <form action="action" method="post" title="Hitta hit!">
                    <input type="hidden" name="form_submitted" value="7xxgy" />
                    <button type="submit" value="Submit"><i class="fas fa-map-marked-alt"></i></button>
                </form>
                <div class="addr" style="<?php echo $display1 ?>">Furikvägen 63B</br>Stockholm</div>
                <div id="btn" style="<?php echo $display1 ?>">Tryck här för att gå tillbaka!</div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="inf"><!--
            <div class="adress">
                <p class="ttl">Address</p>
                <div class="txt">
                    <p class="adr tel">Furikvägen 63B</p>
                    <p class="cit epost">Stockholm</p>
                </div>
            </div>-->
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