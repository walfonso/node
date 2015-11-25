<?php
	class Consulta {
		var $categoria;
		var $superficie;
		var $cant_infla;
		var $cant_res;
		
		function Consulta($cat, $sup, $cant_i, $cant_r) {
			$this->categoria=$cat;
			$this->superficie=$sup;
			$this->cant_infla=$cant_i;
			$this->cant_res=$cant_r;
		}
	
		function setCategoria($cat) {
			$this->categoria=$cat;
		}
		function setSuperficie($sup) {
			$this->superficie=$sup;
		}
		function setCant_infla($cant_i){
			$this->cant_infla=$cant_i;
		}
		function setCant_res($cant_r){
			$this->cant_res=$cant_r;
		}


		function getCategoria() {
			return $this->categoria;
		}
		function getSuperficie() {
			return $this->superficie;
		}
		function getCant_infla() {
			return $this->cant_infla;
		}
		function getCant_res() {
			return $this->cant_res;
		}
	}
?>