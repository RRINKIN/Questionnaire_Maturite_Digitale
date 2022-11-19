<?php
$fp=fopen(´db.csv’,’a+b’);
fputcsv($fp,$_POST);
fclose($fp);
?>