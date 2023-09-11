
<?php


$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }



 echo "Conexión exitosa";






 
 ?>



