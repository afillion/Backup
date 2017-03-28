<?PHP

include("./get_data.php");

function  get_user($name)
{
  $id = 0;
  $users = get_users();
  while($users[$id]['login'] != $name)
	  $id++;
	if ($users[$id]['login'] === $name)
		return $users[$id];
  return FALSE; //not found
}

?>
