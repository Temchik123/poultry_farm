<?php
$login=trim($_POST["login"]);
$password=trim($_POST["password"]);
$dpassword=trim($_POST["dpassword"]);
$email=trim($_POST["email"]);
$fio=trim($_POST["fio"]);
$level=trim($_POST["level"]);

/* �������� ���������� ���� ����� ����� ����������� */
if(empty($login) or empty($password) or empty($dpassword) or empty($email))
{
 ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>���� �� ����� �� ���������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}
/* �������� ��������� ����� ������� */
if($password!=$dpassword)
{
 ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>��������� ������ �� �������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}
/* �������� ������� ���������� ����� */
if (!preg_match ("/^[a-z]{1,10}$/i", $login))
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>���� ����� �� ������������� ������� (������ ��������� ������� 1-10 ����)</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}	
if (!preg_match ("/^[a-z0-9\.\?\$]{8,10}$/i", $password))
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>���� ������ �� ������������� ������� (���. ������� ��� ����������� �� ��������, �����, ������� $?. ������ �� ����� 8 � �� ����� 10)</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}	

if (!preg_match ("/^[a-z0-9\.\?\$]{1,60}$/i", $fio))
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>����������, ������� ���� ������� � ��� ���������� ��������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}	





if (!preg_match ("/^[a-z]+@[a-z]+\.[a-z]{2,3}$/i", $email))
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>���� ������ �� ������������� ������� (���. �������+@+���. �������+.+���. ������� � ���������� 2-3)</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}	
	
/* ����������� � ���� � ������ ������ ���������� �������� */
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='polutry_farm';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("�� ���� ������������ � �� MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("�� � ����� ������ �� �������: " . mysql_error());

/* ��������� ������� ������������ � ����� �� ������� � �� */
$query_login = mysql_query("SELECT * FROM `users` WHERE `login` = '$login' LIMIT 0 , 30") or die(mysql_error());
$answer=mysql_num_rows($query_login);
if ($answer>0)
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>������������ � ����� ������� ��� ����������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
mysql_close($connect);
exit;
}
$add_user="INSERT INTO `polutry_farm`.`users` (`id`, `login`, `password`, `email`, `fio`, `level` ) VALUES ('', '$login', '$password', '$email', '$fio', '$level')";
//echo $add_user;
$insert = mysql_query($add_user) or die(mysql_error());
if (!$insert)
 {
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>������������ �� ��������, ������ �� ��������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
 <?php
 mysql_close($connect);
 exit;
 }
else
{
  ?><html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf8"><title>�������� �����������</title></head>
		  <body>
		     <div  align='center' style='background:orange; width:600px; height:30 px;'>
		        <p align='center'>����������� � �������� ������������, ������ �� ������ ��������������</p>
				<a href="http://localhost/lab2_z.ru/index.html" align='center'>������� � �����������</a>
			 </div>
		  </body>
   </html>
  <?php
  mysql_close($connect);
  exit;
}
?>
