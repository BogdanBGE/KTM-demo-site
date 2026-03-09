<?php

 $nume = $_POST["nume"];
 $telefon = $_POST["telefon"];
$user=$_SERVER["HTTP_USER_AGENT"];
$ip=$_SERVER["REMOTE_ADDR"];
$url=$_SERVER["HTTP_REFERER"];
$urlPHP=$_SERVER["SERVER_NAME"];
 echo "Valori introduse in formular: <br>";
 echo "Numele este: $nume <br>";
 echo "Telefonul este: $telefon <br>";
 echo "Informatii desrpe user : $user <br>";
 echo "URL HTML : $url <br>";
 echo "URL PHP : $urlPHP <br>";
 echo "Adresa IP User : $ip";

?>