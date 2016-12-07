<?php

require_once 'DbConnection.php';
session_start();

class Login {

    private static $instancia;
    private $dbh;

    private function __construct() {

        $this->dbh = DbConnection::singletonConexion();
    }

    public static function singletonLogin() {

        if (!isset(self::$instancia)) {

            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }

        return self::$instancia;
    }

    public function validarUsuario($nick, $password) {

        try {
            $sql = "SELECT * from personas WHERE correo = ? AND clave = ?";
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1, $nick);
            $query->bindParam(2, $password);

            $query->execute();
            $this->dbh = null;

//si existe el usuario
            if ($query->rowCount() == 1) {

                $fila = $query->fetch();
                $_SESSION['idPersonas'] = $fila['idpersonas'];
                $_SESSION['nombres'] = $fila['nombres'];
                $_SESSION['apellidos'] = $fila['apellidos'];
                $_SESSION['correo'] = $fila['correo'];
                $_SESSION['clave'] = $fila['clave'];
                $_SESSION['roles_idroles'] = $fila['roles_idroles'];
                $_SESSION['area_idarea'] = $fila['area_idarea'];
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();

                return TRUE;
            }
        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();
        }
    }

// Evita que el objeto se pueda clonar
    public function __clone() {

        trigger_error('ERROR, Esta intentando Clonar un objeto.', E_USER_ERROR);
    }

}
