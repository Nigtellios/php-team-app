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
$new_name = htmlspecialchars($_GET['new_name']);
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
foreach ($cars as $car) {
    echo $car;
}

/* We're telling that for each one of these ($cars) do something. We can also use other version (divided one), which ends with :*/
foreach ($cars as $car) :
    echo '<span>';
    echo "$car";
    echo '</span>';
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
function printDetailedCars($arr)
{
    $result = "<ul>";

    foreach ($arr as $detail => $value) {
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

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #8: Booleans */
/* Boolean is a value that can present value true/false. xD */

$bool = [
    'title'   => 'Some Boolean',
    'is_done' => true
];

/* Wherever want, you can simply echo values of specified keys with $array['key']. */
/* There is also ternary operator, which is very useful nowadays. */

$bool['is_done'] ? "Yes" : "No!";

/* Basically with the thing above, we say: if is_done is true, then response would be Yes, if is false: No. */

/* To negate the value, we can use ! mark. ! in shortcut means: if is not. */

!$bool['is_done'] ? "No" : "Yes!";

/* This above literally means „If is_done isn't true say No, if is true say Yes. */
/* To present some data with first-letter uppercase, there is function called "ucwords()". */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #9: Conditionals */
/* Conditionals are keywords that extends logic, if some value is true, then do something. These keywords are: if, else, elseif. They can be also presented by divided versions of them. */

$some_var = 1;

if (1 === $some_var) {
    echo "1 is equal to some_var";
} else {
    echo "1 isn't equal to some_var";
}

/* And Divided version: */

if (1 === $some_var) :
    echo "Yes";
elseif (2 === $some_var) :
    echo "No";
else :
    echo "Check once again!";
endif;

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #10: Functions */

/* Functions can take a parameters and do something with them, or just return some value without taking parameters. They are some kind of "functional code blocks" that does what we tell them to. Let's say we want to create function that dumps something to us. */

function dumper($param)
{
    die(var_dump($param));
}

/* In the function above we takes $params Array with initial value of empty []. (If we declare some value in the same place when we declare parameters, it will become its default value.) Then we're iterating through every parameter of the array and var_dumps it outside. */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #11: MySQL 101 */

/* Each SQL query has to end with ; (semicolon), this includes CLI too. */
/* Some logged commands: show databases; use database; show tables; describe tablename; select * from tablename; */

/* PRIMARY KEY is the unique identifier of a column row. */
/* AUTO_INCREMENT means automatically increases a value by 1 with each row. */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #12: Classes 101 */

/* Class can represent any possible thing in any project. We're usually using nouns to define them. We're defining classes like that: */

class Pointer1
{
    public function __construct()
    {
    }
}

/* Inside Classes we can define function scopes. Protected ones can be used only inside Class Scope, while Public ones can be used everywhere upon called. Construct is method which will be called whenever you will create a new instance of Pointer. Every new class call is called "instance" (new ClassName). */

class Pointer2
{
    public $publicParam;
    protected $someParam;

    public function __construct($params)
    {
        $this->params = $params;
        // We're setting up our constructor properties, every parameter has to be declared that way.
        // Arrow "->" means we're referring to the current instance of a class, with arrow we're assigning a property to this object (current class instance).
        // Each instance of a class is an "object".
    }
}

$point = new Pointer2('Hello World');

/* If we want to pass some params to the class, we have to define them in our constructor. We can't access property someParam like $something->someParam, because it's scoped only inside Class - that means we can't access it globally. On the other hand - we can access the public one, $publicParam. */

/* If we want to import class beside our namespace, use require or require_once('path/to/class/Class.php'); */

/* The class itself is something like blueprint, but it can be composed from different values. */

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #13: Intro to PDO */

/* PDO Means PHP Data Objects. We can use it to connect to the database. To connect to the Database we can use new instance of pdo. */

$local_connection = new PDO('mysql:host=127.0.0.1;dbname=php_team_app', 'root', '');

/* In PHP to handle our requests we can use keywords try and catch, just like that: */

try {
    $local_connection = new PDO('mysql:host=127.0.0.1;dbname=php_team_app', 'root', '');
} catch (PDOException $event) {
    $something = "Not Working";
}

/* In that way we can tell the user if database connection works. After init our connection, we can prepare some querries to be done. */

$get_users = $local_connection->prepare('SELECT * FROM pta_user');

/* After doing preparation, we have to execute our statement. */

$get_users->execute();

/* Now if we want to check if it's working, we have to use fetchAll() method from PDO. If we want to change a way in which data is being fetch, we can pass additional parameter which is PDO::FETCH_OBJ, that means we're fetching all things from query to the memory. */

var_dump($get_users->fetchAll(PDO::FETCH_OBJ));

/* To fetch only selected data, we can use fetch() instead of fetchAll(). */

/* Now we can list down all our contents from selected query. All we have to do is assign this execution (with fetch all) to a variable, and then loop through them. */

foreach ($users as $info => $user) :
    echo $info;
    echo $user->name;
endforeach;

/* We can also fetch our data through the CLASS. */

$users = $get_users->fetchAll(PDO::FETCH_CLASS, 'User');

/* ######################################## */
/* ######################################## */
/* ######################################## */

/* #14: PDO Refactoring https://laracasts.com/series/php-for-beginners/episodes/14 */

class Db
{
	// New keyword here -> static
    public static function connect()
    {
        // This means that we can use this method globally without requiring an instance!
    }
}

/* Then, we don't need to do things such as: */

/* $db = new Db();
	$db->connect();
 */

/* Instead of this we can do
	Db::connect();
*/

/* Static methods are useful when you don't need to create an instance. */

/* Without namespaces, we can require Class file from another location and freerly use their methods. */