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

function conv_fecha($fecha){
    ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
}   

if ($a1 == '') {echo 1; exit();}

$a = array(   
	0=>$a1,  
	1=>$a2,  
	2=>$a3,  
	3=>$a4,  
	4=>$a5,  
	5=>$a6,  
	6=>$a7,  
	7=>$a8,  
	8=>$a9,  
	9=>$a10,  
	10=>$a11,  
	11=>$a12,  
	12=>$a13,  
	);



$of = array(   
	0=>$of1,  
	1=>$of2,  
	2=>$of3,  
	);

$pp = array(   
	0=>$pp1,  
	1=>$pp2,  
	2=>$pp3,  
	);


$b = array(   
	0=>conv_fecha($b1),  
	1=>$b2,  
	2=>$b3,  
	3=>$b4,  
	4=>$b5,  
	5=>$b6,  
	6=>$b61,  
	7=>$b62,  
	8=>$b7,  
	9=>$b8,  
	10=>$b9,  
	11=>$b10,  
	12=>$b101,  
	13=>$b11,  	
	14=>$b111,  		
	15=>$b12,  	
	16=>$b13,  	
	);


$c = array(   
	0=>$c1,  
	1=>$c2,  
	2=>$c3,  
	3=>$c4,  
	4=>$c5,  
	5=>$c6,  
	6=>$c7,  
	7=>$c8,  
	);
	
$d = array(   
	0=>$d1,  
	1=>$d2,  
	2=>$d3,  
	3=>$d4,  
	);

$e = array(   
	0=>$e1,  
	1=>$e2,  
	2=>$e3,  
	3=>$e4,  
	4=>$e5,  
	5=>$e6,  
	6=>$e7,  
	7=>$e8,  
	8=>$e9,  
	9=>$e10,  
	10=>$e11,  
	11=>$e12,  
	12=>$e13,  
	);

$f = array(   
	0=>$f1,  
	1=>$f2,  
	2=>conv_fecha($f3),  
	);
	
	
$a = json_encode($a);	
$b = json_encode($b);	
$c = json_encode($c);	
$d = json_encode($d);	
$e = json_encode($e);	
$f = json_encode($f);	
$of = json_encode($of);	
$pp = json_encode($pp);	


conectar();

mysql_query("INSERT INTO form_data_a (cuil, d_empresa, inf_comer, inf_planta, inf_cext, inf_alta) VALUES ('$a1', '$a', '$of', '$pp', '$a13', '$f')")  or die(mysql_error());

mysql_query("INSERT INTO form_data_b (cuil, campos) VALUES ('$a1', '$b')")  or die(mysql_error());

mysql_query("INSERT INTO form_data_c (cuil, campos) VALUES ('$a1', '$c')")  or die(mysql_error());

mysql_query("INSERT INTO form_data_d (cuil, campos) VALUES ('$a1', '$d')")  or die(mysql_error());

mysql_query("INSERT INTO form_data_e (cuil, campos) VALUES ('$a1', '$e')")  or die(mysql_error());


?>