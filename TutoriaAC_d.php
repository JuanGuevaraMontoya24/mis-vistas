<!-- API TUTORIA ACADEMICA (DELETE) -->
<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crai.informaticapp.com/tutoria_academica/'.$_GET['idtutoria_academica'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VpQ3dPdWpXRi53SEpUdDhhWkp3eFVvN2o1YzJuUFV1Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlTGM0MUkvekVDUms5cG5RR2hzdEFEZU1WUnR5dVN3bQ=='
    ),
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  $data = json_decode($response, true);
  //var_dump($data);die;
  header("Location: TutoriaAC.php");
?>
