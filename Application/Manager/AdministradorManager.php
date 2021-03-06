<?php

require_once (realpath(dirname(__FILE__)) . '/../../Config.php');

use Config as Conf;

require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministradorManager
 *
 * @author User
 */
class AdministradorManager extends MyDataAccessPDO{

    const SQL_TABLE_NAME = 'administrador';
    
    function verifyEmail($email){
        return parent::getRecords(self::SQL_TABLE_NAME, array('email' =>$email));
    }
    
    public function existsAdministrador($email, $password) {
        $res = parent::getRecords(self::SQL_TABLE_NAME);

        foreach ($res as $key => $value) {
            if ($value['email'] === $email && $value['password'] === $password) {
                return true;
            }
        }
    }

}
