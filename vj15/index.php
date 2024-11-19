<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Tražilica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>Unesi ime korisnika: </p><input type='text' id='ulaz' name='ulaz'>
        <input type='submit' class="submit" value="Pretraži"><br><br>
    </form>
    <?php
        
        if(!empty($_POST['ulaz'])) {
            $ulaz = $_POST['ulaz'];

            $con = mysqli_connect("127.0.0.1", "root", "", "ntpws");
            $query = "SELECT name, lastname, username FROM users WHERE name = \"$ulaz\"";
            $result = mysqli_query($con, $query);
            
            if(!empty($result)) {
                while($row = mysqli_fetch_array($result)) {
                    echo "<p>First name: " . $row['name'] . ", Last name: " . $row['lastname'] . ", Username: " . $row['username'] . "</p>";
                }
            } else {
                echo "No users found with name: $ulaz";
            }
            
            mysqli_close($con);
            
        }

    ?>
</body>
</html>