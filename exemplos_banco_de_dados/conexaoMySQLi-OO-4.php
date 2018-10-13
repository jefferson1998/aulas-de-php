<?php
   echo "Conexão MySqli oo 4<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "insert into exemplo(linha1, linha2) values ('valor1','valor2');";
    
    if ($conn->query($sql)){
        echo "dados inseridos! <br>";
        echo "chave primária: " . $conn->insert_id;
    }else{
        echo "não foi possível inserir os dados: " . $conn->error;
    }
    
    $conn->close();