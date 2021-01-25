<?php 

include "includes\IncludeHandling.php"; 

session_start();

if(!isset($_SESSION['totalTime'])) {
    header('Location: /');
    exit();
} else {
    $totalTime = $_SESSION['totalTime'];
    saveIP($_SERVER['REMOTE_ADDR']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/main.css">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['randStr']; ?></h1>
    <?php if(!ipExists($_SERVER['REMOTE_ADDR']) || ipExists($_SERVER['REMOTE_ADDR']) == 2) echo $totalTime . " millisekunder tog det tills du tryckte..."; ?>
    <div class="footer">
        <p><?php echo $footer . " Session start-time: " . $_SESSION["startTime"]; ?></p>
    </div>
</body>
</html>