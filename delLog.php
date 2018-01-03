<?php
$handler = fopen("log.txt", "w");
fwrite($handler, "");
fclose($handler);
header("Location: results.php");