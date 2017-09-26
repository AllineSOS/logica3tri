<!DOCTYPE html>
<html>
<head>
	<title>TESTE PHP</title>
</head>
<body>
<h1>teste php</h1>

<?php
	$hora = date("H");
	if($hora<12){
		$msg = "Bom dia";
	}elseif($hora<18){
		$msg = "Boa tarde";
	}else{
		$msg = "Boa noite";
	}
	print("<h1>".$msg.", são ".$hora."horas</h1>");

?>

 	<table border="1">
<?php
	for ($i=0; $i <300 ; $i++) { 
		print("<tr>
			   <td>linha".$i."</td>
			   <td>asdf<td>
			   </tr>");
	}



?>
 	</table>

<p>Bom Dia</p>

</body>
</html>