<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM equipo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro de mantenimiento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5"> 
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha (aaaa-mm-dd)">
                                    <input type="text" class="form-control mb-3" name="marca_pc" placeholder="Marca de PC">
                                    <input type="text" class="form-control mb-3" name="modelo_pc" placeholder="Modelo de PC">
                                    <input type="text" class="form-control mb-3" name="no_serie" placeholder="No. de serie">
                                    <input type="text" class="form-control mb-3" name="ip" placeholder="IP">
                                    <input type="text" class="form-control mb-3" name="sistema_operativo" placeholder="Sistema Operativo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>Marca de PC</th>
                                        <th>Modelo de PC</th>
                                        <th>No. de serie</th>
                                        <th>IP</th>
                                        <th>Sistema Operativo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['marca_pc']?></th>
                                                <th><?php  echo $row['modelo_pc']?></th>  
                                                <th><?php  echo $row['no_serie']?></th>
                                                <th><?php  echo $row['ip']?></th>
                                                <th><?php  echo $row['sistema_operativo']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>