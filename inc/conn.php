<?php
    define("HOST", "localhost");
    define("NAME", "");
    define("PASS", "");
    define("USER", "root");

    try{
        $conn =  new PDO("mysql:host=".HOST.";name=".NAME, PASS, USER);
    }catch(PDOException $exp){
        exit("Error = ".$exp->getMessage());
    }
?>