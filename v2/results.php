<?php

session_start();

if(!isset($_SESSION['fin'])) {
    header('Location: error.php?err=003');
    exit();
} else if (!$_SESSION['fin']) {
    header('Location: error.php?err=003');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Janson Entian">
    <link rel="icon" href="src/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styling/scrollbar.css">
    <link rel="stylesheet" href="styling/results.css">
    <title>Du är färdig!</title>
</head>
<body>
    
    <div class="done">
        <div class="t1">Du är nu färdig!</div>
        <div class="t2">Efter att du har kopierat koden nedan kan du gå tillbaka till formuläret</div>
        <div class="code"><textarea class="str" id="txt" readonly="readonly" rows="1" cols="5" style="resize:none"><?php echo $_SESSION['randStr'] ?></textarea><button onclick="myFunction()">Kopiera</button></div>
    </div>

    <script>
        function myFunction() {
            var copyText = document.getElementById('txt');
                copyText.select();
                copyText.setSelectionRange(0, 5)
                document.execCommand("copy");
                copyText.innerHTML = "<?php echo $_SESSION['randStr'] ?> - kopierad!"
                copyText.style.width = "400px";
            }
    </script>
</body>
</html>