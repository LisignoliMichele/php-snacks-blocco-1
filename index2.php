<!-- Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET['age'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>snack_2</title>
</head>
<body>
<?php if ( (strlen($name) > 3) && (strpos($mail, '.') !== false && strpos($mail, '@') !== false ) && (is_numeric($age)) ) { ?>
      <p> Accesso riuscito</p>
      <?php } else { ?>
      <p>Accesso negato</p>
      <?php }; ?>
</body>
</html>