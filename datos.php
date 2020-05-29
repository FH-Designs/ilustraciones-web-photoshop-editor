<?php 

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name'])) >= 1 && strlen($_POST['email'] >= 1) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$menssage = trim($_POST['menssage']);
		$consulta = "INSERT INTO formulario (nombre, email, mensaje) VALUES ('$name', '$email', '$menssage')";
		$resultado = mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">Se ha enviado correctamente!</h3>
			<?php
		} else {
			?>
			<h3 class="bad">Ups ha ocurrido un error!</h3>
			<?php
		} else {
			?>
			<h3 class="bad">Por favor complete los campos!</h3>
			<?php
		}
	}
}
?>