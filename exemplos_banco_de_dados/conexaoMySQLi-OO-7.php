<?php
   echo "Conexão MySqli oo 7<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "select * from exemplo;";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"] . ", linha1: " . $row["linha1"] . ", linha2: " . $row["linha2"]. "<br>";
        }
    }else{
        echo "não foi retornado resultado";
    }
    
    $conn->close();
