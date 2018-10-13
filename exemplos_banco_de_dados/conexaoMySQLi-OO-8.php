<?php
   echo "Conexão MySqli oo 8<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "delete from exemplo where id=2";
    
    if ($conn->query($sql)){
        echo "deletado com sucesso!";
    }else{
        echo "erro ao deletar: " . $conn->error;
    }
    
    $conn->close();
