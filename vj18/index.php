<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Korisnici i države - editiranje</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <h1>Korisnici i države</h1>
    <?php

        $con = mysqli_connect("127.0.0.1", "root", "", "ntpwsvj17");
        $query = "SELECT * FROM users";
        $result = mysqli_query($con, $query);
        
        if(!empty($result)) {
            while($row = mysqli_fetch_array($result)) {
                $query2 = "SELECT * FROM countries WHERE id = " . $row['country_id'];
                $result2 = mysqli_query($con, $query2);
                $row2 = mysqli_fetch_array($result2);

                echo "<a href='edit_user.php?id=" . $row['id'] . "'><p>" . $row['firstname'] . " " . $row['lastname'] . " (" . $row2['country_name'] . ")</p></a>";
            }
        } else {
            echo "No users found.";
        }
        
        mysqli_close($con);
            

    ?>
</body>
</html>