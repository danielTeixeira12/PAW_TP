<?php
    require_once (realpath(dirname( __FILE__ )) . '/../../Config.php');
    use Config as Conf;
    
require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriasManager
 *
 * @author danielteixeira
 */
class CategoriasManager extends MyDataAccessPDO{
    const SQL_TABLE_NAME = 'categoriaOferta';
    
    function getCategorias(){
        return $this->getRecords(self::SQL_TABLE_NAME);
    }

    
  
}
