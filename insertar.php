<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$fecha=$_POST['fecha'];
$marca_pc=$_POST['marca_pc'];
$modelo_pc=$_POST['modelo_pc'];
$no_serie=$_POST['no_serie'];
$ip=$_POST['ip'];
$sistema_operativo=$_POST['sistema_operativo'];


$sql="INSERT INTO equipo VALUES('$id','$fecha','$marca_pc','$modelo_pc','$no_serie','$ip','$sistema_operativo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>