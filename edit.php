<?php
include('const.php');

$dbh = new PDO('mysql:host=localhost;dbname='.DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

$sth = $dbh->query('UPDATE Users SET last_name="'.$_POST['last_name'].'" WHERE first_name="'.$_POST['first_name'].'"');

header('Location: /');

