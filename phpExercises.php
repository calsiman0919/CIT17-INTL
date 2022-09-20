<!DOCTYPE html>
<html>
<body>

<h1>PHP Exercises</h1>

<?php

$start = "PHP exercise ";
echo "$start 1 <br><br>";

echo"Twinkle, Twinkle little star.<br>";
$twink = "Twinkle";
$str = "star";
echo "$twink, $twink little $str. <br>";

$twink = "Jingle";
$str = "bird";
echo "$twink, $twink little $str <br><br><br>";

echo "$start 2 <br><br>";
$x=10;
$y=7;
echo "$x + $y = ", $x+$y,"<br>";
echo "$x - $y = ", $x-$y,"<br>";
echo "$x * $y = ", $x*$y,"<br>";
echo "$x / $y = ", $x/$y,"<br>";
echo "$x % $y = ", $x%$y,"<br>";
echo "<br><br>";
echo "$start 3 <br><br>";
$variable = 8;
echo "value is now $variable.\n";
echo "Add 2. Value is now ", $variable = $variable + 2,"<br>";
echo "Subtract 4. Value is now ", $variable = $variable - 4,"<br>";
echo "Multiply by 5. Value is now ", $variable = $variable * 5,"<br>";
echo "Divide by 3. Value is now ", $variable = $variable / 3,"<br>";
echo "Increment Value by one. Value is now ", ++$variable,"<br>";
echo "Decrement Value by one. Value is now ", --$variable,"<br><br><br>";

echo "$start 4 <br><br>";

$name='Harry'; 
$age=28;   
 
var_dump($name); 
echo "<br>";   
 
print_r($name); 
echo "<br>";   
 
var_dump($age); 
echo "<br>";  
  
$name=NULL;   
var_dump($name);

?>

</body>
</html>
