<?php
    echo "Conexão MySqli proc<br>";
    
    $conn = mysqli_connect("localhost","root","","estado","3306");
    
    if (!$conn){
        die("A conexão falhou");
    }else{
        echo "Conexão estabelecida!";
    }