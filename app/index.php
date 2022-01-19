<?php
//Import Classes
require_once('Controllers/User.php');
require_once('Utilities/functions.php');

// MYSQL Connection Handlers
try {
    $local_connection = new PDO('mysql:host=127.0.0.1;dbname=php_team_app', 'root', '');
} catch (PDOException $event) {
    die("Connection can't be established. Please check the properties.");
}

// Queries Preparation
$get_users = $local_connection->prepare('SELECT * FROM pta_user');
$get_users->execute();
$users = $get_users->fetchAll(PDO::FETCH_CLASS, 'User');

require 'index.view.php';
