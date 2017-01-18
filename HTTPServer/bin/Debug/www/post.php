<?php
$name=$_POST['name']; 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f,"$name"); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
?>