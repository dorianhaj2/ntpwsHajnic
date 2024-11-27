<?php

        $con = mysqli_connect("127.0.0.1", "root", "", "ntpwsvj17");

        if(isset($_POST['id'])) {
            $query  = "UPDATE users SET firstname = '" . $_POST['firstname'] . "', lastname = '" . $_POST['lastname'] . "', country_id = " . $_POST['country'] . " WHERE id = " . $_POST['id'];
            mysqli_query($con, $query);
            
            $n = mysqli_affected_rows($con);
    
            mysqli_close($con);
            
        }
        header("Location: index.php");
    ?>