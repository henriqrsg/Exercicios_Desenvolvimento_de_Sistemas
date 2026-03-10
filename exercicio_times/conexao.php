<?php

    $host = "127.0.0.1";
    $user = "desenvolvimento_de_sistemas";
    $porta = "3306";
    $password = "ceub123456";
    $db = "times_futebol";


    $conexao = new PDO(
        'mysql:host='.$host.';
        port='.$porta.';
        dbname='.$db,
        $user,
        $password);

?>