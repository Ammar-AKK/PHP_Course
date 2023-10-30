<?php
$string = "Ammar Khan";
echo $string;
echo "<br>";
echo strtolower($string);
//echo strlen($string);
echo "<br>";
echo $string[6];
echo "<br>";
$string[6] ="k";
echo $string;
echo"<br>";
$string[6] ="K";
echo str_replace("Ammar","Ammory", $string);
echo"<br>";
echo substr($string, 5, 4);



?>