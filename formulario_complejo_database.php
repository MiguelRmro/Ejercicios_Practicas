<?php



$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }


$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$estadocivil=$_POST['estadocivil'];
$urlimg=$_POST['urlimg'];
$fechanac=$_POST['fechanac'];
$comentario=$_POST['comentario'];
//$gt=$_POST['gt']; esto ya no se escribe


if (isset($_POST["gt"])) {
    //"indica que si lo presiono y aparece en la base de datos como "TRUE" :)";
    $gt="1";

} else {
    //"indica que no lo presiono y aparece en la base d datos como "FALSE" :(";
    $gt="0";
}

    //lo que esta en comillas simples son texto y los que no son numeros 
  $query= "INSERT INTO formulario_detallado(id_formulario_detalle ,nombre, email, contraseña, estadocivil, urlimg, fechanac, comentario, gt) 
VALUES(DEFAULT,'$nombre', '$email', '$contraseña', '$estadocivil', '$urlimg', '$fechanac', '$comentario', '$gt');
  ";

$result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$tuplasaafectadas = pg_affected_rows($result);
pg_free_result($result);


if($tuplasaafectadas> 0){
    echo "el cliente ha sido creado correctamente";
}
else {
  echo "el cliente no ha sido creado";

}


 ?>


