<?php
    // If client sends a post request to server, the data are stored in $_POST
    // require, require_once, include, include_once //

    // Including database connection file
    require("../database/connection.php"); 

    print "<pre>";
    print_r($_POST);
    print "</pre>";

    // Storing data from client to variables
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validating data from the client

    // validating username
    if(empty($username)){ // validating if the username field is not empty
        echo "Username filed cannot be empty";
        die();
    }else if(strlen($username) < 6){
        echo "Username must be atleast 6 characters long.<br>";
        die();
    }

    // Validating password
    if(empty($password)){ // validating if the password field is not empty
        echo "Password field cannot be empty";
        die();
    }else if(strlen($password) < 8){
        echo "Password must be atleast 8 characters long.<br>";
        die();
    }
    // validate if password and confirmpassword match


    // validate if the client checked the term & condition


    // Building SQL Query to select user with the username provided by the client
    $select_user_query = "SELECT * FROM users WHERE username='$username'";
    // Running the SQL query
    $result = mysqli_query($conn, $select_user_query);

    // Counting the no of rows from the result of SQL query
    $row_number = mysqli_num_rows($result);

    // if no of rows is 1, that means the username already exist in the database
    if($row_number == 1){
        echo "Username is already taken";
    }else{ // else the username doesn't exist in the database

        // Preparing SQL query for Insert user into the users table
        $insert_query = "INSERT INTO users(username,password) values('$username','$password')";

        // running the insert SQL Query
        $registration = mysqli_query($conn, $insert_query);

        // If  not successfull run of INSERT query
        if(!$registration){
            echo "Opps! Something went wrong! <br>";
        }else{ // if Successfull run of INSERT Query
            echo "Registration Successfull!<br>";
        }

    }

    
    

    





?>




