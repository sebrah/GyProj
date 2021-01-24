<?php 

include "code.php";

session_start();

if(isset($_GET['iSu8M']) || isset($_SESSION['active'])) {
    start();
    header('Location: index.php');
}
else {
    header('Location: https://google.com/');
    session_destroy();
    exit();
}

?>