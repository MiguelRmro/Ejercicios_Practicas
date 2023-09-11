<?php



$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }


 




 $id_cliente=$_GET['id_cliente'];
 $nombre=$_GET['nombre'];
 $correo=$_GET['correo'];
 $edad=$_GET['edad'];
 $telefono=$_GET['telefono'];
 
 
 $query= "UPDATE cliente set nombre = '$nombre', correo = '$correo' , edad=$edad, telefono=$telefono
 where id_cliente=$id_cliente";

 if($result = pg_query($query)){
   echo "Cliente actualizado correctamente";
 }
 else{
   echo "Cliente no fue actualizado";
 }



 ?>


