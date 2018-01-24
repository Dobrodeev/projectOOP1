<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<html>
	<head>
	<title>Тестовая БД</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	</head>

<body>
	<script src="assets/jquery-3.2.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <div class="forma">
	
	<form action="Users_handler.php" method="post">
	Имя
	<input name='first_name'>
	Фамилия
	<input name='last_name'>
	<input name='type' value="add" hidden>
<!-- 	<input type="submit" /> -->
	<br><br>
	<button class="btn btn-primary" type="submit">Отправить</button>
	<button class="btn" type="reset">Сбросить</button>
	</form>

	<hr>

	<form action="Users_handler.php" method="post">
	Имя пользователя для удаления
	<input name='first_name'>
    <input name='type' value="delete" hidden>
		<br><br>
	<button class="btn btn-primary" type="submit">Отправить</button>
	<button class="btn" type="reset">Сбросить</button>
	</form>
	<hr>

	<form action="Users_handler.php" method="post">
	<h4>Редактирование фамилии пользователя по его имени</h4>
    <p>Имя</p>
	<input name='first_name'>
    <input name='type' value="edit" hidden>
	<p>Новое имя</p>
    <input name='last_name'>
	<br><br>
	<button class="btn btn-primary" type="submit">Отправить</button>
	<button class="btn" type="reset">Сбросить</button>
	
	</form>
	<br><br>
	<form action="Users_handler.php" method="post">
    <input name='type' value="show" hidden>
	<button class="btn btn-large btn-primary" type="submit">Показать всех пользователей</button>
	</form>
    </div>


</body>

</html>
