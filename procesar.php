<?php
$nombre=$_POST['nombre'];
	$email = $_POST['email'];
	$edad = $_POST['edad'];
	$comentario = $_POST['comentario'];
	$fecha =$_POST['fecha'];
	$apellido = $_POST['apellido'];


$message = "
<hr>
<br>
<strong> Nombre: </strong>  $nombre <br><br>
<hr>
<br><strong>Apellido: </strong>  $apellido <br><br>
<hr>
<br><strong>Fecha de Nacimiento</strong>  $fecha <br><br>
<hr>
<br><strong>Edad: </strong> $edad <br><br>
<hr>
<br><strong>Email: </strong>  $email <br><br>
<hr>
<br><strong>Consultas: </strong>  $comentario <br<<br>
<hr>
<br>
";
echo "$message";