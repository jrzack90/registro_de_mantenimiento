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

$sql="UPDATE equipo SET  fecha='$fecha',marca_pc='$marca_pc',modelo_pc='$modelo_pc',no_serie='$no_serie',ip='$ip',sistema_operativo='$sistema_operativo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>