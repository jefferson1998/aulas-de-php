<?php
    echo "Conexão MySqli oo<br>";

    $conn = new mysqli("localhost","root","","estado","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }else{
        echo "Conexão estabelecida!";
    }