<?php

$exception = "";

if(!isset($_GET['err'])) {
    $exception = "No error code invoked!";
} else {
    switch ($_GET['err']) {
        case "001":
            $exception = "No form submit was detected!";
            break;
        case "002":
            $exception = "Unknown form submission!";
            break;
        case "003":
            $exception = "State variables not initialized!";
            break;
        default:
            $exception = "Unknown exception!";
            break;
    }
}

echo "Error: " . $exception;

?>