<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
<?php
$klasifikace = ["čeština"=> 2, "matematika" => 1, "angličtina"=> 5, "francouzština"=> 2];
$soucet = 0;
$pocet = 0;


    echo "<table class='table table-bordered'>";
    

foreach ( $klasifikace as $predmet =>$znamka) {
    $trida = '';
        if ($znamka > 3) {
            $trida = 'class="alert-danger"';
        }
            echo "<tr $trida>
            <td>$predmet</td>
            <td>$znamka</td>
        </tr>";
        $pocet = $pocet + 1;
        $soucet = $soucet + $znamka;
               
        }
    echo "</table>";
    echo "Průměr: "; 
        
    $prumer = $soucet/$pocet;
       echo "$prumer";
    
    ?>
  




</div>
</body>
</html>
