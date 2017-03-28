<?PHP
session_start();

include ('auth.php');

if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || $_POST['submit'] != 'OK') {
	$_SESSION['login_error'] = 1;
	header('Location: ../pages/login.php');
	return;
}

$login = $_POST['login'];
$passwd = hash('whirlpool', $_POST['passwd']);

if (auth($login, $passwd))
{
	set_session($login);
	header('Location: ../index.php');
}
else
{
	$_SESSION['login_error'] = 2;
	header('Location: ../pages/login.php');
}
?>
