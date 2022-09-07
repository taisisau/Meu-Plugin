<?php

    $sdHost = 'Localhost';
    $dbUsername= 'root';
    $dbPassword = ' ';
    $dbName = 'PluginKinshipdegree';

    $conexão = new mysqli($dbHost,$dbUsername,$dbPassword, $dbName);

    if($conexao->connect_erro)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>
