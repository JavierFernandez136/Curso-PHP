<?php 
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web con PHP</title>
    <link type="text/css" rel="stylesheet" href="assets/components/bootstrap-5.3.5-dist/css/bootstrap.min.css"/>
    <script type="text/javascript" src="assets/components/bootstrap-5.3.5-dist/js/bootstraP.min.js"></script>
    <script type="text/javascript" src="assets/components/jquery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
    <h1>Web con PHP</h1>
    <hr/>
    <a href="index.php" class=" btn btn-primary">Home</a>
    <a href="crear.php" class=" btn btn-primary">Crear nuevo usuario</a>
    <hr/>
    <?php $variable = "contenido"; ?>

