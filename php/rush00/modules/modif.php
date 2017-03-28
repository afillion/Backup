<?PHP
session_start();

$file = file_get_contents('../private/passwd');
$file_content = unserialize($file);

if ($file === NULL)
	return;

$login = $_POST['login'];
$new_passwd = hash('whirlpool', $_POST['newpw']);
$old_passwd = hash('whirlpool', $_POST['oldpw']);

function log_exists($login, $file_content)
{
	if ($file_content === NULL)
		return (FALSE);
	foreach ($file_content as $account)
	{
		if ($login == $account['login'])
			return ($account);
	}
	return (NULL);
}

function change_pass($passwd, $file_content)
{
	$i = 0;
	while (isset($file_content[$i]))
	{
		if ($file_content[$i]['login'] == $_POST['login'])
		{
			$file_content[$i]['passwd'] = $passwd;
			break;
		}
		$i++;
	}
	$s_file = serialize($file_content);
	file_put_contents('../private/passwd', $s_file);
}

$old_acc = log_exists($login, $file_content);

if ($old_acc !== NULL)
{
	if ($old_passwd == $old_acc['passwd'])
	{
		change_pass($new_passwd, $file_content);
		header('Location: ../index.php');
	}
	else
		$_SESSION['modif_error'] == 2;
}
else
	$_SESSION['modif_error'] == 3;
header('Location: ../pages/modif.php');

?>
