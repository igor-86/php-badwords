<?php
$user_print = $_GET["textuser"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Stampo la frase scritta nel form per intero</h2>
    <p><?php echo $user_print; ?> </p>
    <a href="index.php">Torna indietro</a>
</body>

</html>