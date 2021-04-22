<?php
    // Login means if the data submitted by the client exist in the users table of the database


    // importing connection.php file to connect to the database
    require("../database/connection.php");

    // Storing data from client to variables
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);


    // Building SQL Query to select user with the username provided by the client
    $select_user_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // Running the SQL query
    $result = mysqli_query($conn, $select_user_query);

    // Counting the no of rows from the result of SQL query
    $row_number = mysqli_num_rows($result);

    if($row_number == 1){
        // Starting the user session (A session is a way to store the information of a validated user globally)
        session_start(); // inbuilt php function to statrt the session of the user.
        $_SESSION['username'] = $username;
        header('Location:/admin-dashboard/dashboard.php');
    }else{
        echo "Oppps! The user doesn't exist in the database.<br>";
    }







?>