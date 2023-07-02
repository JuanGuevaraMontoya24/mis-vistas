<!-- API Tutoria_academica (CREATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/acesorias_academica',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'nom_asesor='.$_POST["nom_asesor"].
                            '&nom_estudiante='.$_POST["nom_estudiante"].
                            '&cod_estudiante='.$_POST["cod_estudiante"].
                            '&fecha='.$_POST["fecha"].
                            '&hora='.$_POST["hora"],

      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($response, true);
    header("Location: AcesoriaAC.php");
    //var_dump($data); die;
}


?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./dist/img/upeuLogo.png">
        <title>Registro Acesoria Academica | CRAI-Tarapoto</title>
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
                                <h1 class="m-0">Registro Acesoria Academica</h1>
                            </div>
                           
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro Acesoria Academica</li>
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
                                    <h3 class="text-center mt-4">Nueva Acesoria Academica</h3>
                                    <div class="container">
                                        <form method="post" class="col-xl-8 offset-2">
                                           
                                            <div class="form-group">
                                                <label for="nom_asesor">Nombre de asesor:</label>
                                                <input type="text" name="nom_asesor" class="form-control" id="nom_asesor" placeholder="Ingrese el nombre del asesor" />
                                            </div>

                                            <div class="form-group">
                                                <label for="nom_estudiante">Nombre del estudiante:</label>
                                                <input type="text" name="nom_estudiante" class="form-control" id="nom_estudiante" placeholder="Ingrese el nombre del estudiante" />
                                            </div>

                                            <div class="form-group">
                                                <label for="cod_estudiante">Codigo del estudiante:</label>
                                                <input type="number" name="cod_estudiante" class="form-control" id="cod_estudiante" placeholder="Ingrese el codigo del estudiante" />
                                            </div>

                                            <div class="form-group">
                                                <label for="fecha">Fecha:</label>
                                                <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Ingrese la fecha" />
                                            </div>

                                            <div class="form-group">
                                                <label for="hora">Hora:</label>
                                                <input type="time" name="hora" class="form-control" id="hora" placeholder="Ingrese la hora" />
                                            </div>

                                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
                                            <a href="AcesoriaAc.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
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