<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	'connectionString' => 'mysql:host=localhost;dbname=' . DB_NAME,
	'emulatePrepare' => true,
	'username' => DB_USER,
	'password' => DB_PASS,
	'charset' => 'utf8',
);