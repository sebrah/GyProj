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
                    <div class="mat"><div class="img" style="background-image:url(https://mariesfoodobsession.files.wordpress.com/2017/08/img_5210.jpg)"></div>Struva med vispad anklever, parmesan och portvin <span class="pris">95</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://assets.icanet.se/e_sharpen:80,q_auto,dpr_1.25,w_718,h_718,c_lfill/imagevaultfiles/id_173824/cf_259/hasselbackspotatis_med_lojrom_och_graddfil.jpg)"></div>Hasselbackspotatis med löjrom, smetana och färsklök <span class="pris">105</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://www.vinia.se/blogg/vin-och-vanner/wp-content/uploads/sites/2/2016/08/iStock_56222838_SMALL.jpg)"></div>Bakad pilgrimsmussla med rättika, dragon och puffat ris <span class="pris">95</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://assets.icanet.se/q_auto,f_auto/imagevaultfiles/id_62578/cf_259/laxtartar.jpg)"></div>Laxtartar med pumpa, ingefära, macadamianötter och khataifi – för två <span class="pris">175</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://storhushall.skanemejerier.se/content/uploads/2018/05/brodservering.jpg)"></div>Brödservering för två: Helt nystekt tuttul med slarvsylta och hemkärnat smör <span class="pris">95</span></div>
                </div>
                <div class="p1">
                    <div class="mat"><div class="img" style="background-image:url(https://cached-images.bonnier.news/swift/bilder/epi-30-dn/UploadedImages/2014/6/19/688f4c41-a2e0-4fe9-99ab-fbab8c07e7aa/original.jpg)"></div>Norröna matjesill med friterat ägg, gulbetor, kavring, brynt smör och gräddfil <span class="pris">135</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://mittkok.expressen.se/wp-content/uploads/2016/10/bleckfiskaioli1-700x700.jpg)"></div>Bläckfisk från Nordsjön med fetaostkräm, zucchini, rostad vitlök och citron <span class="pris">140</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://imengine.gota.infomaker.io/?uuid=ff0861e4-0ec3-41a5-a7ad-170e0336fe0c&width=960&height=480&type=preview&source=false&q=90&z=100&x=0.000&y=0.129&crop_w=1.000&crop_h=0.743&function=cropresize)"></div>Kyld soppa av gröna tomater med sotad avokado, jalapeño, kålrabbi och gurka <span class="pris">140</span></div>
                    <div class="mat" style="margin-bottom:30px"><div class="img" style="background-image:url(https://www.svtstatic.se/image/wide/992/20113424?format=auto)"></div>Tunt skuren råbiff med jordärtskocka, gruyère och hasselnötter <span class="pris">165</span></div>
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