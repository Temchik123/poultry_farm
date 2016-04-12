<?php
header ("Location: feed.php");
$date=trim($_REQUEST['name_feed']);
$kol=trim($_REQUEST["kol"]);
$ed_izmer=trim($_REQUEST["izmer"]);
/* Подключение к базе в случае успеха предыдущих проверок */
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());
$add_eggs="INSERT INTO `polutry_farm`.`feed` (`id`, `kol`, `name_feed`, `ed_izm`) VALUES ('', '$kol', '$date', '$ed_izmer')";
$insert = mysql_query($add_eggs) or die(mysql_error());
if (!$insert)
 {echo 'Партия не добавилась';}
else {
	echo 'Новая партия добавилась в базу!';
}

?>