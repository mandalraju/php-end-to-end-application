<?php

    // Connect to database
    require("../database/connection.php");
    define("WEB_ROOT",'/admin-dashboard');

    // print "<pre>";
    // print_r($_FILES);
    // print "</pre>";
    //Storing data from the users to variables
    $fullname = trim($_POST['fullname']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $age = trim($_POST['age']);

    // preparing file location in the server to upload files to
    $profilepic_upload_location = "/admin-dashboard/dist/uploads".$_FILES['profilepic']['name'];
    
    // var_dump($profilepic_upload_location);
    // Building INSERT QUERY for inserting user details into user_details table
    $insert_user_details_query = "INSERT INTO user_details(full_name, address,contact,age,profile_pic) values('$fullname','$address','$contact','$age','$profilepic_upload_location')";

    move_uploaded_file($_FILES['profilepic']['nane'],$profilepic_upload_location);

    // var_dump($insert_user_details_query);

    $insert_user_detail = mysqli_query($conn, $insert_user_details_query);
     
    // var_dump($insert_user_detail);
    if(!$insert_user_detail){
        echo "Oops Something went wrong!<br>";
    }else{
        echo "User details has been updated";
    }


?>