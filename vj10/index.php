<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Riječi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>Ulazni niz: </p><input type='text' id='ulaz' name='ulaz'>
        <input type='submit' class="submit" value="Ispiši broj riječi"><br><br>
    </form>
    <?php
        
        if(!empty($_POST['ulaz'])) {
            $ulaz = $_POST['ulaz'];
            $broj_rijeci = str_word_count($ulaz);

            echo "<p>Ulani niz: " . $ulaz . "</p>";
            echo "<p>Sadrži: " . $broj_rijeci . " riječi</p>";
            
        }

    ?>
</body>
</html>