<?php



$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }

 


/*
INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'Jorge Enrique Pérez Escobar', 'operezjorge@gmail.com', 23, 56721449);
*/

$nombre=$_GET['nombre'];
$correo=$_GET['correo'];
$edad=$_GET['edad'];
$telefono=$_GET['telefono'];


/*
 $query="INSERT INTO cliente(
	id_cliente, nombres, apellidos, edad, genero, nacimiento)
	VALUES ('1', '$nombres', '$apellidos', $edad, '$genero', '$nacimiento');";*/

  $query= "INSERT INTO cliente(id_cliente,nombre, correo, edad, telefono ) 
VALUES(DEFAULT,'$nombre', '$correo', $edad, $telefono);
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


