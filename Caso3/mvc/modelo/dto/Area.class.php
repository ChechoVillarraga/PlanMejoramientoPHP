<?php
	/**
	 * Object represents table 'area'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Area{
		
		private $idarea;

		private $area;

		function getIdArea() {
                    return $this->idarea;
                }

                function getArea() {
                    return $this->area;
                }

                function setIdArea($idArea) {
                    $this->idarea = $idArea;
                }

                function setArea($area) {
                    $this->area = $area;
                }


	}
?>