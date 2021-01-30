<?php

include("conexionBD.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']));{

    $conexion=new mysqli($host,$user,$password,$database) or die ("Problemas con la la conexion al servidor");

    $currentDate = date("Y-m-d");
    
    modifyUppercase($_POST);
    $conexion->query("INSERT INTO usuarios (nombre,apellido,fecha) VALUES ('$_POST[nombre]','$_POST[apellido]','$currentDate')");

    header("Location: http://localhost/software1/formulario.php");
}

function modifyUppercase(&$data){

    $data["nombre"][0]=strtoupper($data["nombre"][0]);
    $data["apellido"][0]=strtoupper($data["apellido"][0]);
    
}


?>