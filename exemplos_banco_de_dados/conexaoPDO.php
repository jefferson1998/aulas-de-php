<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=estado","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Conexão estabelecida!";
    } catch (PDOException $e) {
        echo "A conexão falhou: " . $e->getMessage();
    }