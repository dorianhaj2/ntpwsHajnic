<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Prosti brojevi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>Upiši broj: </p><input type='number' id='ulaz' name='ulaz'>
        <input type='submit' class='submit' value='Je li prost?'><br><br>
    </form>
    <?php
        
        function prost($broj) : bool {
            if($broj == 2) return true;
            if($broj < 2) return false;
            for($i = 2; $i < ($broj/2)+1; $i++) {
                if($broj % $i == 0) return false;
            }
            return true;
        }

        if(!empty($_POST['ulaz'])) {
            $ulaz = $_POST['ulaz'];
            if(prost($ulaz)) {
                echo "<p>" . $ulaz . " je prost";
            } else {
                echo "<p>" . $ulaz . " nije prost";
            }

        }

        echo "<p>Prosti brojevi do 100:</p>";
            for($i = 1; $i < 100; $i++) {
                if(prost($i)) {
                    echo $i . " ";
                }
            } 
            
    ?>
</body>
</html>