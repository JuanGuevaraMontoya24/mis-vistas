<!-- API Tutoria_academica (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/tutoria_academica',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'titulo='.$_POST["titulo"].
                            '&ponente='.$_POST["ponente"].
                            '&facultad='.$_POST["facultad"].
                            '&carrera='.$_POST["carrera"].
                            '&ciclo='.$_POST["ciclo"].
                            '&fecha='.$_POST["fecha"].
                            '&link_asistencia='.$_POST["link_asistencia"],

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
        CURLOPT_URL => 'https://crai.informaticapp.com/facultades',
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
    $estu = json_decode($response, true);

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
            'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VtaFNVMGZVZU8yZXJxN2hsVHFFaXAvMTVUUTIzcXplOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlc0Y0V0NjTWFBenNYc3lFaFp1U2JCd1A2L0hRQzR4Tw=='
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $carrera = json_decode($response, true);

}

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./dist/img/upeuLogo.png">
        <title>Registro Tutoria Academica | CRAI-Tarapoto</title>
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
                                <h1 class="m-0">Tutoria Academica</h1>
                            </div>
                           
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tutoria Academica</li>
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
                                    <h3 class="text-center mt-4">Nueva Tutoria Academica</h3>
                                    <div class="container">
                                        <form method="post" class="col-xl-8 offset-2">
                                            <div class="form-group">
                                                <label for="titulo">Titulo:</label>
                                                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese el titulo" />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ponente">Ponente:</label>
                                                <input type="text" name="ponente" class="form-control" id="ponente" placeholder="Ingrese el nombre del ponente" />
                                            </div>

                                            <div class="form-group">
                                                <label for="facultad">Facultad:</label>
                                                <select name="facultad" class="form-control" id="facultad">
                                                    <?php foreach ($estu["Detalles"] as $est): ?>
                                                    <option value="<?= $est["idfacultad"] ?>"><?= $est["nombre"] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
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
                                                <label for="ciclo">Ciclo:</label>
                                                <input type="text" name="ciclo" class="form-control" id="ciclo" placeholder="Ingrese el Numero de ciclo" />
                                            </div>

                                            <div class="form-group">
                                                <label for="fecha">Fecha:</label>
                                                <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Ingrese el fecha" />
                                            </div>

                                            <div class="form-group">
                                                <label for="link_asistencia">Link de asistencia:</label>
                                                <input type="text" name="link_asistencia" class="form-control" id="link_asistencia" placeholder="Ingrese el link de asistencia" />
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