<!-- API Tutoria_academica (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/circulacion',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'id_estudiante='.$_POST["id_estudiante"].
                            '&cod_est='.$_POST["cod_est"].
                            '&nom_estudiante='.$_POST["nom_estudiante"].
                            '&id_libro='.$_POST["id_libro"].
                            '&cod_libro='.$_POST["cod_libro"].
                            '&titulo_libro='.$_POST["titulo_libro"].
                            '&fecha_adq='.$_POST["fecha_adq"].
                            '&fecha_dev='.$_POST["fecha_dev"].
                            '&estado_libro='.$_POST["estado_libro"],

      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data= json_decode($response, true);
    //var_dump($data);die;
    header("Location: TutoriaAC.php");

}else{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crai.informaticapp.com/estudiantes',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VPbUt6dlQ2ajJ6aGsvbVZkbnpvd1BSMk5KRlJSa0txOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTjN4OW82Mk1xVFpTVURtdGV5SmxXVkQ0NVJUQ3NZQw=='
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $estud = json_decode($response, true);

}

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./dist/img/upeuLogo.png">
        <title>Registro de devolucion | CRAI-Tarapoto</title>
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
                                <h1 class="m-0">devolucion</h1>
                            </div>
                           
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">devolucion</li>
                                </ol>
                            </div>                        
                        </div>
                    </div>
                </div>         

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary card-outline">
                                    <h3 class="text-center mt-4">Nueva Devolucion</h3>
                                    <div class="container">
                                        <form method="post" class="col-xl-8 offset-2">

                                        <div class="form-group">
                                                <label for="id_estudiante">ID del estudiante:</label>
                                                <select name="id_estudiante" class="form-control" id="id_estudiante">
                                                    <?php foreach ($estud["Detalles"] as $est): ?>
                                                    <option value="<?= $est["idestudiante"] ?>"><?= $est["nombres"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cod_est">Codigo del estudiante:</label>
                                                <input type="number" name="cod_est" class="form-control" id="cod_est" placeholder="Ingrese el codigo del estudiante" />
                                            </div>

                                            <div class="form-group">
                                                <label for="nom_estudiante">Nombre del estudiante:</label>
                                                <input type="text" name="nom_estudiante" class="form-control" id="nom_estudiante" placeholder="Ingrese el nombre del estudiante" />
                                            </div>

                                            <div class="form-group">
                                                <label for="carrera">Carrera:</label>
                                                <select name="carrera" class="form-control" id="carrera">
                                                    <?php foreach ($carrera["Detalles"] as $esc): ?>
                                                    <option value="<?= $esc["idescuela"] ?>"><?= $esc["descripcion"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="cod_libro">Codigo del libro :</label>
                                                <input type="text" name="cod_libro" class="form-control" id="cod_libro" placeholder="Ingrese el codigo del libro " />
                                            </div>

                                            <div class="form-group">
                                                <label for="titulo_libro">Titulo del libro:</label>
                                                <input type="date" name="titulo_libro" class="form-control" id="titulo_libro" placeholder="Ingrese el titulo del libro" />
                                            </div>

                                            <div class="form-group">
                                                <label for="fecha_adq">Fecha de adquisicion:</label>
                                                <input type="text" name="fecha_adq" class="form-control" id="fecha_adq" placeholder="Ingrese la fecha de adquisicion" />
                                            </div>

                                            <div class="form-group">
                                                <label for="fecha_dev">Fecha de devolucion:</label>
                                                <input type="text" name="fecha_dev" class="form-control" id="fecha_dev" placeholder="Ingrese la fecha de adquisicion" />
                                            </div>

                                            <div class="form-group">
                                                <label for="estado_libro">Estado del libro:</label>
                                                <input type="text" name="estado_libro" class="form-control" id="estado_libro" placeholder="Ingrese la fecha de adquisicion" />
                                            </div>

                                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
                                            <a href="TutoriaAC.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
                                        </form>
                                    </div>
                                    <div class="mb-4"></div>
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