<?php

include "code.php";

session_start();
//array $stats = [boka, mat, om-oss]


try {
    $startTime = $_SESSION['startTime'];
}
catch (Exception $e) {
    header('Location: error.php?err=003');
}
//$currTime = microtime(true);

if(!isset($_POST['form_submitted'])) {
    header('Location: error.php?err=001');
    exit();
} else {
    switch ($_POST['form_submitted']) {
        case 'qdNsB':
            checkState(0);
            if ($_SESSION['stateBoka'] && $_SESSION['stateOm'] && $_SESSION['stateMat']){
                $_SESSION['fin'] = true;
                header('Location: res.php');
            } else {
                header('Location: boka.php');
            }
            break;
        case '7xxgy':
            checkState(1);
            if ($_SESSION['stateBoka'] && $_SESSION['stateOm'] && $_SESSION['stateMat']){
                $_SESSION['fin'] = true;
                header('Location: res.php');
            } else {
                header('Location: om-oss.php');
            }
            break;
        case 'hD0kb':
            checkState(2);
            if ($_SESSION['stateBoka'] && $_SESSION['stateOm'] && $_SESSION['stateMat']){
                $_SESSION['fin'] = true;
                header('Location: res.php');
            } else {
                header('Location: mat-meny/lunch.php');
            }
            break;
        default:
            header('Location: error.php?err=002');
            exit();
            break;
    }
}

function checkState($submit_type) {
    switch ($submit_type) {
        case 0:
            if (!$_SESSION['stateBoka']) {
                $_SESSION['stateBoka'] = true;
                $_SESSION['timeBoka'] = (microtime(true) - $_SESSION['startTime'])*1000;
                logger("Klickade på 'Boka' efter " . $_SESSION['timeBoka'] . "ms");
            }
            break;
        case 1:
            if (!$_SESSION['stateOm']) {
                $_SESSION['stateOm'] = true;
                $_SESSION['timeOm'] = (microtime(true) - $_SESSION['startTime'])*1000;
                logger("Klickade på 'Om-Oss' efter " . $_SESSION['timeOm'] . "ms");
            }
            break;
         case 2:
            if (!$_SESSION['stateMat']) {
                $_SESSION['stateMat'] = true;
                $_SESSION['timeMat'] = (microtime(true) - $_SESSION['startTime'])*1000;
                logger("Klickade på 'Lunchrätten' efter " . $_SESSION['timeMat'] . "ms");
            }
            break;
    }
}

?>