<?php
$paisLimitrofe = array("Portugal", "Andorra", "Francia");

	echo "Los países limítrofes son:<br>";
	for($i = 0; $i < count($paisLimitrofe); $i++)
  {
		echo $paisLimitrofe[$i]."<br>";
	}
/* ejemplo con otro ciclo de iteracion
	echo "<br><br><br>Los países limítrofes son: ";
	foreach($paisLimitrofe as $pais){
		echo $pais.", ";
	}*/
 ?>
