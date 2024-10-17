<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Programiranje web aplikacija</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Alen Šimec">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    </head>
<body>
    <form method='post'>
        <p>Vrijednost a: </p><input type='number' id='vrijednost_a' name='a'>
        <p>Vrijednost b: </p><input type='number' id='vrijednost_b' name='b'><br><br>
        <input type='submit'><br><br>
    </form>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $r = (3*$a - $b) / 2;

        echo "Rezutat: $r";
    ?>
</body>
</html>
