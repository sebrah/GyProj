<?php 

include "../includes/Vars.php";

function start() {
    $file = fopen("../dat/log", "a");

    $randStr = substr(str_shuffle(MD5(microtime())), 0, 5);

    $ip = $_SERVER['REMOTE_ADDR'];

    $_SESSION['active'] = true;

    if (!ipExists($ip)) {
        $_SESSION['randStr'] = $randStr;

        $_SESSION['ip'] = $ip;
        $time = date("H:i:s");

        fwrite($file, "[" . $time . "] Session with ip " . $ip . " got initialized and allocated the code " . $randStr . "\n");

        saveIP($ip);
        
        $timeInitiated = microtime(true);
        $_SESSION["startTime"] = $timeInitiated;
    }
    else {
        fwrite($file, "[" . date("H:i:s") . "] Session with ip " . $ip . " has already visited the server! Not initializing time and other variables!\n");
    }
}

function ipExists($ip) {
    $file = fopen("../dat/ip_log", "r");
    
    if ($ip == $myIp) {
        return 2;
    } else if (!strpos(fread($file, filesize("dat\ip_log")), $ip)) {
        return false;
    } else {
        return true;
    }
}

function saveIP($ip) {

    if (ipExists($ip) == 2) {
        return;
    } else if (ipExists($ip)) {
        echo "you have visited before";
    } else {
        fwrite(fopen("../dat/ip_log", "a"), $ip . "\n");
    }
}

function logger($txt) {
    if (!isset($_SESSION['randStr'])) {
        $str = "N/A";
    }
    else {
        $str = $_SESSION['randStr'];
    }

    fwrite(fopen("../dat/log", "a"), "[" . date("H:i:s") . "] @ " . $_SERVER['REMOTE_ADDR'] . " -> " . $str . " -> " . $txt . "\n");
}

function checkActive() {
    if(!isset($_SESSION['active'])) {
        header('Location: https://google.com');
    }
}

session_start();

checkActive();

logger("visited lunch");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Janson Entian">
    <meta charset="UTF-8">
    <link rel="icon" href="../src/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../styling/scrollbar.css">
    <link rel="stylesheet" href="../styling/delsidor/delsidor.css">
    <link rel="stylesheet" href="../styling/delsidor/mat/mat.css">
    <link rel="stylesheet" href="../styling/delsidor/mat/menyer/meny.css">
    <script type="text/javascript" src="../scripts/dev.js" defer></script>
    <title>Handlaren | Middagsmeny</title>
</head>
<body id="m">
    <div class="header">
        <div id="title">Restaurang Handlaren</div>
    </div>
    <div class="main">
        <div class="content">
            <div class="cont">
                <div class="cont-title">Middagsmeny</div>
                <div class="p1">
                    <div class="mat">Struva med vispad anklever, parmesan och portvin <span class="pris">95</span></div>
                    <div class="mat">Hasselbackspotatis med löjrom, smetana och färsklök <span class="pris">105</span></div>
                    <div class="mat">Bakad pilgrimsmussla med rättika, dragon och puffat ris <span class="pris">95</span></div>
                    <div class="mat">Laxtartar med pumpa, ingefära, macadamianötter och khataifi – för två <span class="pris">175</span></div>
                    <div class="mat">Brödservering för två: Helt nystekt tuttul med slarvsylta och hemkärnat smör <span class="pris">95</span></div>
                </div>
                <div class="p1">
                    <div class="mat">Norröna matjesill med friterat ägg, gulbetor, kavring, brynt smör och gräddfil <span class="pris">135</span></div>
                    <div class="mat">Bläckfisk från Nordsjön med fetaostkräm, zucchini, rostad vitlök och citron <span class="pris">140</span></div>
                    <div class="mat">Kyld soppa av gröna tomater med sotad avokado, jalapeño, kålrabbi och gurka <span class="pris">140</span></div>
                    <div class="mat">Tunt skuren råbiff med jordärtskocka, gruyère och hasselnötter <span class="pris">165</span></div>
                </div>
                <div class="p1">
                    <div class="mat">Stuvade makaroner med saffran, tomat, pancetta och primöräggula <span class="pris">145</span></div>
                    <div class="mat">Svampsmörgås med löjrom, kryddost, gräddfilskvarg, purjolök, dill och rågbröd <span class="pris">185</span></div>
                    <div class="mat">Smörstekt torsk med kolgrillad isbergssallad, ostronyoghurt, kronärtskockor och salladssås <span class="pris">195</span></div>
                    <div class="mat">Krispig fläsksida med spetskålssallad, dill, bakade rödbetor och picklade senapsfrön <span class="pris">185</span></div>
                    <div class="mat">Kryddstekt kalvrostbiff med chorizomajonnäs, potatiskrutonger, tomater och isad silverlök <span class="pris">195</span></div>
                </div>
                <div class="p1">
                    <div class="mat">Svenska äpplen varmbakade i paket med hasselnötsparfait och brödkräm <span class="pris">110</span></div>
                    <div class="mat">Kokosglass med sockerstekt ugnspannkaka, salt choklad och apelsinskum <span class="pris">110</span></div>
                    <div class="mat">Nyfriterad munk med lakritsglass, lemoncurd och salmiakkrust <span class="pris">110</span></div>
                    <div class="mat">Änglamat av lingon, smulade drömmar, maränger, vaniljglass och kolasås <span class="pris">110</span><br></br><br></br></div>
                </div>
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