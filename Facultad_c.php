<!-- API FACULTADES (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/facultades',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'nombre='.$_POST["nombre"].
                            '&siglas='.$_POST["siglas"],
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data_F = json_decode($response, true);
    header("Location: Otros.php");
  }
?>
<h3 class="text-center">Administrar Nueva Facultad</h3>
<div class="container">
  <form method="post" class="col-xl-8 offset-2">
    <div class="form-group">
      <label for="nombre">Facultad:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese el Nombre" />
    </div>
    <div class="form-group">
      <label for="Siglas">Siglas:</label>
      <input type="text" name="siglas" class="form-control" id="siglas" placeholder="Ingrese el Nombre" />
    </div>
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
    <a href="Otros.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
  </form>
</div>
