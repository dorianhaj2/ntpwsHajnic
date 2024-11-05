<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Pogodi broj</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>Pogodi broj</p>
        <p>Upiši broj od 1 do 9: </p><input type='number' id='broj' name='br'>
        <input type='submit'><br><br>
    </form>
    <?php
        $br = $_POST['br'];
        $r = rand(1, 9);

        if(isset($_POST['br'])) {
            if($br == $r) {
                print '<p style="color:green;">Pogodak, probaj ponovno!</p>';
            } else {
                print '<p style="color:red;">Krivo, probaj ponovno!</p>';
            }
            print '<p>Zamišljeni broj je bio '.$r.'</p>';
        }
    ?>
</body>
</html>
