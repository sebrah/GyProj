<?php

include "includes\IncludeHandling.php"; 

session_start();

if(!isset($_POST['form_submitted'])) {
    header('Location: index.php');
    exit();
} else {
    $_SESSION['totalTime'] = microtime(true) - $_SESSION['startTime'];
    $_SESSION['totalTime'] = round($_SESSION['totalTime'] * 1000);
    printCodeTime($_SESSION['totalTime']);
    header('Location: finish.php');
}

?>