<?php

    // Connect to database
    require("../database/connection.php");
    // define("WEB_ROOT",'/admin-dashboard');

    //Storing data from the users to variables
    $fullname = trim($_POST['fullname']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $age = trim($_POST['age']);

    // preparing file location in the server to upload files to
    $profilepic_upload_location = "../../dist/uploads/".$_FILES['profilepic']['tmp_name'];
    $profile_pic_url = "http://localhost/admin-dashboard/dist/uploads/".$_FILES['profilepic']['name'];
    
    $insert_user_details_query = "INSERT INTO user_details(full_name,address,contact,age,profile_pic) values('$fullname','$address','$contact','$age','$profile_pic_url')";
   
    $insert_user_detail = mysqli_query($conn, $insert_user_details_query);
   
    move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic_upload_location);
   
    if(!$insert_user_detail){
        echo "Oops Something went wrong!<br>";
    }else{
        echo "User details has been updated";
    }


?>