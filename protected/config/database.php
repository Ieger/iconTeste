<?php

// This is the database connection configuration.
return array(
//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database.

	'connectionString' => 'pgsql:host=127.0.0.1;port=5432;dbname=iconteste',
	'emulatePrepare' => true,
	'username' => 'icon',
	'password' => 'icon',
	'charset' => 'utf8',
);