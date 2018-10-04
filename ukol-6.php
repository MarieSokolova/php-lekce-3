<form method="POST">
   Jméno: <input type="text"name="firstName"><!-- vstupní pole -->
   <p>Heslo: <input type="password"name="secret"></p>
   <input type="checkbox"name="optIn"> Souhlasím
   <p><input type="submit"></p><!-- tlačítko pro odeslání formuláře -->
</form>
<?php
echo '<br>POST: ';
var_dump($_POST);
