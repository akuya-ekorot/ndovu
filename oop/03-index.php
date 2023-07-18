<?php

class CoffeeMaker {
	public function brew() {
		echo "Brewing your cuppa coffee...\n";
	}
}

(new CoffeeMaker())->brew();

class LatteCoffeeMaker extends CoffeeMaker {
	public function brewLatte() {
		echo "Brewing your cuppa Latte...\n";
	}
}

(new LatteCoffeeMaker())->brew();
(new LatteCoffeeMaker())->brewLatte();
?>
