<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM equipo WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Marca de PC" value="<?php echo $row['marca_pc']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Modelo de PC" value="<?php echo $row['modelo_pc']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="No. de Serie" value="<?php echo $row['no_serie']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="IP" value="<?php echo $row['ip']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Sistema Operativo" value="<?php echo $row['sistema_operativo']  ?>">
                               
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>