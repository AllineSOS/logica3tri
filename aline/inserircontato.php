<?php
	include("cabecalho.html");
?>
<form method="post" action="gravarcontato.php">
	<label for="nome">Nome</label>
	<input type="text" name="nome"/>

	<label for="endereco">Endereco</label>
	<input type="text" name="endereco"/>

	<label for="email">E-mail</label>
	<input type="email" name="email"/>

	<label for="telefone">Telefone</label>
	<input type="text" name="telefone"/>

	<input type="submit" name="gravar" value="Gravar"/>

</form>
<?php
	include("rodape.html");

?>