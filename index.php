<?php
// App Init
$instance = require 'Bootstrap/bootstrap.php';

// App Stuff
$users = $instance->selectAll('pta_user');

// Views
require 'index.view.php';
