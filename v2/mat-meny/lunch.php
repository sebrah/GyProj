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
    $display0 = "display:none";
} else {
    $display1 = "background-color:lightgreen";
    $display0 = "";
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
    <title>Handlaren | Lunchmeny</title>
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
                    <div class="mat"><div class="img" style="background-image:url(https://assets.icanet.se/q_auto,f_auto/imagevaultfiles/id_212597/cf_259/ugnsraggis.jpg)"></div><span class="dag">Måndag</span> Ungsraggis med rårörda lingon <span class="pris">145</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://i1.wp.com/media.zeinaskitchen.se/2019/10/pannbiff-6.jpg?fit=2000%2C1619&ssl=1)"></div><span class="dag">Tisdag</span> Pannbiff med löksås <span class="pris">145</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://lh3.googleusercontent.com/proxy/-i5A3pUtJ6IFncTGSv_JuviNgu6-L5kAW7vW7St4S4V5mW2e4Vp2HCL6HmfflbxISCHxW9CdNCFRqwkykb0YXia5NfJ69pmghjfTgZRzpHaoyhCUSuymx3pL--egnBab-kx0eQ)"></div><span class="dag">Onsdag</span> Kycklingjärpar i gräddsås med pressgurka <span class="pris">145</span></div>
                    <div class="mat" style="<?php echo $display1 ?>">
                        <form action="../action" method="post" title="Tryck för att välja!">
                            <input type="hidden" name="form_submitted" value="hD0kb" />
                            <button type="submit" value="Submit"><div class="img" style="background-image:url(https://assets.icanet.se/q_auto,f_auto/imagevaultfiles/id_197242/cf_259/pyttipanna_med_agg_och_persilja.jpg)"></div><span class="dag">Torsdag</span> Pytt i panna <span class="pris">145</span></button>
                        </form>
                    </div>
                    <div id="btn" style="<?php echo $display0 ?>">Tryck här för att gå tillbaka!</div>
                    <div class="mat"><div class="img" style="background-image:url(https://cdn-rdb.arla.com/Files/arla-se/2992621787/25ee44b8-8917-4c63-919e-dbca8ca3c34e.jpg?mode=crop&w=479&h=335&ak=f525e733&hm=d7d1b1dd)"></div><span class="dag">Fredag</span> Krämig renskavspanna <span class="pris">145</span></div>
                </div>
                <div class="p1">
                    <div class="t1">Á La Carte</div>
                    <div class="mat"><div class="img" style="background-image:url(https://assets.icanet.se/q_auto,f_auto/imagevaultfiles/id_17665/cf_259/lyxig_blomkalssoppa.jpg)"></div>Blomkålssoppa, krutonger, picklad fänkål, gruyereost, och gräslök <span class="pris">95</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://www.svtstatic.se/image/wide/480/23983623?format=auto)"></div>Steak Minute, rödvinssky, haricot vertes, bakade tomater, pommer och kryddsmör <span class="pris">175</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://images.immediate.co.uk/production/volatile/sites/30/2020/08/focaccia-f599171.jpg)"></div>Tunt skivad biff på foccacia, potatissallad, kaprisbär, isad silverlök, smörgåskrasse <span class="pris">155</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://craftlog.com/m/i/2213173=s1280=h960)"></div>Trädgårdssallad med kallrökt lax, nobisdressing, kokt ägg, avocado, picklad fänkål och krutonger <span class="pris">165</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://assets.icanet.se/e_sharpen:80,q_auto,dpr_1.25,w_718,h_718,c_lfill/imagevaultfiles/id_199574/cf_259/bakade_rodbetor_med_brynt_rosmarinsmor_och_linser.jpg)"></div>Bakade rödbetor med gratinerad chevreost, brynt hasselnötssmör, picklad lök, friterade potatiskrutonger och vattenkrasse <span class="pris">155</span></div>
                </div>
                <div class="p1">
                    <div class="t1">Dessert</div>
                    <div class="mat"><div class="img" style="background-image:url(https://www.fifteenspatulas.com/wp-content/uploads/2019/05/Orange-Creme-Brulee-Fifteen-Spatulas-16-500x375.jpg)"></div>Crème Brulé med färska hallon <span class="pris">55</span></div>
                    <div class="mat"><div class="img" style="background-image:url(https://cdn-rdb.arla.com/Files/arla-se/4138985906/f7efbe06-f4ff-4fa4-8d3f-6bca682046a2.jpeg?mode=crop&w=479&h=335&ak=f525e733&hm=d7d1b1dd)"></div>Chokladtryffel <span class="pris">25</span><br></br><br></br></div>
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