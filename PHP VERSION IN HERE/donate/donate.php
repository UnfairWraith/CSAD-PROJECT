<?php
    include '../server.php';
    
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO donation(donation_name, donation_amount) VALUES ('$name', ".$amount.")";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " .$sql. "<br>" .$conn->error;
    }

    $conn -> close;

?>
