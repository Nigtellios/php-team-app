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

/* #4: PHP and HTML: Parse key:value pairs. */

/* Create a superglobal which is an ARRAY: */
$name = $_GET['name'];
echo "Hello there $name!";

/* And now if you do http://localhost:8888/?name=Jakub in your URL, you will get Jakub inside your 'name'. That's what we call fetching the data. With that we can fetch that variable somewhere in logic. Remember that this way without any security is extremely insecure. */

/* There is also something like <?php shortcut, which is <?=, but it's rarely useful. */

/* To disallow users to do something like HTML injection, use htmlspecialchars() function. */
$new_name = htmlspecialchars( $_GET['new_name'] );
echo "Hello there $new_name, it's first time we see you!";

/* Now this one: https://laracasts.com/series/php-for-beginners/episodes/5 */