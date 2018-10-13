<?php
   echo "Conexão MySqli oo 2<br><br>";

    $conn = new mysqli("localhost","root","","novabasededados","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "create table exemplo(".
            "id int(6) unsigned auto_increment primary key, ".
            "linha1 varchar(20) not null, ".
            "linha2 varchar(20))";
    
    if ($conn->query($sql)){
        echo "tabela criada!";
    }else{
        echo "não foi possível criar a tabela: " . $conn->error;
    }
    
    $conn->close();

