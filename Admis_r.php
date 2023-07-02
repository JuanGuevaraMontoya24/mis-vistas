<?php
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crai.informaticapp.com/administradores',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'nombres='.$_POST["nombres"].
														'&apellidos='.$_POST["apellidos"].
														'&id_permiso='.$_POST["id_permiso"].
														'&tipo_dc='.$_POST["tipo_dc"].
														'&docum='.$_POST["docum"].
														'&user='.$_POST["user"].
														'&pin='.$_POST["pin"].
														'&email='.$_POST["email"].
														'&telefono='.$_POST["telefono"].
														'&direccion='.$_POST["direccion"].
														'&foto='.addslashes(file_get_contents($_FILES['foto']['t_foto'])),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response, true);
		header("Location: index.php");
	}
?>