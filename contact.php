<?php
 
// CONEXION A LA BASE DE DATOS
 
// $con = mysqli_connect('localhost', 'usuariodelabasededatos', 'passworddelabasededatos','basededatos');
 
$con = mysqli_connect('localhost', 'root','','avon');
 
// OENVIAR DATOS POR METODO POST
 
$txtName = $_POST['nombre'];
 
$txtEmail = $_POST['email'];
 
$txtMessage = $_POST['mensaje'];

$fecha = date("d/m/y");
 
// CONSULTA A LA BASE DE DATOS
 
$sql = "INSERT INTO preguntas (id, nombre, email, mensaje, fecha) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage', '$fecha')";
 
// INSERTAR EN LA BASE DE DATOS
 
$rs = mysqli_query($con, $sql);

//CONDICION PARA LANZAR ALERTA

if($rs)
 
{
    echo '<script language="javascript">alert("Gracias por contactarnos");</script>';
}

 
?>