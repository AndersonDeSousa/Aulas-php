<?php
	$qtd = $_POST['qtd'];
	$tipo = $_POST['tipo'];

	for ($i = 0; $i<$qtd; $i++):

?>
	<h1><em>Preencha todos os campos</em></h1>
	<form>
		<tr>
			<td height="30px">
				<input type="text" name="nome" placeholder="Seu nome completo."><br>		
			</td>
		</tr>
		<tr>
			<td>
				<input type="number" name="idade" placeholder="Sua idade."><br>		
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="nomeRua" placeholder="Nome da sua rua."><br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="cidadeNatal" placeholder="Sua cidade natal.">
			</td>
		</tr>
		
		<input type="submit" name="concluir" value="Concluir cadastro">
	<form>

<?php 
	endfor;
 ?>
