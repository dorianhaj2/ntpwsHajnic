<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

?>

<!DOCTYPE HTML>
<html lang="hr">
    <head>
        <title>Registracija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <form method='post'>
        <p>First Name</p><input type='text' id='firstname' name='firstname' required>
        <p>Last Name</p><input type='text' id='lastname' name='lastname' required>
        <p>E-mail</p><input type='email' id='email' name='email' required>
        <br><br><label>Username</label><small>(Username must have min 5 and max 10 char)</small><br><br><input type='text' id='username' name='username' pattern=".{5,10}" required>
        <br><br><label for="password">Password: <small>(Password must have min 4 char)</small><br><br></label><input type='password' id='password' name='password' pattern=".{4,}" required>
        <p>Country</p>
        <select name="country" id="country">
            <option value="">Pick a country</option>
            <?php
                $con = mysqli_connect("127.0.0.1", "root", "", "ntpwsHajnic");
                $query = "SELECT * FROM countries";
                $result = mysqli_query($con, $query);
                while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
            ?>
        </select><br><br>

        <input type='submit' class="submit" value="Submit"><br><br>
    </form>
    <?php
        
        if(!empty($_POST['country'])) {

            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);

            $query  = "INSERT INTO users (firstname, lastname, email, username, password, country)" . 
            " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
            $result = mysqli_query($con, $query);

            echo "User registered!";
            
        } else {
            echo "Please select a country!";
        }
        mysqli_close($con);
    ?>
</body>
</html>