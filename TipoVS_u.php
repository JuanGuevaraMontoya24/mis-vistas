<!-- API FACULTADES (UPDATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){ 
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/tipos_visitante/'.$_POST['idtiposvisita'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'PUT',
      CURLOPT_POSTFIELDS => 'descrip='.$_POST["descrip"],
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data_TV  = json_decode($response, true);
		header("Location: Otros.php");
  }else{
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/tipos_visitante/'.$_GET['idtiposvisita'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data_TV  = json_decode($response, true);
  }
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./dist/img/upeuLogo.png">
  <title>Document</title>
  <?php require "./resource/head.php"; ?>
</head>
<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed layout-navbar-fixed">
  <?php require './resource/nav.php'; require './resource/aside.php'; ?>
  <h3 class="text-center">Administrar Tipo Documento</h3>
  <div class="container">
    <form method="post" class="col-xl-8 offset-2">
      <input type="hidden" name="idtiposvisita" id="idtiposvisita" value="<?= $data_TV ["Detalles"]['idtiposvisita'] ?>">
      <div class="form-group">
        <label for="descrip">Facultad:</label>
        <input type="text" name="descrip" class="form-control" id="descrip" value="<?= $data_TV ["Detalles"]['descrip'] ?>"/>
      </div>
      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
      <a href="Otros.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
    </form>
  </div>
  <?php require './resource/footer.php'; require './resource/script.php'; ?>
</body>
</html>

