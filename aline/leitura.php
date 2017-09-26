<?php
//variavel  receberá o conteúdo de um arquivo e será um string
	$contatos = file_get_contents("agenda.csv");

	echo($contatos);



?>