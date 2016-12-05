<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Local.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Solares.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/PlazaDeGarage.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Vivienda.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
class Agencia {

    public $unnamed_Inmueble_;
    private $listaAlquiler = array();
    private $areaSolicitada;
    private $ruralUrbano;
    private $locales = array(array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array());
    private $nombres = array();

    public function fusionar($ag) {
        // Not yet implemented
    }

    public function equals($a, $b) {
        $r;
        if ((is_numeric($a) && is_numeric($b)) || (is_string($a) && is_string($b))) {
            if ($a == $b) {
                $r = true;
            } else {
                $r = false;
            }
            return $r;
        } else {
            echo 'No se pueden comprarar, por favor revise que ambos sean del mismo tipo de dato.';
        }
    }

    public function toString($a) {
        if (is_string($a)) {
            $a = (Integer)$a;
        } else if (is_numeric($a)) {
            $a = (String)$a;
        } else {
            echo 'conversion no completada.';
        }
        return $a;
    }

    public function localesSegundaMano($m) {
        if (is_numeric($m)) {
            $L = new Local();
            $this->locales = $L->getListadoLocales();
            $this->nombres = $L->getNombreCampos();
            echo "Vamos a mostrar los Locales Comerciales que sean de segunda mano con una Area superior a $m m2.";
            for ($row = 0; $row < 5; $row++) {
                $a = $this->locales[$row][7];
                if ($a == "Segunda Mano") {
                    $b = $this->locales[$row][2];
                    if ($b >= $m) {
                        print "<p><b>Codigo ".$this->locales[$row][4].": " . $this->locales[$row][0] . "</b></p>";
                        echo "<ul>";
                        for ($col = 0; $col < 8; $col++) {

                            echo "<li>" . $this->nombres[$col] . "</li>";
                            echo $this->locales[$row][$col];
                        }
                        echo "</ul>";
                    }
                }
            }
        } else {
            echo 'Por favor ingresa un numero valido para Area';
        }
    }

    public function SolaresRusticos() {
        $S = new Solares();
        $this->locales = $S->getListadoViviendas();
        $this->nombres = $S->getNombreCampos();
        echo "Vamos a mostrar los Solares que sean  Rurales";
        for ($row = 0; $row < 5; $row++) {
            $a = $this->locales[$row][7];
            if ($a == "Rural") {
                print "<p><b>Codigo ".$this->locales[$row][4].": " . $this->locales[$row][0] . "</b></p>";
                echo "<ul>";
                for ($col = 0; $col < 5; $col++) {

                    echo "<li>" . $this->nombres[$col] . "</li>";
                    echo $this->locales[$row][$col];
                }
                echo "</ul>";
            }
        }
    }

    public function inmueblesVenta($p) {

        if (is_numeric($p)) {
            $L = new Local();
            $S = new Solares();
            $P = new PlazaDeGarage();
            $V = new Vivienda();
            $this->nombres = $S->getNombreCampos();
            $this->locales = array_merge($S->getListadoViviendas(), $P->getListadoLocales(), $V->getListadoViviendas(), $L->getListadoLocales());
            echo "Vamos a mostrar los iNMUEBLES que sean con un PRECIO menor a $ $p.";
            for ($row = 0; $row < 20; $row++) {
                $a = $this->locales[$row][3];
                if ($a <= $p) {
                    print "<p><b>Codigo ".$this->locales[$row][4].": " . $this->locales[$row][0] . "</b></p>";
                    for ($col = 0; $col < 4; $col++) {

                        echo "" . $this->nombres[$col] . ": ";
                        echo "" . $this->locales[$row][$col] . "  |  ";
                    }
                    echo "<br/>";
                }
            }
        } else {
            echo 'Por favor ingresa un numero valido para Precio';
        }
    }

    /**
     * @return mixed
     */
    public function getAreaSolicitada() {
        return $this->areaSolicitada;
    }

    /**
     * @param mixed $areaSolicitada
     */
    public function setAreaSolicitada($areaSolicitada) {
        $this->areaSolicitada = $areaSolicitada;
    }

    public function getRuralUrbano() {
        return $this->ruralUrbano;
    }

    public function setRuralUrbano($ruralUrbano) {
        $this->ruralUrbano = $ruralUrbano;
    }

}

?>