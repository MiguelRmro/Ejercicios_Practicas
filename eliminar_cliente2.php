<?php



//Eliminar esta conexión
$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }


 $id_cliente=$_POST['id_cliente'];


 $query = "DELETE from cliente where id_cliente=$id_cliente";
	if($resultadoeliminar = pg_query($query)){
		echo "Cliente eliminado correctamente";
	}
	else{
		echo "No se elimino el cliente.";
	}
 





 ?>


