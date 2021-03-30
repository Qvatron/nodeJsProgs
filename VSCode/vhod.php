<?php


	session_start();
echo "
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css' />
<title>Форма входа на PHP</title>
</head><body>"?>
<?php
if(isset($_SESSION['login']))
{$login='Здравствуйте, '.$_SESSION['login'].'!';}
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
		echo "<p style='margin-left:60px;'>Вы вошли на сайт, как гость</p><br>
<!--Подключение обработчика формы--><form id='forma' action='script1.php' method='post'>
<h1>Форма входа</h1>
<p>Заполните поля для входа на сайт</p>
<p>Логин<br /><input type='text' name='login'></p>
<p>Пароль<br /><input type='password' name='password'></p>
<p><input type='submit' name='submit' value='Войти'>
<!--**** Кнопка (type='submit') отправляет данные на страничку script1.php ***** --> 
<br></p></form><p style='margin-left:60px;'><a href='registration.php'>Регистрация</a></p>";
	}
 else 
    {
    echo "<br /><br />Вы вошли на сайт, как ".$_SESSION['login']."<br><br />";
		echo ('<form action="close.php" method="POST">
				<input type="submit" value="Выход"/>
			</form>');
}
echo"
</body></html>"; 
?>