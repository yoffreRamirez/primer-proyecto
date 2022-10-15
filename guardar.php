<?php
include("conexion.php");
if(isset($_POST['guardar'])){
    $titulo=$_POST['titulo'];
    $descripcion =$_POST['descripcion'];  

    
    $query = "INSERT INTO tabla(titulo, descripcion) values ('$titulo', '$descripcion')";
   $result = mysqli_query($conex, $query);
   if(!$result){
   die("consulta fallida");
}
$_SESSION['message']='se guardo';
$_SESSION['message_type']='success';
header("location: index.php");
}
?>