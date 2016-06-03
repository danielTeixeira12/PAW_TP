<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="JS/login.js"></script>
        <link rel="stylesheet"  href="Application/styles/registoCSS.css">
    </head>
    <body>
        <?php
        require_once __DIR__ . '/Application/Validator/RegistoPrestadorValidator.php';
        ?>

        <section>
            <p id="tipoUtilizador">Tipo Utilizador:</p>
            <label id="empregador">Empregador</label><input id="tipoEmpregador" type="radio" value="empregador" name="tipoUtilizador">
            <label id="prestador">Prestador de serviços</label><input id="tipoPrestador" type="radio" value="prestador" name="tipoUtilizador">
        </section>  
            <form id="formEmpregador">
                <label for="mailE">Email</label><input id="mailE" type="email" name="mailE">
                <label for="passE">Password</label><input id="passE" type="password" name="passE">
                <label for="nomeE">Nome</label><input id="nomeE" type="text" name="nomeE">
                <label for="contactoE">Contacto</label><input id="contactoE" type="text" name="contactoE">
                <label for="moradaE">Morada</label><input id="moradaE" type="text" name="moradaE">
                <label for="codigopostalE">Codigo-Postal</label><input id="codigopostalE" type="text" name="codigopostalE">
                <label for="distritoE">Distrito</label><input id="distritoE" type="text" name="distritoE">
                <label for="concelhoE">Concelho</label><input id="concelhoE" type="text" name="concelhoE">
            </form>
        <form id="formPrestador" action="utilizadorPrestador.php" method="post">
                <label for="mailP">Email</label><input id="mailP" type="email" name="mailP">
                <label for="passP">Password</label><input id="passP" type="password" name="passP">
                <label for="nomeP">Nome</label><input id="nomeP" type="text" name="nomeP"><?=isset($errors) && array_key_exists('nomeP', $errors) ? $errors['nomeP']:'' ?>
                <label for="contactoP">Contacto</label><input id="contactoP" type="text" name="contactoP">
                <label for="fotografiaP">Fotografia</label><input id="fotografiaP" type="file" name="fotografiaP">
                <label for="moradaP">Morada</label><input id="moradaP" type="text" name="moradaP">
                <label for="codigopostalP">Codigo-Postal</label><input id="codigopostalP" type="text" name="codigopostalP">
                <label for="distritoP">Distrito</label><input id="distritoP" type="text" name="distritoP">
                <label for="concelhoP">Concelho</label><input id="concelhoP" type="text" name="concelhoP">
                <input id="confirm" type="submit" value="CONFIRM">
            </form>
            
    </body>
</html>
