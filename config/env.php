<?php
	namespace Env;

	$_ENV[ 'APP_ENV' ] = getenv( 'APP_ENV' );

	if ( !$_ENV[ 'APP_ENV' ] ) $_ENV[ 'APP_ENV' ] = 'production';
	if ( !isset( $_SERVER[ 'DOCUMENT_ROOT' ] ) )
		$_SERVER[ 'DOCUMENT_ROOT' ] = str_replace( $_SERVER[ 'SCRIPT_NAME' ], '', $_SERVER[ 'SCRIPT_FILENAME' ] );

	$env_name 		   = "$_ENV[APP_ENV].env";
	$current_directory = __DIR__;
	$root_directory    = realpath( $_SERVER[ 'DOCUMENT_ROOT' ] );
	$is_found 		   = false;

	while ( !$is_found && strpos( realpath( "$current_directory/$env_name" ), $root_directory) == 0 ) {
		$file = null;
		if ( file_exists("$current_directory/.env") ) $file = "$current_directory/.env";
		if ( file_exists("$current_directory/$env") ) $file = "$current_directory/$env";
		if ( file_exists("$current_directory/environments/$env") ) $file = "$current_directory/environments/$env";
		if ( $file ) {
			foreach ( explode( PHP_EOL, file_get_contents( $file ) ) as $line ) {
				if ( empty( $line ) ) continue;
				list( $key, $value ) = explode ( '=', $line, 2 );
				$_ENV[ $key ] = $value;
			}
			$is_found = true;
		}
		$current_directory = dirname( $current_directory );
	}