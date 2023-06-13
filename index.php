<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    

    //database connection
    $conn = new mysqli('localhost','root','','form');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into registration(name, number, email, subject)
        values(?,?,?,?)");
        $stmt->bind_param("siss", $name, $number, $email, $subject);
        $stmt->execute();
        echo"registration Sucessful";
        $stmt->close();
        $conn->close();
        }
?>