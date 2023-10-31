<?php 
    $dbHost = 'Localhost';
    $dbUsername ='root';
    $dbPassword='';
    $dbname = 'purefy';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

?>
