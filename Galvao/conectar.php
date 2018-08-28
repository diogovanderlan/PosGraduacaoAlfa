<?php 
	$dsn = 'mysql:host=localhost;dbname=persistencia';

	$dbh = new PDO($dsn, 'root', '');
	$sql = 'SHOW TABLES';
	$stmt = $dbh->prepare($sql);
 	$stmt->execute();

 	while ($record = $stmt->fetchObject()){
 		echo $record->Tables_in_persistencia . '<br>';
 	}

 	$dbh =  NULL;