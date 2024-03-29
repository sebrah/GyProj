<?php

include "code.php";

session_start();

if(!isset($_SESSION['fin'])) {
    header('Location: error.php?err=003');
    exit();
} else if (!$_SESSION['fin']) {
    header('Location: error.php?err=003');
    exit();
} else {
    $finTime = (microtime(true) - $_SESSION['startTime'])*1000;
    logger("Blev färdig efter " . $finTime . "ms");
    echo "Finished in " . $finTime . "ms";
    echo "\nCode: " . $_SESSION['randStr'];
    printResults($finTime);
    header('Location: results.php');
}

function printResults($finTime) {
    fwrite(fopen("dat/results", "a"), "[" . date("H:i:s") . "] @ " . $_SERVER['REMOTE_ADDR'] . " C:" . $_SESSION['randStr'] . " R:" . $finTime . " b:" . $_SESSION['timeBoka'] . " o:" . $_SESSION['timeOm'] . " m:" . $_SESSION['timeMat'] . "\n");
}

?>