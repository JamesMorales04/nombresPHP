<?php

include("conexionBD.php");

$conexion=new mysqli($host,$user,$password,$database) or die ("Problemas con la la conexion al servidor");

$registro = mysqli_query($conexion, "SELECT * FROM usuarios");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de registro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($reg=mysqli_fetch_array($registro)) {
                    echo "<tr>";
                    echo "<td>".$reg['nombre'] ."</td>" ;
                    echo "<td>".$reg['apellido'] ."</td>" ;
                    echo "<td>".$reg['fecha'] ."</td>" ;
                    echo "<tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>