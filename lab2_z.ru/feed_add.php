﻿<?php
$login=trim($_POST["login"]);
$password=trim($_POST["password"]);
/* Подключение к базе в случае успеха предыдущих проверок */
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());
?>
<html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Личный кабинет пользователя</title></head>
		  <body>
		  <form action='feed_dob.php' method='post' name='forma2'>
		     <div  align='center' style='background:white; width:900px; height:30 px;'>
			 <button name="main_back" style="background: #fdeaa8; width: 430px; height: 20px; border-radius: 5px; box-shadow: 0px 1px 3px; font-size: 14px;"><a href="back_main.php">Вернуться на стартовую страницу</a></button>
			
				<button name="main_back" style="background: #fdeaa8; width: 430px; height: 20px; border-radius: 5px; box-shadow: 0px 1px 3px; font-size: 14px;"><a href="logout.php">Выйти</a></a></button>
				  <br>	  <br>	  <br>	
		        <p align='center'>Таблица "Корм" <font color="red">
				<?php echo $answer_pass['login'];?></font></p>
		        <table border="1">
				<tr><td>Наименование корма</td><td>Количество</td><td>Единица измерения</td></tr>
				<tr><td><input name='name_feed' type='text'></td><td><input type='text' name='kol'></td><td><input type='text'readonly name='izmer' value='шт'></td><tr>				
				</table>
                <br>	
				
				<input type="submit" style="background: #fdeaa8; width: 430px; height: 40px; border-radius: 5px; box-shadow: 0px 1px 3px; font-size: 20px;" value="Закупить корм">
</form>				
				<a href="logout.php">logout</a>
			 </div>
			 
		  </body>
</html>
