<?php header('Content-Type: application/json');

	$numero = $_GET["num"];
	$json   = array();

	if(is_numeric($numero)){
		for ($i = 0; $i < $numero; $i++){  
			$serie["result"] = serie($i);
			array_push($json, $serie);
		}
		$data["response"] = ["error"   => false, "message" => "Resultado de la serie para el numero ingresado:", "serie"   => $json];


	}else{
		$data["response"] = ["error"   => true, "message" => "El parametro ingresado debe ser numerico."];
	}

	echo json_encode($data);


	#definicion de la funcion serie
	function serie($n) {  
		if($n == 0) {
			return 0;
	 	}

	 	if($n == 1) {
	 		return 1;
	 	}else{
	 		return serie($n-1) + serie($n-2);
	 	}
	}

?>