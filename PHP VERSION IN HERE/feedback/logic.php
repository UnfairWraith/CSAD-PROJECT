<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    include '../server.php';

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        
      
        
        $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
        $contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
        $exp = mysqli_real_escape_string($conn, $_REQUEST['exp']);
        
        
        
        $sql = "INSERT INTO feedback(name, email, gender, contact, exp) VALUES('$name', '$email', '$gender', '$contact', '$exp')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index.php?info=added");
        exit();
    }


?>