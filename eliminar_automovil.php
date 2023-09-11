<?php

$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }


 $id_automovil=$_GET['id_automovil'];


 $query = "DELETE from automovil where id_automovil=$id_automovil";
	if($resultadoeliminar = pg_query($query)){
		echo "Automovil eliminado correctamente";
	}
	else{
		echo "No se elimino el automovil.";
	}
 





 ?>
