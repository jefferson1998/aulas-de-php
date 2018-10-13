<?php
   echo "Conexão MySqli oo 6<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "insert into exemplo(linha1, linha2) values (?,?);";
    
    $pstmt = $conn->prepare($sql);
    
    $linha1 = "valor 10";
    $linha2 = "valor 20";
    
    $pstmt->bind_param("ss",$linha1, $linha2);
    
    if ($pstmt->execute()){
        echo "dados inseridos! <br>";
    }else{
        echo "não foi possível inserir os dados: " . $conn->error;
    };
    
    $linha1 = "valor 30";
    $linha2 = "valor 40";    
    $pstmt->bind_param("ss",$linha1, $linha2);
    
    if ($pstmt->execute()){
        echo "dados inseridos! <br>";
    }else{
        echo "não foi possível inserir os dados: " . $conn->error;
    };
    
    $pstmt->close();
    $conn->close();