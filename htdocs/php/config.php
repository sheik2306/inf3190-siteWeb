<?php
require 'vendor/autoload.php';
require 'Medoo.php';
 
// Using Medoo namespace

use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'tp2',
	'server' => 'localhost:8889',
	'username' => 'root',
	'password' => 'root',

	]);	
	?>