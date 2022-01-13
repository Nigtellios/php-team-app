<?php
$break = '</br>';

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #3: Variables, They're defined with $ */
$greeting = 'Hello Wordlers';
$worlders = 'Worlders';
echo $greeting;

/* String Interpolation: Works only with double quote "" */
echo "Something happened to $worlders" . $break;

/* String concatenation: */
echo 'Something happened to: ' . $worlders . $break;

/* Variable reference, it is not needed to wrap interpolation in curly brackets, but it would work too. */
echo "Hello, {$worlders}" . $break;

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #4: PHP and HTML: Parse key:value pairs. url/?key=value */

/* Create a superglobal which is an ARRAY: */
$name = $_GET['name'];
echo "Hello there $name!";

/* And now if you do http://localhost:8888/?name=Jakub in your URL, you will get Jakub inside your 'name'. That's what we call fetching the data. With that we can fetch that variable somewhere in logic. Remember that this way without any security is extremely insecure. */

/* There is also something like <?php shortcut, which is <?=, but it's rarely useful. */

/* To disallow users to do something like HTML injection, use htmlspecialchars() function. This is also called "sanitizing an input". */
$new_name = htmlspecialchars( $_GET['new_name'] );
echo "Hello there $new_name, it's first time we see you!";

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #5: Separate PHP Logic From Presentation */
/* It is always good to separate logic from HTML (views) files - as much as we can. We can divide our views into separated files, like this one named "index.view.php", while our logic stays inside index.php. Then we can render things that we want inside index.view.php. */

/* $welcome_message = "Hello there!";
require 'index.view.php'; */

/* This above is example of embed view inside logic. Now our file which prepares the data (logic - index.php) is separated from view (index.view.php). */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #6: Understanding Arrays */

/* Array is primitive representation of related things. */
$cars = [
	'Bugatti',
	'Porsche',
	'Ferrari'
];

/* Now we can iterate through that array, which is very useful in programming. */
foreach ( $cars as $car ) {
	echo $car;
}

/* We're telling that for each one of these ($cars) do something. We can also use other version (divided one), which ends with :*/
foreach ( $cars as $car ) : ?>
	<span>
		<?php echo "$car"; ?>
	</span>
<?php
endforeach;

/* This one above is very useful inside markup files. */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #7: Associative Arrays */
/* In associative array we assign a key to each value in the array. */

$detailed_cars = [
	'manufacturer' => 'Bugatti',
	'model'        => 'Veyron',
	'produced'     => '2011'
];

/* We're assigning values to key with => sign (equals = and greater than >). */
/* To print associative array we have to assign key to a value with: */
function printDetailedCars($arr) {
	$result = "<ul>";

	foreach ( $arr as $detail => $value ) {
		$result .= "<li><strong>$detail</strong>: $value </li>";
	}

	echo $result;
}

/* To push new item to the array, we can simply do: */
$detailed_cars['engine'] = 'V12';

/* If we don't want to assign specific key to a variable but push something into, we can simply do: */
$some_array[] = 'New Item';

/* To debug something in PHP (in example to see its value) we would use var_dump(); */
var_dump($some_array);

/* If we want to make it looks some kind nicer, we can use <pre> tags. */
echo "<pre>" . var_dump($some_array). "</pre>";

/* If we want to immediately stop executing, we can use die() function. */
die();

/* If we want to delete some item from an array, we can use unset() function. */
unset($cars['Bugatti']);

