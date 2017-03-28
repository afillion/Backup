<?PHP
session_start();
$file = file_get_contents("../private/passwd");
$file_content = unserialize($file);
if ($file === NULL)
	return;

$login = $_SESSION['login'];
$i = 0;

while(isset($file_content[$i]))
{
	if ($login === $file_content[$i]['login'])
	{
		unset($file_content[$i]);
		session_destroy();
		$s_file = serialize($file_content);
		file_put_contents('../private/passwd', $s_file);
		header('Location: ../index.php');
	}
	$i++;
}
$_SESSION["del_error"] == 1;
header('Location: ../index.php');
?>
