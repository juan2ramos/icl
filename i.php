<?php
$xml=simplexml_load_file("https://www.facebook.com/feeds/page.php?format=atom10&id=128558983829180") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>
