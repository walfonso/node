<?php

if($_POST)
{
	foreach($_POST as $clave => $valor) 
	$$clave=addslashes(trim($valor));
}

if($_GET)
{
	foreach($_GET as $clave => $valor) 
	$$clave=addslashes(trim($valor));
}


function conectar()
{
	$server = "localhost";
	$db     = "standout_dir";
	$user   = "standout_dir";
	$pass   = "eleven2912"; 


//	mysql_connect("localhost", "freelimi_secform", "secform123") or die (mysql_error());
//	mysql_select_db("freelimi_secform") or die (mysql_error());	
	mysql_connect("$server","$user", "$pass") or die("No se puede conectar al servidor");	
	mysql_select_db("$db") or die(mysql_error());
}

	conectar();
	$consulta=mysql_query("SELECT cod_local, localidad FROM localidades WHERE cod_prov='$id' order by localidad ASC") or die(mysql_error());
	
	// Comienzo a imprimir el select
	while($registro=mysql_fetch_row($consulta))
	{
		$regis = utf8_encode($registro[1]);
		echo "<option value='".$registro[0]."'>".$regis."</option>";
	}			
?>