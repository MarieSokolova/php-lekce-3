<?php
session_start();
if (isset$_POST['Login'])) {
   echo "Vítejte";
   foreach ($_SESSION['data'] as $klic=>$hodnota) {
    echo $klic;
    echo $hodnota;
   } else {
   echo "Přístup zamítnut";
   }
   }
echo '<p><a href = "/php-lekce-3/logout.php">Odhlásit</a></p>';
   
