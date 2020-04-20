<?php
// Iniciamos el curl
//$ch = curl_init();

//Defino variables de salida
//$postRequest = array(''=>'',''=>'',''=>'');
$nombre = "joel";//$_POST['nombre'];
$email = "ajkajska@gmail.com";//$_POST['email'];
$telefono = "11223344";//$_POST['telefono'];
$ciudad = "Monterrey";//$_POST['ciudad'];
$empresa = "Toyota";//$_POST['empresa'];
$giro = "Marketing";//$_POST['giro'];
$mensaje = "hola este es un mensaje de prueba";//$_POST['mensaje'];
echo $nombre;
// definimos la URL a la que hacemos la petición
//curl_setopt($ch, CURLOPT_URL,"http://192.168.1.2/tracking_api/Login/user/id/1/format/json/X-API-KEY/EC0vcZKEEoFuzRFcp0YB3Edsgq0M2jZDP0TTd4A9/usuario/braulio/clave/12345");
// indicamos el tipo de petición: POST
//curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
//curl_setopt($ch, CURLOPT_POSTFIELDS,$nombre,$email,$telefono);
 
// recibimos la respuesta y la guardamos en una variable
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$remote_server_output = curl_exec ($ch);
 
// cerramos la sesión cURL
//curl_close ($ch);
 
// hacemos lo que queramos con los datos recibidos
// por ejemplo, los mostramos
//print_r($remote_server_output);
?>