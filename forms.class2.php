<?php
session_start();
error_reporting(E_ALL);
require_once ('assets/frontend/dataBase.class.php');
date_default_timezone_set("America/Buenos_Aires");

	if($_POST)
	{
		foreach($_POST as $clave => $valor) $$clave=$valor;
	}
	if($_GET)
	{
		foreach($_GET as $clave => $valor) $$clave=$valor;
	}	
	
	$ekey =  mt_rand() + time();
	$conectar = new Conecta();
 
	 $consulta = "INSERT INTO guiaproductiva (rsocial, nfantasia, domicilio, cpostal, provincia, ciudad, telefono, cuit, email, sweb, rubro, superficie, inflamable, residuos, cresiduos, ys, rgxp, ekey, up)
	VALUES ('$rsocial', '$nfantasia', '$domicilio', '$cpostal', '$provincia', '$ciudad', '$telefono', '$cuit', '$email', '$sweb', '$rubro', '$superficie', '$inflamable', '$residuos', '$cresiduos', '$ys', '$rgxp','$ekey' , NOW())";

	$Rcon = $conectar->consultarBD($consulta);	
	
	
require_once( "assets/pdf/fpdf.php" );


function f_normal_time ($fecha) {
	$fechas = explode(' ',$fecha);
	$dia = explode('-',$fechas[0]);
	$dia = $dia[2].'/'.$dia[1].'/'.$dia[0];
	return $dia;
}


$consulta = "SELECT * from guiaproductiva where ekey = '$ekey'";

$Rcon = $conectar->consultarBD($consulta);	

$consulta = "SELECT * from guiaproductiva where ekey = '$ekey'";
$Rcon = $conectar->consultarBD($consulta);	
$pdf = new FPDF( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->Image( '../media/logos/ser-logo.jpg', 120, 0,90,70 );
$pdf->SetFont( 'Arial', '', 20 );
$pdf->SetFont( 'Arial', '', 20 );
$pdf->Ln(50 );
$pdf->SetTextColor(211,41,79);
$pdf->Write( 20, utf8_decode("LOCALIZACION PRODUCTIVA"));
$pdf->Ln(20 );
$pdf->SetFont( 'Arial', 'B', 16 );
$pdf->Write( 20, utf8_decode("Datos Personales"));
$pdf->SetFont( 'Arial', 'B', 13 );
$pdf->Ln(8);
$pdf->SetTextColor(0,0,0);
$pdf->Write( 20, utf8_decode("Razon Social / Denominación : ". $Rcon[0]['rsocial']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Nombre de Fantasia : ". $Rcon[0]['nfantasia']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("C{odigo Postal : ". $Rcon[0]['cpostal']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Provincia : ". $Rcon[0]['provincia']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Ciudad : ". $Rcon[0]['ciudad']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Domicilio : ". $Rcon[0]['domicilio']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Teléfono : ". $Rcon[0]['telefono']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("C.U.I.T. : ". $Rcon[0]['cuit']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Mail : ". $Rcon[0]['email']));
$pdf->Ln(14);
$pdf->Write( 20, utf8_decode("Sitio Web : ". $Rcon[0]['sweb']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Actividad Económica : ". $Rcon[0]['rubro']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Superficie : ". $Rcon[0]['superficie']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Inflamable : ". $Rcon[0]['inflamable']));
$pdf->Ln(6);
$pdf->SetTextColor(211,41,79);
$pdf->SetFont( 'Arial', 'B', 16 );
$pdf->Write( 20, utf8_decode("Generación de Residuos Peligrosos"));
$pdf->SetFont( 'Arial', 'B', 13 );
$pdf->Ln(8);
$pdf->Write( 20, utf8_decode("Categoría : ". $Rcon[0]['cg']));
$pdf->Ln(6);
$pdf->SetTextColor(0,0,0);
$pdf->Write( 20, utf8_decode("Denominación : ". $Rcon[0]['denominacion']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Breve descripción de los que hace : ". $Rcon[0]['descripcion']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Fecha de inicio del emprendimiento : ". f_normal_time($Rcon[0]['fecha_inicio'])));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Web : ". $Rcon[0]['web']));
$pdf->Ln(6);
$pdf->Write( 20, utf8_decode("Facebook : ". $Rcon[0]['redsocial']));
$pdf->Ln(12);
$pdf->SetTextColor(211,41,79);
$pdf->SetFont( 'Arial', 'B', 16 );
$pdf->SetTextColor(0,0,0);
$pdf->Write( 20, utf8_decode('Necesidad principal: que estás buscando? : ').utf8_decode($Rcon[0]['propuesta']));
$pdf->Ln(12);
$pdf->SetTextColor(0,0,0);
$pdf->Write( 20, utf8_decode("Fecha y hora de registro : ". $Rcon[0]['up']));
$pdf->Output('inscrip/'.$Rcon[0]['documento'].'.pdf');
		

	require_once ('mailer/PHPMailerAutoload.php');

try {
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug =0;
		$mail->Debugoutput = 'html';
		$mail->Host = "mail.softdevtest.com";
		$mail->Port = 25; 
		$mail->SMTPAuth = true;
		//$mail->SMTPSecure ='ssl';
		$mail->Username = "ser@produccionrosario.gob.ar";
		$mail->Password = "t1p8zk";
		$mail->setFrom('ser@produccionrosario.gob.ar', 'Consulta Localización Productiva  - MR');
		$mail->addAddress($email); /** agregar mail de envio*/
		$mail->addAddress('hellmen@live.com.ar'); /** agregar mail de envio*/
		$mail->IsHTML(true);
	// Activo codificacción utf-8
		$mail->CharSet = 'UTF-8';						
		$mail->msgHTML('Se adjunta PDF con datos de registro');
		$mail->AddAttachment('inscrip/'.$Rcon[0]['email'].'.pdf');
		$mail->Subject = 'Localización Productiva  - MR';
		$mail->Send();
  //echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}						

?>

