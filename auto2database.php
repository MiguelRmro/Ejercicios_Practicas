
<?php



$conn =  pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }

/*
Colocar código para insertar auto en la base de datos, después de este comentario 
*/ 
$marca=$_POST['marca2'];
$placa=$_POST['placa2'];
$año=$_POST['año2'];
$país=$_POST['país2'];

    $query= "INSERT INTO automovil2(id_automovil2, marca, placa, año, país) 
VALUES(DEFAULT,'$marca', $placa, $año, '$país');
  ";

$result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$tuplasaafectadas = pg_affected_rows($result);
pg_free_result($result);


if($tuplasaafectadas> 0){
    echo "el auto ha sido agregado correctamente";
}
else {
    echo "el auto no ha sido creado"; 
}

 ?>