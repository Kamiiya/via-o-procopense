<?php
session_start();
    $_SESSION['autenticado'] = "ZERO";
    header('location:index.php');
?>