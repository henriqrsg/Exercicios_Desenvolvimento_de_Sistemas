<?php
    session_start();

    if (empty($_SESSION) || !isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }
?>
