<?php

include('const.php');

$dbh = new PDO('mysql:host=localhost;dbname='.DB_CONNECTION_DB, DB_CONNECTION_USER, DB_CONNECTION_PASS);

$sth = $dbh->query('DELETE FROM Users WHERE first_name="'.$_POST['first_name'].'"');

header('Location: /');
// http://127.0.0.1/openserver/phpmyadmin/tbl_sql.php?db=Dance&table=tovar
// http://phpfaq.ru/pdo
// file:///D:/Books%20IT%20web/Laravel%20framework.%20Zero%20to%20Pro/disk.1/videokurs/part1/part1_8.html
// file:///D:/Books%20IT%20web/Laravel%20framework.%20Zero%20to%20Pro/disk.2/start.html
// file:///D:/Books%20IT%20web/Laravel%20framework.%20Zero%20to%20Pro/disk.3/start.html