<?php
    include_once "inc/conn.php";
    // session_start();

    if(isset($_POST["signup"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        
        $name = $fname." ".$lname; 

        $address = $_POST["address"];
        $country = $_POST["country"];
        $number = $_POST["number"];
        $email = $_POST["email"];

        $pass = $_POST["pass"];
        $conpass = $_POST["conpass"];

        
    }
    
?>