<?php
    echo "Conexão MySqli oo 2<br><br>";

    $conn = new mysqli("localhost","root","","","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "create database teste;";
    
    if ($conn->query($sql)){
        echo "base de dados criada!";
    }else{
        echo "não foi possível criar a base de dados: " . $conn->error;
    }
    
    $conn->close();

    
    