<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/administradores',
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
  $data = json_decode($response, true);
?>    

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="./dist/img/upeuLogo.png">
  <title>Usuario | CRAI</title>
  <?php require "./resource/head.php"; ?>
</head>
<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed layout-navbar-fixed">

  <?php require './resource/nav.php'; require './resource/aside.php'; ?>
  

  <h1 class="text-center">Lista de Administradores</h1>

  <div class="wrapper">
    <div class="content-wrapper" >
      <!-- encabesado derecho de la tabla -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active"><a href="Admis_l.php">Administradores</a></li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!-- contenedor de botón y tabla -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary card-outline">
                <!-- div del Botón AGREGAR -->
                <div class="card-header">
                  <h5>
                    <button class="btn btn-success"><i class="fas fa-plus"></i></button>
                    Usuarios que administran el sistema
                  </h5>
                </div>
                <!-- TABLA CENTRAL ADMIN -->
                <table class="table table-striped display" style="width: 100% !important;"> <!-- esto va dentro de la clase: table-bordered -->
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Acciones</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Tipo_doc</th>
                      <th>Documento</th>
                      <th>Permisos</th>
                      <th>Contactos</th>
                      <th>Credenciales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $contador = 1; foreach ($data["Detalles"] as $admis): ?>
                      <tr>
                        <td><?= $contador++ ?></td>
                        <td>
                          <button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></button>
                          <button class="btn btn-danger  btn-sm"><i class="fas fa-skull-crossbones"></i></button>
                        </td>
                        <td><?= $admis["nombres"] ?></td>
                        <td><?= $admis["apellidos"] ?></td>
                        <td><?= $admis["denominador"] ?></td>
                        <td><?= $admis["docum"] ?></td>
                        <td><?= $admis["nombre"] ?></td>
                        <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalContacto<?= $admis["idadmin"] ?>"><i class="fas fa-eye"></i></button></td>
                        <td class="text-center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalCredencial<?= $admis["idadmin"] ?>"><i class="fas fa-user"></i></button></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  
      </section>
    </div>
  </div>

  <!-- Modal Ver Contacto del Admis -->
  <?php foreach ($data["Detalles"] as $admis): ?>
    <div class="modal fade" id="modalContacto<?= $admis["idadmin"] ?>" tabindex="-1" role="dialog" aria-labelledby="modalContactoLabel<?= $admis["idadmin"] ?>" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalContactoLabel<?= $admis["idadmin"] ?>">Detalles de Contacto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $admis["email"] ?></td>
                  <td><?= $admis["telefono"] ?></td>
                  <td><?= $admis["direccion"] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>

  <!-- Modal Ver Credencial del Admis -->
  <?php foreach ($data["Detalles"] as $admis): ?>
    <div class="modal fade" id="modalCredencial<?= $admis["idadmin"] ?>" tabindex="-1" role="dialog" aria-labelledby="modalCredencialLabel<?= $admis["idadmin"] ?>" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCredencialLabel<?= $admis["idadmin"] ?>">Credenciales del Administrador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre Completo</th>
                  <th>User</th>
                  <th>Pin</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $admis["nombres"] . " " . $admis["apellidos"] ?></td>
                  <td><?= $admis["user"] ?></td>
                  <td><?= $admis["pin"] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>

  <?php require './resource/footer.php'; require './resource/script.php'; ?>
</body>
</html>