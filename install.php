<?php
$secret = 'taylor-swift';

if($_GET['secret'] === $secret) {
	$db_host = getenv('DB_HOSTNAME');
	$db_name = getenv('DB_NAME');
	$db_user = getenv('DB_USER');
	$db_pass = getenv('DB_PASS');
    
	$dbh = new PDO('sqlsrv:server = ' . $db_host . '; Database = ' . $db_name, $db_user, $db_pass);
	$sql = "CREATE TABLE users (
    	id int(10) NOT NULL IDENTITY(1,1),
    	username varchar(64) NOT NULL,
    	password varchar(64) NOT NULL,
    	PRIMARY KEY (id)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	$dbh->exec($sql);
}
