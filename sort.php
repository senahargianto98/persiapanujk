<h1>A-Z</h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$length = count($cars);
for($x = 0; $x < $length; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<br>
<h1>Z-A</h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>