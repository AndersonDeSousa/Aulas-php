<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="atv1.1.php">
		<select name="tipo">
			<option value="0">Selecione</option>
			<option value="1">Administradores</option>
			<option value="2">Clientes</option>
			<option value="3">Convidados</option>
		</select>
			<input type="number" name="qtd" placeholder= "Quantidade de Cadastros"><br><br>
			<input type="submit" name="enviarDados" value="Enviar">
			<input type="reset" name="cancelar" value="Cancelar">
	</form>
	<?php
		if(isset($_POST['$tipo'])){
			echo "Escolha um usuário";
		}
	?>

</html>