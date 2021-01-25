<?php

include "includes/Vars.php";

function start() {
    $file = fopen("dat\log", "a");

    $randStr = substr(str_shuffle(MD5(microtime())), 0, 5);

    $ip = $_SERVER['REMOTE_ADDR'];

    $_SESSION['active'] = true;

    if (!ipExists($ip)) {
        $_SESSION['randStr'] = $randStr;
        $_SESSION['stateBoka'] = false;
        $_SESSION['stateMat'] = false;
        $_SESSION['stateOm'] = false;
        $_SESSION['fin'] = false;

        $_SESSION['ip'] = $ip;
        $time = date("H:i:s");

        fwrite($file, "[" . $time . "] Session with ip " . $ip . " got initialized and allocated the code " . $randStr . "\n");

        saveIP($ip);
        
        $timeInitiated = microtime(true);
        $_SESSION['startTime'] = $timeInitiated;
    }
    else {
        fwrite($file, "[" . date("H:i:s") . "] Session with ip " . $ip . " has already visited the server! Not initializing time and other variables!\n");
    }
}

function ipExists($ip) {
    $file = fopen("dat\ip_log", "r");
    
    if (!strpos(fread($file, filesize("dat\ip_log")), $ip)) {
        return false;
    } else {
        return true;
    }
}

function saveIP($ip) {

    if ("192.168.86.97") {
        return;
    } else if (ipExists($ip)) {
        echo "you have visited before";
    } else {
        fwrite(fopen("dat\ip_log", "a"), $ip . "\n");
    }
}

function logger($txt) {
    if (!isset($_SESSION['randStr'])) {
        $str = "N/A";
    }
    else {
        $str = $_SESSION['randStr'];
    }

    fwrite(fopen("dat\log", "a"), "[" . date("H:i:s") . "] @ " . $_SERVER['REMOTE_ADDR'] . " -> " . $str . " -> " . $txt . "\n");
}

function checkActive() {
    if(!isset($_SESSION['active'])) {
        header('Location: https://google.com');
    }
}

?>