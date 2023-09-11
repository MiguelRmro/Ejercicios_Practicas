<?php



$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }


 $id_automovil=$_GET['id_automovil'];
 $marca=$_GET['marca'];
 $placa=$_GET['placa'];
 $año=$_GET['año'];
 $país=$_GET['país'];
 
 
 $query= "UPDATE automovil set marca = '$marca', placa =$placa, año=$año, país= '$país'
 where id_automovil=$id_automovil";

 if($result = pg_query($query)){
   echo "El Automovil fue actualizado correctamente";
 }
 else{
   echo "El Automovil no fue actualizado";
 }



 ?>
