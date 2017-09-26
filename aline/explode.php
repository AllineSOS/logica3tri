<?php

	$cidade = "São;Francisco do Sul";

//funcao explode separa as partes de uma string,dado um separador

	$partes = explode(";", $cidade);

	print("<pre>");
	print_r($partes);
	print("</pre>");

?>