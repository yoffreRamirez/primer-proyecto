<?php
 session_start();//es llamada o cuando se autoinicia 
 //una sesión, PHP llamará a los gestores de almacenamiento de sesiones open y read.

$conex=mysqli_connect(
    'localhost',
    'root',
    '',
    'tabla'
);
 
?>