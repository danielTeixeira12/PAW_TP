<?php

require_once (realpath(dirname(__FILE__)) . '/../../Config.php');

use Config as Conf;

require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once (Conf::getApplicationManagerPath() . 'CandidaturaManager.php');
require_once (Conf::getApplicationManagerPath() . 'OfertaManager.php');
require_once (Conf::getApplicationManagerPath() . 'SessionManager.php');
$exist = SessionManager::existSession('email');
$tipo = SessionManager::existSession('tipoUser');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if($exist && $tipo){
    if(SessionManager::getSessionValue('tipoUser') === 'administrador'){
        $id = filter_input(INPUT_GET, 'idOferta');        
        $manCand = new CandidaturaManager();
        $manCand->deleteCandidaturaByIdOferta($id);
        $manOferta = new OfertaManager();
        $res = $manOferta->getOfertaByID($id);
        $updateCand = new OfertaTrabalho($res[0]['idOferta'], $res[0]['idCategoria'], $res[0]['tituloOferta'], $res[0]['tipoOferta'], $res[0]['informacaoOferta'], $res[0]['funcaoOferta'], $res[0]['salario'], $res[0]['requisitos'], $res[0]['regiao'], $res[0]['idEmpregador'], 'desativada', $res[0]['dataLimite']); 
        $manOferta->editOferta($updateCand, $id);
        echo 'Oferta desativada';
    }else{
        echo '';
    }    
}