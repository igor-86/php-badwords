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
    <div class="one">
        <h2>Stampo la frase scritta nel form per intero</h2>
        <p><?php echo $user_print; ?> </p>
        <a href="index.php">Torna indietro</a>
    </div>
    <div class="two">
        <h2>lunghezza array</h2>
        <?php
        $longe_print = explode(" ", $user_print);
        ?>
        <p><?php var_dump($longe_print); ?></p>
    </div>
    <div class="three">
        <h2>Frase con taglio</h2>
        <?php
        $sub_print = array("cane", "amore", "caso");
        $news = array("***", "***", "***");
        $new_string = str_replace($sub_print, $news, $user_print);
        ?>
        <?php
        $new_longe = explode(" ", $new_string);
        ?>
        <p>
            <?php
            echo $new_string;
            ?>
        </p>
        <p>
            <?php
            var_dump($new_longe);
            ?>
        </p>
    </div>
</body>

</html>