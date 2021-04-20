<?php
    // If client sends a post request to server, the data are stored in $_POST
    // require, require_once, include, include_once //
    require("../database/connection.php"); 

    $username = $_POST["username"];
    $password = $_POST["password"];

    $select_user_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $select_user_query);


    $row_number = mysqli_num_rows($result);

    if($row_number == 1){
        echo "Username is already taken";
    }else{
        $insert_query = "INSERT INTO users(username,password) values('$username','$password')";

        $registration = mysqli_query($conn, $insert_query);

        if(!$registration){
            echo "Opps! Something went wrong! <br>";
        }else{
            echo "Registration Successfull!<br>";
        }

    }

    
    

    





?>




