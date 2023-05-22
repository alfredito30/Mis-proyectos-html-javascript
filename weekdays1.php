<html>
<head>
 <title>Introduccion a los arrays, metodo largo</title>
</head>
<body>
<h1> Introduccion a los arrays, metodo largo </h1>
<p> A continuacion escribiremos los arrays de acuerdo al metodo largo </p>
<p>
<?php
/*
Este es el metodo largo para la creacion de arrays, donde cada uno de los
arreglos esta en una linea diferente, junto con su valor indice correspondiente
*/
//uso de vectores
$dia[0] = "domingo";
$dia[1] = "lunes";
$dia[2] = "martes";
$dia[3] = "miercoles";
$dia[4] = "jueves";
$dia[5] = "viernes";
$dia[6] = "sabado";
//mostrar el miercoles
// y si lo hacemos con un array
//echo $dia[3];

	echo "Los dias de la semana son:<br>";
	for($i = 0; $i < count($dia); $i++){
		echo $dia[$i]."<br>";
	}


?>
</p>
</body>
</html>
