<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">    
    <head>
        <title>Ducan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>  
    <?php
        function ducan($stanje="otvoren"){
        echo "Ducan je $stanje";
        }
        $day = date("N");
        $time = date("G");

        if($day >= 1 && $day <= 5) {
            if($time >= 8 && $time < 20) {
                ducan();
            } else {
                ducan("zatvoren");
            }
        } else {
            if($day == 6) {
                if($time >= 9 && $time < 14) {
                    ducan();
                } else {
                    ducan("zatvoren");
                }
            } else {
                ducan("zatvoren");
            }
        }
    ?>
</body>
</html>