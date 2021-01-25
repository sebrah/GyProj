<?php

include "includes\IncludeHandling.php";

session_start();

$timeInitiated = microtime(true);
$_SESSION["startTime"] = $timeInitiated;

setcookie("toggleDelCookie", "", time()-1000, "/");
setcookie("2Vnn8XjwDG", "", time()-1000, "/");

$echoCode = printCode();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/main.css">
    <title><?php echo $title; ?></title>
</head>
<body>

    <form action="auth" method="post">
        <input type="hidden" name="form_submitted" value="1" />
        <button type="submit" value="Submit">klicka här!</button>
    </form>

    <div class="footer">
        <p><?php echo $footer . " Session start-time: " . $_SESSION["startTime"]; ?></p>
    </div>
</body>
</html>