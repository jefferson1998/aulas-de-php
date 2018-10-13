<?php
   echo "Conexão MySqli oo 9<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "update exemplo set linha1='alterado1', linha2='alterado2'".
            "where id=5";
    
    if ($conn->query($sql)){
        echo "alterado com sucesso!";
    }else{
        echo "erro ao alterar: " . $conn->error;
    }
    
    $conn->close();