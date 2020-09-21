<?php
    //Check if the form is submitted
    if(isset($_GET["s"])){
        $username = $_GET["username"];
        $email = $_POST['e'];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];

        if(!(strlen($username) >= 3 && strlen($username) <= 10)){
            echo "<h1>Username: {$username} is incorrect </h1>";
        }

        if(!empty($password) && !empty($confirmPassword)){
            if($password != $confirmPassword){
                echo "<h1> Passwords must match </h1>";
            }
        }


        
    }
    else{
        echo "<h1>You have not submitted the form</h1>";
    }
?>

