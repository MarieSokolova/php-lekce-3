<?php
session_start();
if (isset($_SESSION['loggedIn'])) {
   echo "Vítejte";
   foreach ($_POST['data'] as $klic=>$hodnota);
    echo $klic;
    echo $hodnota;
   } else {
   echo "Přístup zamítnut";
   } 
echo '<p><a href = "/php-lekce-3/logout.php">Odhlásit</a></p>';
   
