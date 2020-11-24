<?php 

function printCode() {

    $file = fopen("dat\data", "a");

    $randStr = substr(str_shuffle(MD5(microtime())), 0, 5);

    $_SESSION['randStr'] = $randStr;

    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");

    $cookieRandStrName = "2Vnn8XjwDG";
    $cookieRandStrValue = $randStr;

    fwrite($file, "[" . $time . "] @ " . $ip . " -> " . $cookieRandStrValue . " -> contact\n");
    return $cookieRandStrValue;
}

function printCodeTime($ftime) {
    if (ipExists($_SERVER['REMOTE_ADDR']) != 2 && ipExists($_SERVER['REMOTE_ADDR'])) return;

    $file = fopen("dat\data", "a");

    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");

    fwrite($file, "[" . $time . "] @ " . $ip . " -> " . $_SESSION['randStr'] . " -> t: " . $_SESSION['totalTime'] . "s\n");
}

function ipExists($ip) {
    $file = fopen("dat\ip_log", "r");
    
    if ($ip == "192.168.86.1") {
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
        fwrite(fopen("dat\ip_log", "a"), $ip . "\n");
    }
}

?>