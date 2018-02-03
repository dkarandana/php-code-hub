<?php

	/**
	 * Ref : http://php.net/manual/en/function.parse-ini-file.php
	 * 
	 * Constants may also be parsed in the ini file so if you define a constant as an ini value before running parse_ini_file()
	 *
	 */
	
	define('PUBLIC_DIR', __DIR__ .'/public');

	// Parse without sections
	// $ini_array = parse_ini_file("dev-config.ini");

	$ini_array = parse_ini_file("dev-config.ini", true);

	print_r($ini_array);
?>