<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>Untitled Document</title>
</head>
<body>
<?php
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());
$id=$_REQUEST['id'];
$fio=trim($_REQUEST['fio']);
$email=trim($_REQUEST['email']);
$level=trim($_REQUEST['level']);
$update_sql = "UPDATE users SET fio='$fio', email='$email', level='$level' WHERE id='$id'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Запись успешно обновлена!</p>';
?>
<a href="logout.php">Перезайти</a><br/><br/>
</body>
</html>