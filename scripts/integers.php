#!/usr/bin/env php

<?php
	echo PHP_INT_MAX;
	
	echo "\n";

	$float = 545.6;
	$int_cast = (int)$float;

	echo $int_cast;

	echo "\n";

	$y = 4;
	$x = 8;

	echo $y <=> $x;
?>
