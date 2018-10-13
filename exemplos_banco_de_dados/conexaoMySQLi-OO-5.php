<?php
   echo "Conexão MySqli oo 5<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "insert into exemplo(linha1, linha2) values ('valor3','valor4');".
        "insert into exemplo(linha1, linha2) values ('valor5','valor6');".
        "insert into exemplo(linha1, linha2) values ('valor7','valor8');";
    
    if ($conn->multi_query($sql)){
        echo "dados inseridos! <br>";
    }else{
        echo "não foi possível inserir os dados: " . $conn->error;
    }
    
    $conn->close();