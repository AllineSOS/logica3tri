<?php
//funcao abre um arquivo e retorna seu conteudo em uma STRING
	$cabecalho = file_get_contents('cabecalho.html');
	print($cabecalho);

//funcao file abre um, arquivo e retorna seu conteudo para um ARRAY 
	$dados = file("agenda.csv");

//percorrer o array e exibir cada um dos elementos
	
	
	
	
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


//funcao file abre um arquivo e retorna seu conteudo em uma STRING
	$rodape = file_get_contents('rodape.html');
	print($rodape);
?>