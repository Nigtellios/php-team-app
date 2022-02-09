<?php
// Import Classes
require 'Controllers/QueryConstructor.php';
require 'Controllers/Connection.php';
require 'Controllers/User.php';

// Import Utilities
require 'Utilities/functions.php';

return new QueryConstructor(
    Connection::connect()
);
