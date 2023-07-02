<!-- API TUTORIA ACADEMICA (UPDATE) -->
<?php
  if($_SERVER["REQUEST_METHOD"] =="POST"){ 
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crai.informaticapp.com/acesorias_academica/'.$_POST['idacesoria_academica'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'PUT',
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
    //var_dump($data);die;
	header("Location: AcesoriaAC.php");
  }else{
    
    $curl = curl_init();
     curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crai.informaticapp.com/acesorias_academica/'.$_GET['idacesoria_academica'],
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
}
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./dist/img/upeuLogo.png">
        <title>Editar Tutoria Academica | CRAI-Tarapoto</title>
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
                                <h1 class="m-0">Editar Acesoria Academica</h1>
                            </div>
                           
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Editar Acesoria Academica</li>
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
                                    <h3 class="text-center mt-4">Editar Acesoria Academica</h3>
                                    <div class="container">
                                        <form method="post" class="col-xl-8 offset-2">
                                            <input type="hidden" name="idacesoria_academica" id="idacesoria_academica" value="<?= $data["Detalle"]['idacesoria_academica'] ?>"> 

                                            <div class="form-group">
                                                <label for="nom_asesor">Asesor:</label>
                                                <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" value="<?= $data["Detalle"]['nom_asesor'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="nom_estudiante">Nombre del estudiante:</label>
                                                <input type="text" class="form-control" name="nom_estudiante" id="nom_estudiante" value="<?= $data["Detalle"]['nom_estudiante'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="cod_estudiante">Codigo del estudiante:</label>
                                                <input type="number" class="form-control" name="cod_estudiante" id="cod_estudiante" value="<?= $data["Detalle"]['cod_estudiante'] ?>">
                                            </div>  

                                            <div class="form-group">
                                                <label for="fecha">Fecha:</label>
                                                <input type="date" class="form-control" name="fecha" id="fecha" value="<?= $data["Detalle"]['fecha'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hora">Hora:</label>
                                                <input type="time" class="form-control" name="hora" id="hora" value="<?= $data["Detalle"]['hora'] ?>">
                                            </div>

                                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
                                            <a href="AcesoriaAC.php" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
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