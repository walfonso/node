<?php 
	include ("Consulta.php");
	$obj=new Consulta(2,244,23,3);
	//$obj->setCategoria(2);
	//$obj->setSuperficie(2000);
	//$obj->setCant_infla(1011);
	//$obj->setCant_res(2222);
	

	echo "Categoria: " . $obj->getCategoria();
	echo "Superficie: " . $obj->getSuperficie();
	echo "Cantidad de Inflamables: " . $obj->getCant_infla();
	echo "Cantidad de Residuos: " . $obj->getCant_res();


 ?>