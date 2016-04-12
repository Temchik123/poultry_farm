<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>

<body>
<?php
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM users WHERE id= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='scripts/update.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='first_name'>Имя:</label><br/>
<input type='text' name='first_name' size='30' value='%s'><br/>
<label for='last_name'>Фамилия:</label><br/>
<input type='text' name='last_name' size='30' value='%s'><br/>
<label for='email'>Email:</label><br/>
<input type='text' name='email' size='30' value='%s'><br/>
<label for='facebook'>Facebook</label><br/>
<input name='facebook' type='text'  size='30' value='%s'>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</fieldset>
</form>",$row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['facebook']);
?>

<a href="info_form.html">Добавить пользователя</a><br/><br/>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>






?>