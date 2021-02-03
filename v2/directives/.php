<?php

fwrite(fopen("dat\data", "a"), "[" . date("H:i:s") . "] @ " . $_SERVER['REMOTE_ADDR'] . " -> connected to html file\n");

header('Location: index.html');

?>