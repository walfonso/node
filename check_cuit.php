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
	$db     = "freelimi_directorio";
	$user   = "freelimi";
	$pass   = "_nicolas197729_";

//	mysql_connect("localhost", "freelimi_secform", "secform123") or die (mysql_error());
//	mysql_select_db("freelimi_secform") or die (mysql_error());	
	mysql_connect("$server","$user", "$pass") or die("No se puede conectar al servidor");	
	mysql_select_db("$db") or die(mysql_error());
}

	conectar();
		
	$consulta=mysql_query("SELECT COUNT(*) FROM form_data_a where cuil='{$_POST['cuit']}'") or die(mysql_error());
	$registro=mysql_fetch_row($consulta);
	echo $registro[0];
	exit();
	if($registro[0]==0) 
	{ 
		echo 0;		
	
	} else  {echo 1;}


?>