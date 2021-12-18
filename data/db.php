<?php
	require 'controllers/database.php';

	$query = "select * from test";
	$socket = Database::getInstance()->get_result( $query );

    var_dump($socket);

	//Now we can use any other query.
	//$query = "insert into `tbl_chats` (column_name) values ('".$val."')";
	//somethingID = Database:getInstance()->dbquery($query);