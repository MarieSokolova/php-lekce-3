

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Login:</label>
    <input type="text" name="Login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Heslo:</label>
    <input type="password" name="heslo" class="form-control" id="exampleInputPassword1">
  </div>
    <button type="submit" class="btn btn-primary">Přihlásit</button>
</form>
</div>


<?php
session_start();
if (isset $_POST['Login']) {
    if ($_SESSION['Login']=="admin" && $_SESSION['heslo'] == "top-secret") {
   $_SESSION['Login']="admin";
   $_SESSION['data']=['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
   echo '<a href="/php-lekce-3/admin.php">Pokračovat do administrace</a>';
}  else {
   echo "Chybné jméno nebo heslo";
}
}

?>
</body>
</html>

