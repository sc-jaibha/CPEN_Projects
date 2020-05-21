<?php

	$dbServername= 'sql307.epizy.com';
	$dbUsername= 'epiz_25308851';
	$dbPassword='j9lOD5UHbWwLDpj';
	$dbName='epiz_25308851_Users';

	$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);

	if ($conn->connect_error) {
		echo "unable to connect to server";
	}














?> 