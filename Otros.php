<!-- API facultades (GET) -->
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

<!-- API escuelas (GET) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/escuelas',
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
  $data_EC = json_decode($response, true);
?>

<!-- API tipos documento (GET) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/tipos_documento',
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
  $data_TD = json_decode($response, true);
?>

<!-- API tipos visitante (GET) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/tipos_visitante',
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
  $data_TV = json_decode($response, true);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./dist/img/upeuLogo.png">
  <title>Recursos | CRAI</title>
  <?php require "./resource/head.php"; ?>
</head>
<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed layout-navbar-fixed">
  <?php require './resource/nav.php'; require './resource/aside.php'; ?>
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="row">
        <!-- TABLA FACULTADES -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <!-- encabezado de la tabla FA -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Facultades</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="Otros.php">Facultades</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#modalRegFA"><i class="fas fa-plus-circle"></i> Agregar</button>
                    Administrar Facultad
                  </h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped display" style="width: 100% !important;">
                  <thead>
                    <tr>
                      <th class="text-center">N°</th>
                      <th class="text-center">Acciones</th>
                      <th>Nombre</th>
                      <th>Siglas</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $contador = 1; foreach ($data_FA["Detalles"] as $facultad): ?>
                      <tr>
                        <td class="text-center"><?= $contador++ ?></td>
                        <td class="text-center">
                        <button class="btn btn-light btn-sm"><a href="Facultad_u.php?idfacultad=<?= $facultad["idfacultad"] ?>"><i class="fas fa-pencil-alt text-primary"></i></button>
                          <button class="btn btn-light btn-sm"><a href="Facultad_d.php?idfacultad=<?= $facultad["idfacultad"] ?>"><i class="fas fa-skull-crossbones text-danger" ></i></a></button>
                        </td>
                        <td><?= $facultad["nombre"] ?></td>
                        <td><?= $facultad["siglas"] ?></td>
                        <td class="text-center">
                          <?= $facultad["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- TABLA ESCUELAS -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <!-- encabezado de la tabla EC -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Escuelas</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="Otros.php">Escuelas</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#modalRegEC"><i class="fas fa-plus-circle"></i> Agregar</button>
                    Administrar Carreras
                  </h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped display" style="width: 100% !important;">
                  <thead>
                    <tr>
                      <th class="text-center">N°</th>
                      <th class="text-center">Acciones</th>
                      <th>Nombre</th>
                      <th>Pertenece a</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $contador = 1; foreach ($data_EC["Detalles"] as $escuelas): ?>
                      <tr>
                        <td class="text-center"><?= $contador++ ?></td>
                        <td class="text-center">
                          <button class="btn btn-light btn-sm"><a href="Escuela_u.php?idescuela=<?= $escuelas["idescuela"] ?>"><i class="fas fa-pencil-alt text-primary"></i></button>
                          <button class="btn btn-light  btn-sm"><a href="Escuela_d.php?idescuela=<?= $escuelas["idescuela"] ?>"><i class="fas fa-skull-crossbones text-danger"></i></a></button>
                        </td>
                        <td><?= $escuelas["descripcion"] ?></td>
                        <td><?= $escuelas["siglas"] ?></td>
                        <td class="text-center">
                          <?= $escuelas["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- TABLA TIPO DOCUMENTO -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <!-- encabezado de la tabla TP -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tipo Documento</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="Otros.php">Tipo_Doc</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#modalRegTD"><i class="fas fa-plus-circle"></i> Agregar</button>
                    Tipo_Doc.
                  </h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped display" style="width: 100% !important;">
                  <thead>
                    <tr>
                      <th class="text-center">N°</th>
                      <th class="text-center">Acciones</th>
                      <th>Denominación</th>
                      <th class="text-center">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $contador = 1; foreach ($data_TD["Detalles"] as $tipo_dc): ?>
                      <tr>
                        <td class="text-center"><?= $contador++ ?></td>
                        <td class="text-center">
                          <button class="btn btn-light btn-sm"><a href="TipoDC_u.php?idtiposdoc=<?= $tipo_dc["idtiposdoc"] ?>"><i class="fas fa-pencil-alt text-primary"></i></button>
                          <button class="btn btn-light  btn-sm"><a href="TipoDC_d.php?idtiposdoc=<?= $tipo_dc["idtiposdoc"] ?>"><i class="fas fa-skull-crossbones text-danger"></i></a></button>
                        </td>
                        <td><?= $tipo_dc["denominador"] ?></td>
                        <td class="text-center">
                          <?= $tipo_dc["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- TABLA TIPO VISITANTE -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <!-- encabezado de la tabla TV  -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tipo Visitante</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="Otros.php">Tipo_Vist</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#modalRegTV"><i class="fas fa-plus-circle"></i> Agregar</button>
                    Tipo Visitante.
                  </h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped display" style="width: 100% !important;">
                  <thead>
                    <tr>
                      <th class="text-center">N°</th>
                      <th class="text-center">Acciones</th>
                      <th>Tipo</th>
                      <th class="text-center">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $contador = 1; foreach ($data_TV["Detalles"] as $tipo_vs): ?>
                      <tr>
                        <td class="text-center"><?= $contador++ ?></td>
                        <td class="text-center">
                          <button class="btn btn-light btn-sm"><a href="TipoVS_u.php?idtiposvisita=<?= $tipo_vs["idtiposvisita"] ?>"><i class="fas fa-pencil-alt text-primary"></i></button>
                          <button class="btn btn-light  btn-sm"><a href="TipoVS_d.php?idtiposvisita=<?= $tipo_vs["idtiposvisita"] ?>"><i class="fas fa-skull-crossbones text-danger"></i></a></button>
                        </td>
                        <td><?= $tipo_vs["descrip"] ?></td>
                        <td class="text-center">
                          <?= $tipo_vs["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
        </div>
        
      </div>
    </div>
    
  </div>

  <!-- Modal agregar FACULTADES -->
  <div class="modal fade" id="modalRegFA">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <?= require 'Facultad_c.php'; ?>
      </div>
    </div>
  </div>

  <!-- Modal agregar ESCUELAS -->
  <div class="modal fade" id="modalRegEC">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <?= require 'Escuela_c.php'; ?>
      </div>
    </div>
  </div>

  <!-- Modal agregar TIPO DOCUMENTO -->
  <div class="modal fade" id="modalRegTD">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <?= require 'TipoDC_c.php'; ?>
      </div>
    </div>
  </div>
  
  <!-- Modal agregar TIPO VISITANTE -->
  <div class="modal fade" id="modalRegTV">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <?= require 'TipoVS_c.php'; ?>
      </div>
    </div>
  </div>


  <?php require './resource/footer.php'; require './resource/script.php'; ?>
</body>
</html>