<?php

include "includes\IncludeHandling.php"; 

session_start();

if(!isset($_POST['form_submitted'])) {
    header('Location: index.php');
    exit();
} else {
    $_SESSION['totalTime'] = time() - $_SESSION['startTime'];
    printCodeTime($_SESSION['totalTime']);
    header('Location: finish.php');
}

?>