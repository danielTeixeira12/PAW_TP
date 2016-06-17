<?php

require_once (realpath(dirname(__FILE__)) . '/../../Config.php');

use Config as Conf;

require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationManagerPath() . 'OfertaManager.php');

$errors = array();
$input = INPUT_POST;

$categoria = filter_input($input, 'categoriaO');
$tipo = filter_input($input, 'tipoO');
$status = filter_input($input, 'statusO');



if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (filter_has_var($input, 'tituloO') && filter_input($input, 'tituloO')) {
        $titulo = filter_input($input, 'tituloO');
    } else {
        $errors['tituloO'] = 'O título é inválido';
    }
}

//TipoOferta

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (filter_has_var($input, 'infoO') && filter_input($input, 'infoO')) {
        $informacao = filter_input($input, 'infoO');
    } else {
        $errors['infoO'] = 'A categoria é inválida';
    }
}

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (filter_has_var($input, 'funcO') && filter_input($input, 'funcO')) {
        $funcao = filter_input($input, 'funcO');
    } else {
        $errors['funcO'] = 'A categoria é inválida';
    }
}

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (filter_has_var($input, 'regi') && filter_input($input, 'regi')) {
        $regiao = filter_input($input, 'regi');
    } else {
        $errors['regi'] = 'A categoria é inválida';
    }
}

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    $tempSal = str_replace(',','.',filter_input($input, 'sal'));
    if (filter_has_var($input, 'sal') && filter_input($input, 'sal') && filter_var($tempSal, FILTER_VALIDATE_FLOAT)) {
        $salario = $tempSal;
    } else {
        $errors['sal'] = 'Insira um salário numérico';
    }
}

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (filter_has_var($input, 'req') && filter_input($input, 'req')) {
        $requisitos = filter_input($input, 'req');
    } else {
        $errors['req'] = 'A categoria é inválida';
    }
}
