<!-- API TIPOS DOCUMENTO (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/tipos_documento',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'denominador='.$_POST["denominador"],
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data_TD = json_decode($response, true);
		header("Location: Otros.php");
  }
?>

<h3 class="text-center">Administrar Tipo Documento</h3>
<div class="container">
<form method="post" class="col-xl-8 offset-2">
  <div class="input-group mb-3">
    <input type="text" name="denominador" placeholder="Tipo Documento" class="form-control">
    <div class="input-group-append">
      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
      <a href="Otros.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
    </div>
  </div>
</form>

</div>
