<?php
// Variables
$welcome_message = "Hello there! </br>";

// Data
$cars = [
	'Bugatti',
	'Porsche',
	'Ferrari'
];

unset($cars['Bugatti']);

$detailed_cars = [
	'manufacturer' => 'Bugatti',
	'model'        => 'Veyron',
	'produced'     => '2011'
];

$detailed_cars['engine'] = 'V12';

// Methods
function printCars($array) {
	$result = "<ul>";

	foreach ( $array as $item ) {
		$result .= "<li>$item</li>";
	}

	$result .= "</ul>";
	echo $result;
}

function printDetailedCars($arr) {
	$result = "<ul>";

	foreach ( $arr as $detail => $value ) {
		$result .= "<li><strong>$detail</strong>: $value </li>";
	}

	echo $result;
}

require 'index.view.php';