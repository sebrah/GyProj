<?php 

include "includes/Vars.php";
include "code.php";

session_start();

if(isset($_GET['iSu8M']) || isset($_SESSION['active']) || $_SERVER['REMOTE_ADDR'] == $myIp) {
    start();
    header('Location: index.php');
}
else {
    header('Location: https://google.com/');
    session_destroy();
    exit();
}

?>