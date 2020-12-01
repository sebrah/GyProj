<?php

include "includes\IncludeHandling.php"; 

session_start();

if(!isset($_POST['form_submitted'])) {
    header('dev.html');
    exit();
} else {
    #$_SESSION['totalTime'] = time() - $_SESSION['startTime'];
    #printCodeTime($_SESSION['totalTime']);
    switch ($_POST['form_submitted']) {
        case '1':
            header('dev2.html');
            break;
        case '2':
            #dryck
            break;
        case '3':
            #boka
            break;
        case '4':
            #om-oss
            break;
        default:
            header('dev.html');
            break;
    }
}

?>