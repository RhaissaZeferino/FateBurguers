<?php
    //nao mexer nesse arquivo, porque eu acho que todos os computadores vem com esse nome de servidor e usuario
    $servename = "localhost";
    $username = "root";
    $password = ""; // sem senha, nao alterar

    $conn = new PDO("mysql:host=$servename;dbname=lanchonete", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>