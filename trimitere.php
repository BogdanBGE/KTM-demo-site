<!DOCTYPE html>
<html>
    <head>

        <script type="text/javascript" src="KTM-Script.js"></script>
        <link rel="icon" type="image/x-icon" href="logo.png"/>
        <link rel="stylesheet"href="ktm.css"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    </head>
    <body>


        <div class="navbar" id="navbar">
            <img src="KTM-logo.png" id="logo"/>
            <a href="KTM.html">HOME</a>
            <a href="bikes.html">BIKES</a>     
            <a href="racing.html">RACING</a>
            <a href="contact.html">CONTACT </a>          
          </div>



          <img src="login.jpg" width="100%" class="login">
          <div class="formContent blur">

           <h class="thanks">THANK YOU!</h>

          <footer class="footer">
            <ul class="social-icon">
              <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/Official.KTM/?locale2=ro_RO&paipv=0&eav=AfakQR_aWRioMTbpb0FZcoWUTGeb_-0f_4w-Y2yxRuVZqi89fp30qpnWQtZ7pp5hsv8&_rdr">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="https://twitter.com/KTM_Racing">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/ktm_official/">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
            </ul>
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="KTM.html">Home</a></li>
              <li class="menu__item"><a class="menu__link" href="racing.html">Racing</a></li>
              <li class="menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
        
            </ul>
            <p>&copy;Copyright 2023 KTM Sportmotorcycle GmbH, all rights reserved</p>
          </footer>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>

</html>  
<?php
$nume = $_POST["nume"]; $prenume = $_POST["prenume"]; $telefon = $_POST["telefon"]; $email=$_POST["email"]; $message=$_POST["message"];

$db = mysqli_connect("localhost", "BogdanBGE", "KTMDUKE125r", "id");
if (!$db) {
 exit('Conectare esuata: ' . mysqli_connect_error ());
}

$succes = mysqli_select_db($db, "id");
if (!$succes) {
 exit('<br>Nu se poate selecta baza de date: ' . mysqli_error($db));
} 

$interogare2 = "SELECT * FROM tabel1";
$raspuns = mysqli_query($db, $interogare2);
if (mysqli_errno($db))
 exit('<br>'.mysqli_errno($db).": ".mysqli_error($db)."<br>");
$N = mysqli_affected_rows($db);
for($i=0; $i<$N; $i++){
 $linie = mysqli_fetch_row($raspuns);
 
}

$interogare = "INSERT INTO tabel1 (Nume, Prenume, Telefon, Email, mesaj) VALUES ('$nume' , '$prenume' , '$telefon', '$email', '$message')";
mysqli_query($db,$interogare);



if (mysqli_errno($db))
 exit('<br>Adaugare esuata: '.mysqli_errno($db).": ".mysqli_error($db)."<BR>");



mysqli_close($db);
?>