<?php
	
	include("cabecalho.html");

	$dados = file("agenda.csv");

	print('<table border="1">');
	

	
	foreach ($dados as $linha){
		$partes = explode(";", $linha);
		print('<tr>
				<td>'.$partes[0].'</td>
				<td>'.$partes[1].'</td>
				<td> '.$partes[2].'</td>
				<td>'.$partes[3].'</td>

			   </tr>');
	}
	print('</table>');

	include("rodape.html")



?>