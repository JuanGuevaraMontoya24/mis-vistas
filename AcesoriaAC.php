<!-- API tutoria academica (GET) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/acesorias_academica',
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
  //var_dump($data); die;

  $currentDate = date('Y-m-d'); // Obtener la fecha actual

  // Ordenar los registros con estado_aceptado = 1 primero, seguidos de los registros con estado_aceptado = 0
  $data_aceptados = array();
  $data_no_aceptados = array();
  
  foreach ($data["Detalles"] as $acesoriaac) {
      if ($acesoriaac['fecha'] < $currentDate) {
          $acesoriaac['estado_aceptado'] = 0;
      }
  
      if ($acesoriaac['estado_aceptado'] == 1) {
          $data_aceptados[] = $acesoriaac;
      } else {
          $data_no_aceptados[] = $acesoriaac;
      }
  }
  unset($acesoriaac); // Liberar la referencia al último elemento del bucle foreach

?>
  <!doctype html>   
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./dist/img/upeuLogo.png">
        <title>Acesoria Academica | CRAI-Tarapoto</title>
        <?php require "./resource/head.php"; ?>
    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed ">
        <div class="wrapper">

            <?php
                require './resource/nav.php';
                require './resource/aside.php';
            ?> 
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Acesoria Academica</h1>
                            </div>
                           
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Acesoria Academica</li>
                                </ol>
                            </div>                        
                        </div>
                    </div>
                </div>        

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <a href="AcesoriaAC_c.php" class="btn btn-primary">Registrar</a>                     
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <div class="container col-xl-12">
                                            <table class="table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" style="text-align: center">#</th>
                                                        <th scope="col" style="text-align: center">Asesor</th>
                                                        <th scope="col" style="text-align: center">Estudiante</th>
                                                        <th scope="col" style="text-align: center">Cod del estudiante</th> 
                                                        <th scope="col" style="text-align: center">Fecha</th> 
                                                        <th scope="col" style="text-align: center">Hora</th> 
                                                        <th scope="col" style="text-align: center">Estado</th>
                                                        <th scope="col" style="text-align: center" colspan="2">Operaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $contador =1;
                                                    foreach($data_aceptados as $acesoriaac): ?>
                                                        <tr> 
                                                            <td style="text-align: center"> <?= $contador++ ?></td>
                                                            <td style="text-align: center"> <?= $acesoriaac['nom_asesor']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['nom_estudiante']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['cod_estudiante']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['fecha']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['hora']?> </td>
                                                            <td style="text-align: center">
                                                                <?= $acesoriaac["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                                                            </td>
                                                            <td style="text-align: center"><a href="AcesoriaAC_u.php?idacesoria_academica=<?= $acesoriaac['idacesoria_academica'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                                                            <td style="text-align: center"><a href="AcesoriaAC_d.php?idacesoria_academica=<?= $acesoriaac['idacesoria_academica'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                                                        </tr>
                                                    <?php endforeach?>

                                                    <?php foreach ($data_no_aceptados as $acesoriaac) : ?>

                                                    <tr>
                                                    <td style="text-align: center"> <?= $contador++ ?></td>
                                                            <td style="text-align: center"> <?= $acesoriaac['nom_asesor']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['nom_estudiante']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['cod_estudiante']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['fecha']?> </td>
                                                            <td style="text-align: center"> <?= $acesoriaac['hora']?> </td>
                                                            <td style="text-align: center">
                                                                <?= $acesoriaac["estado_aceptado"] == 1 ? '<span class="text-center badge badge-success">Activado</span>' : '<span class="text-center badge badge-danger">Desactivado</span>' ?>
                                                            </td>
                                                            <td style="text-align: center"><a href="AcesoriaAC_u.php?idacesoria_academica=<?= $acesoriaac['idacesoria_academica'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                                                            <td style="text-align: center"><a href="AcesoriaAC_d.php?idacesoria_academica=<?= $acesoriaac['idacesoria_academica'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                                                        </tr>
                                                    <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>         
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php require './resource/footer.php'; ?>

        </div>
        <?php require './resource/script.php'; ?>
    </body>
  
</html>	