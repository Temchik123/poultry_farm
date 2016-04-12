<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вносим изменеиния</title>
</head>
<body>
<form action='update.php' method='post' name='forma'>
<?php
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());
$id = $_REQUEST['user'];
$users=mysql_query("SELECT * FROM `users`WHERE id='$id'") or die(mysql_error());
$all_users=mysql_fetch_array($users);
echo '
<input type="hidden" name="id"  value="'.$all_users['id'].'"><br/>
<label for="fio">ФИО:</label><br/>
<input type="text" readonly name="fio" size="30" maxlength="50" value = "'.$all_users['fio'].'"><br>
<label for="email">Email:</label><br/>
<input type="text" readonly name="email" size="30" value="'.$all_users['email'].'"><br/>
<label for="level">Права доступа</label><br/>
<input name="level" type="text"  size="30" value="'.$all_users['level'].'">
<input id="submit" type="submit" value="Редактировать">';
?>
</form>
<a href="logout.php">Перезайти</a><br/><br/>
</body>
</html>