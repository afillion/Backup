<?PHP
session_start();
include('../modules/auth.php');

if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || $_POST['submit'] != 'OK') {
	$_SESSION['signup_error'] = 1;
	header('Location: ../pages/signup.php');
	return;
}

	$file = file_get_contents('../private/passwd');
	$file_content = unserialize($file);

$login = $_POST['login'];
$passwd = hash('whirlpool', $_POST['passwd']);
$account = array(
	'login' => $login,
	'passwd' => $passwd,
);

function add_account($account, $file_content)
{
	$file_content[] = $account;
	$file = serialize($file_content);
	file_put_contents('../private/passwd', $file);
}

if (!log_exists($login, $file_content))
{
	add_account($account, $file_content);
	set_session($login);
	header('Location: ../index.php');
}
else {
	$_SESSION['signup_error'] = 2;
	header('Location: ../pages/signup.php');
}
?>
