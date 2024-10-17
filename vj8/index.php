<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">    
    <head>
        <title>Auti</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    </head>
<body>  
    <?php
        $cars = array("Audi", "BMW", "Renault", "Citroen");
        echo "<form method='post'>";
        foreach($cars as $car) {
            echo "<input type='radio' name='vozila' value='$car' required> $car<br>";
        }
    
        echo "<input type='submit'><br><br>
            </form>";
   
        $vozilo = $_POST['vozila'];

        echo "Odabrano vozilo: $vozilo";
    ?>
</body>
</html>
