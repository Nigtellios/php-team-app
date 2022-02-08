<?php
// Import Classes
require 'Controllers/Connection.php';
require 'Controllers/User.php';

// Import Utilities
require 'Utilities/functions.php';

// Database Preparation
$init = Connection::connect();

// Queries Preparation
$get_users = $init->prepare('SELECT * FROM pta_user');
$get_users->execute();
$users = $get_users->fetchAll(PDO::FETCH_CLASS);

// Views
require 'index.view.php';
