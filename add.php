<?php
include('const.php');

$dbh = new PDO('mysql:host=localhost;dbname='.DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

$sth = $dbh->query('INSERT INTO Users (first_name, last_name) VALUES ("'.$_POST['first_name'].'", "'.$_POST['last_name'].'")');

header('Location: /');
