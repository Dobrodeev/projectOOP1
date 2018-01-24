<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
 	<script src="assets/js/bootstrap.min.js"></script>
<?php
error_reporting(-1);
ini_set('display_errors', 'On');


include('Users.class.php');
include('const.php');

$users = new Users;

$form_type = $_POST['type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

switch($form_type){
	case 'add':
		$users->add($first_name, $last_name);
		break;
	case 'edit':
		$users->edit($first_name, $last_name);
		break;
	case 'delete':
		$users->delete($first_name);
		break;
	case 'show':
		$users->show();
	break;
}
?>
</body>
</html>
