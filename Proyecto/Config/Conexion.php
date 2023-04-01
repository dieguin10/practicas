<?php

$conexion=mysqli_connect('localhost','root','','cliente');
if($conexion){
echo'conecxion exitosa';
}else{
echo 'no se conecto';
}
?>