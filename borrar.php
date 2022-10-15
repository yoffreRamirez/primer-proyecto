<?php
include ("conexion.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tabla WHERE  id =$id";
    $result=mysqli_query($conex, $query);

    if(!$result){
        die("consulta fallida");
    }
    $_SESSION['message']='Se borro';
    $_SESSION['message_type']='danger';
    header("location: index.php");
}

?>