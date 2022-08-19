<?php 
$number = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $number->format(765000).' naira';
?>

