<?php
$filename = "source.txt";

$fp = fopen($filename, "r");

$contents = fread($fp, filesize($filename));

echo "<pre>$contents</pre>";

$fpp = file_get_contents("source.txt");

$filename1 = "target.txt";

$fp1 = fopen($filename1,"w");

fwrite($fp1,$fpp);

fclose($fp);

fclose($fp1);
?>

