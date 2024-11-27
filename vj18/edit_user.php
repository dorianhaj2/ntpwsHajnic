<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Korisnici i države - edit user</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <h1>Edit user</h1>

    <form method='post' action='execute_edit.php'>
        <?php
            $con = mysqli_connect("127.0.0.1", "root", "", "ntpwsvj17");
            $query = "SELECT * FROM users WHERE id = " . $_GET['id'];
            $result = mysqli_query($con, $query);
            $user = @mysqli_fetch_array($result);
        ?>
        <p>First Name</p><input type='text' id='firstname' name='firstname' value='<?php echo $user['firstname'] ?>' required>
        <p>Last Name</p><input type='text' id='lastname' name='lastname' value='<?php echo $user['lastname'] ?>' required>
        <p>Country</p>
        <select name="country" id="country">
            <option value="">Pick a country</option>
            <?php
                $country_id = $user['country_id'];
                $query = "SELECT * FROM countries";
                $result = mysqli_query($con, $query);
                while($row = @mysqli_fetch_array($result)) {
                    if($row['id'] == $country_id) {
                        print '<option value="' . $row['id'] . '" selected>' . $row['country_name'] . '</option>';
                    } else {
                        print '<option value="' . $row['id'] . '">' . $row['country_name'] . '</option>';
                    }
					
				}
            ?>
        </select><br><br>
        <input type='number' name='id' id='id' value='<?php echo $_GET['id'] ?>' hidden>

        <input type='submit' class="submit" value="Submit"><br><br>
    </form>
    
</body>
</html>