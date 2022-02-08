<?php
// Import Classes
require 'Controllers/Connection.php';
require 'Controllers/User.php';
require 'Controllers/QueryConstructor.php';

// Import Utilities
require 'Utilities/functions.php';

// Database Preparation
$db_init = Connection::connect();

// Queries
$constructor = new QueryConstructor($db_init);
$users = $constructor->selectAll('pta_user');

// Views
require 'index.view.php';
