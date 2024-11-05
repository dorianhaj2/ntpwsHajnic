<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Kalkulator 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>Prvi broj: </p><input type='number' id='vrijednost_a' name='a'>
        <p>Drugi broj: </p><input type='number' id='vrijednost_b' name='b'><br><br>
        <input type='submit' name='operator' value='+'>
        <input type='submit' name='operator' value='-'>
        <input type='submit' name='operator' value='*'>
        <input type='submit' name='operator' value='/'><br><br>
    </form>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $o = $_POST['operator'];
        $r = '';

        switch($o) {
            case "+":
                $r = $a + $b;
                break;
            case "-":
                $r = $a - $b;
                break;
            case "*":
                $r = $a * $b;
                break;
            case "/":
                $r = $a / $b;
                break;
        }

        echo "Rezutat: $r";
    ?>
</body>
</html>
