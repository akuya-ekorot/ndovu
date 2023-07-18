#!/usr/bin/env php

<?php
	class Car {
		public $color;
		public $model;

		public function __construct($color, $model) {
			$this->color = $color;
			$this->model = $model;
		}

		public function message() {
			echo "This car's model is " . $this->model . " and it's color is " . $this->color . "\n";
		}
	}

	$my_new_car = new Car("blue", "bmw");
	
	echo $my_new_car -> message();
?>
