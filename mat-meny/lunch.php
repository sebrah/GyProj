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

if (!$_SESSION['stateMat']) {
    $display1 = "";
} else {
    $display1 = "background-color:lightgreen";
}
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
    <title>Dev Vår mat | Alpha 1.1</title>
</head>
<body id="m">
    <div class="header">
        <div id="title">Restaurang Handlaren</div>
    </div>
    <div class="main">
        <div class="content">
            <div class="cont">
                <div class="cont-title">Lunchmeny</div>
                <div class="p1">
                    <div class="t1">Lunch</div>
                    <div class="mat"><span class="dag">Måndag</span> Ungsraggis med rårörda lingon <span class="pris">145</span></div>
                    <div class="mat"><span class="dag">Tisdag</span> Pannbiff med löksås <span class="pris">145</span></div>
                    <div class="mat"><span class="dag">Onsdag</span> Kycklingjärpar i gräddsås med pressgurka <span class="pris">145</span></div>
                    <div class="mat" style="<?php echo $display1 ?>">
                        <form action="../action" method="post" title="Tryck för att välja!">
                            <input type="hidden" name="form_submitted" value="hD0kb" />
                            <button type="submit" value="Submit"><span class="dag">Torsdag</span> Pytt i panna <span class="pris">145</span></button>
                        </form>
                    </div>
                    <div class="mat"><span class="dag">Fredag</span> Krämig renskavspanna <span class="pris">145</span></div>
                </div>
                <div class="p1">
                    <div class="t1">Á La Carte</div>
                    <div class="mat">Blomkålssoppa, krutonger, picklad fänkål, gruyereost, och gräslök <span class="pris">95</span></div>
                    <div class="mat">Steak Minute, rödvinssky, haricot vertes, bakade tomater, pommer och kryddsmör <span class="pris">175</span></div>
                    <div class="mat">Tunt skivad biff på foccacia, potatissallad, kaprisbär, isad silverlök, smörgåskrasse <span class="pris">155</span></div>
                    <div class="mat">Trädgårdssallad med kallrökt lax, nobisdressing, kokt ägg, avocado, picklad fänkål och krutonger <span class="pris">165</span></div>
                    <div class="mat">Bakade rödbetor med gratinerad chevreost, brynt hasselnötssmör, picklad lök, friterade potatiskrutonger och vattenkrasse <span class="pris">155</span></div>
                </div>
                <div class="p1">
                    <div class="t1">Dessert</div>
                    <div class="mat">Crème Brulé med färska hallon <span class="pris">55</span></div>
                    <div class="mat">Chokladtryffel <span class="pris">25</span><br></br><br></br></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="inf">
            <div class="adress">
                <p class="ttl">Address</p>
                <div class="txt">
                    <p class="adr tel">Furikvägen 63B</p>
                    <p class="cit epost">Stockholm</p>
                </div>
            </div>
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