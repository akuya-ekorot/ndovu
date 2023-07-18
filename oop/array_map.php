<?php
$cars = ["Volvo", "Bima", "Benzo"];

$my_cars = array_map(function ($car) {
	return $car . "yangu\n"; 
}, $cars);

$my_other_cars = array_map(fn($car) => $car . " yangu\n", $cars);

var_dump($my_cars);
var_dump($my_other_cars);
?>
