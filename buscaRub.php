<?php
require_once ('assets/frontend/dataBase.class.php');
header('Content-Type: application/json');
$data = array();
	$conectar = new Conecta();
	
    $term  = (isset($_GET['term']))? htmlspecialchars($_GET['term']) :null;
   
	if($term != ''){
		
		//$consulta = "SELECT * FROM rubros WHERE CONCAT_WS(' ',codigo,rubros) LIKE '%term%'";
		$consulta = "SELECT * FROM rubros WHERE codigo LIKE '%$term%' OR rubros LIKE '%$term%'  ORDER BY id";
		$query = $conectar->consultarBD($consulta);	    
/*		$consulta = "SELECT COUNT(*) AS cnt 
				FROM rubros WHERE CONCAT_WS(' ',codigo,rubros) LIKE '%term%'";
		$Rcon = $conectar->consultarBD($consulta);	
		if ($Rcon[0]['cnt'] != 0) {

*/
			foreach($query as $reg)
			{
				$data[] = array(
								"id"   => $reg['id'],
								"name" => $reg['codigo']. ' - ' .$reg['rubros'],
							   );
			}
		
			echo json_encode($data);
		}
	
		else
		{
	
			$data[] = array(
							"id"   => 0,
							"name" => 'No hay Coincidencias'
						   );
			echo json_encode($data);	
		}
	/*}
	else
	{
		$data[] = array(
						"id"   => 0,
						"name" => 'Ingrese Rubro a Buscar'
					   );
		echo json_encode($data);	
	}*/


?>