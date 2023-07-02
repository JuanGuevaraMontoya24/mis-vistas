<!-- API FACULTADES (GET) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/facultades',
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
  $data_FA = json_decode($response, true);
?>
<!-- API ESCUELAS (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/escuelas',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'descripcion='.$_POST["descripcion"].
                            '&idfacul='.$_POST["idfacul"],
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data_EC = json_decode($response, true);
    header("Location: Otros.php");
  }
?>

<h3 class="text-center">Administrar Nueva Carrera</h3>
<div class="container">
  <form method="post" class="col-xl-8 offset-2">
    <div class="form-group">
      <label for="facultad">Facultad:</label>
      <select name="idfacul" class="form-control" id="facultad">
        <?php foreach ($data_FA["Detalles"] as $facultad): ?>
          <option value="<?= $facultad["idfacultad"] ?>"><?= $facultad["nombre"] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="descripcion">Nombre:</label>
      <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Ingrese el Nombre" />
    </div>
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
    <a href="Otros.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
  </form>
</div>

