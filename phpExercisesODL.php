<!DOCTYPE html>
<html>
<body>

<h1>PHP Exercises ODL</h1>

<?php
$start = "PHP exercise ";
echo "$start 5 <br><br>";


$around = 'around';
echo 'What goes '.$around.', comes around.';
echo "<br><br><br>";

echo "$start 6 <br><br>";
for ($i = 1; $i <= 12; $i++){
	echo "$i * $i = ", $i*$i,"<br>";
}
echo "<br><br>";

echo "$start 7 <br><br>";

echo "<table border =\"0\" style='border-collapse: collapse'>";

for ($x=1; $x<=7; $x++){
	echo "<tr> \n";
	for ($y=1; $y <= 7; $y++) { 
		$z = $y * $x;
		echo "<td>$z</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
