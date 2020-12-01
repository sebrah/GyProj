<?php

include "includes\IncludeHandling.php"; 

session_start();

if(!isset($_POST['form_submitted'])) {
    header('Location: dev.html');
    exit();
} else {
    #$_SESSION['totalTime'] = time() - $_SESSION['startTime'];
    #printCodeTime($_SESSION['totalTime']);
    echo $_POST['form_submitted'];
    switch ($_POST['form_submitted']) {
        case '1':
            header('Location: dev2.html');
            echo "test 1";
            break;
        case '2':
            echo "test 2";
            break;
        case '3':
            echo "test 3";
            break;
        case '4':
            echo "test 4";
            break;
        default:
            header('Location: dev.html');
            echo "test";
            break;
    }

    echo "test hey";
}

?>