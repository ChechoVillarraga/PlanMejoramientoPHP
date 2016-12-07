<?php

/**
 * @author raranda3
 * @copyright 2016
 */
class DbConnection {

    private static $instancia;
    private static $dbName = 'planmejoramientop3';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'Admin';
    private static $dbUserPassword = '1234';
    private static $dbPort = '5432';
    private static $myConnection=null;

    private function __construct() {
        // One connection through whole application
        if (null == self::$myConnection) {
            try {
                self::$myConnection = new PDO("pgsql:host=" . self::$dbHost . ";" . "port=" .
                    self::$dbPort . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$myConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }
            catch (PDOException $e) {
                die(' se presenta el siguiente error : ' . $e->getMessage());
            }
        }
        return self::$myConnection;
        
    }   

    public function prepare($sql) {

        return self::$myConnection->prepare($sql);
    }

    public static function singletonConexion() {

        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }

        return self::$instancia;
    }

// Evita que el objeto se pueda clonar
    public function __clone() {

        trigger_error('La clonaci�n de este objeto no est� permitida', E_USER_ERROR);
    }

}
