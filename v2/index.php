<?php 

include "includes/Vars.php";
include "code.php";

session_start();

checkActive();

logger("visited index");

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
    <link rel="stylesheet" href="styling/index-style.css">
    <script src="https://kit.fontawesome.com/845f8d1abe.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/dev.js" defer></script>
    <title>Restaurang Handlaren</title>
</head>
<body>
    <div class="header">
        <div id="logo"><span>Restaurang Handlaren</span></div>
        <div id="nav">
            <div id="mat" title="Mat"><i class="fas fa-utensils"></i></div>
            <div id="dryck" title="Dryck"><i class="fas fa-glass-martini-alt"></i></div>
            <div id="boka" title="Boka bord"><i class="fas fa-calendar-day"></i></div>
            <div id="om" title="Om oss"><i class="fas fa-info"></i></div>
        </div>
    </div>
    <div class="main">
        <div class="imgs">
            <div class="r1"></div>
            <div class="r2">
                <div class="p1">
                    Restaurang Handlaren ligger på Öskaret i Troholm, ett stenkast från Vetesten och vackra Humlegården med en värme av både småstadspuls och grönska.</br></br>Namnet på restaurangen skvallrar om att vi vill att mat, inredning och hela upplevelsen andas det fina handeln. Det är det vi lever för: att laga god mat lagad från grunden med hjärta, själ, handgripligen med våra flinka händer, precis som alla riktiga handlare jobbar.</div>
                </div>
            <div class="r3">
                <div class="p1">
                    I dessa tider vill vi att ni ska känna er trygga hos oss. Handlaren följer utvecklingen noggrant och jobbar stenhårt för att vidta alla de åtgärder som säkrar våra gästers och medarbetares säkerhet och välbefinnande.</br></br>Vi har större avstånd mellan borden och det är numera färre platser i restaurangen. Vi följer alla riktlinjer från Folkhälsomyndigheten och alla rekommendationer från branschorganisationen Visita – vi är ”Safe to Visit”.</br></br>Vi är mer peppade, matglada, energifyllda, kärleksfulla och laddade än någonsin innan för att hålla våran älskade restaurang öppen för alla er som vill komma hit och ha en fin stund tillsammans.
                </div>
            </div>
            <div class="r4"></div>
            <div class="r5"></div>
            <div class="r6"></div>
        </div>
    </div>
    <div class="footer">
        <div class="inf">
            <div class="kontakt">
                <p class="ttl">Kontakt</p>
                <div class="txt"><p class="tel">+46 16 788 7491</p><p class="epost">kontakt@restaurang.se</p></div>
            </div>
        </div>
        <div class="decl">Copyright &copy; 2020 Samuel Entian</div>
    </div>
</body>
</html>