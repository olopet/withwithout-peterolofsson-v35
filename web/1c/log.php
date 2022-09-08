<?php

$logFile = fopen("form-save.txt", "r") or die("Unable to open file!");
 
$pageText = fread($logFile, 25000);

echo nl2br($pageText);

fclose($logFile);

?>