<?php
$estudiante=$_POST ['estu'];
$practicas=$_POST ['pra'];
$parcial=$_POST ['par'];
$final=$_POST ['fin'];
$promedio=($parcial+$practicas+$final)/3;
// round(valor_float * 100) / 100
echo "<b>El alumno es: </b>$estudiante<br>";
echo "<b>Sus practicas son: </b>$practicas<br>";
echo "<b>Su parcial es: </b>$parcial<br>";
echo "<b>Su nota final es: </b>$final<br>";
echo "<b>Su promedio es: </b>round($promedio,2)<br>";
?>
