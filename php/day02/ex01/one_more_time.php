#!/usr/bin/php
<?PHP

function  ft_date($date, $month)
{
  if ($month == "Janvier" && $date <= 31)
    return TRUE;
  else if ($month == "Fevrier" && $date <=29)
    return TRUE;
  else if ($month == "Mars" && $date <=31)
    return TRUE;
  else if ($month == "Avril" && $date <=30)
    return TRUE;
  else if ($month == "Mai" && $date <=31)
    return TRUE;
  else if ($month == "Juin" && $date <=30)
    return TRUE;
  else if ($month == "Juillet" && $date <=31)
    return TRUE;
  else if ($month == "Aout" && $date <=31)
    return TRUE;
  else if ($month == "Septembre" && $date <=30)
    return TRUE;
  else if ($month == "Octobre" && $date <=31)
    return TRUE;
  else if ($month == "Novembre" && $date <=30)
    return TRUE;
  else if ($month == "Decembre" && $date <=31)
    return TRUE;
  else
    return FALSE;
}

function  ft_format($s, $hash)
{
  foreach($hash as $key => $val)
  {
    if (strcasecmp($s, $val) == 0)
      return $key;
  }
  return FALSE;
}

$day_hash = array("key1" => "Lundi", "key2" => "Mardi", "key3" => "Mercredi", "key4" => "Jeudi", "key5" => "Vendredi", "key6" => "Samedi", "key7" => "Dimanche");
print_r($day);

$month_hash = array("key1" => "Janvier", "key2" => "Fevrier", "key3" => "Mars", "key4" => "Avril", "key5" => "Mai", "key6" => "Juin", "key7" => "Juillet", "key8" => "Aout", "key9" => "Septembre", "key10" => "Octobre", "key11" => "Novembre", "key12" => "Decembre");
print_r($month);

$tab = array();
foreach($argv as $e)
{
  $tmp = explode(" ", $e);
  $tab = array_merge($tab, $tmp);
}
print_r($tab);

array_shift($tab);
if (count($tab) != 5)
{
  echo "Wrong Format\n";
  return ;
}
$day = array_shift($tab);
$date = array_shift($tab);
$month = array_shift($tab);
$year = array_shift($tab);
$hour = array_shift($tab);

echo "$day\n$date\n$month\n$year\n$hour\n";

echo ft_format($day, $day_hash)."\n";
echo ft_format($month, $month_hash)."\n";
if (ft_format($day, $day_hash) == FALSE || ft_format($month, $month_hash) == FALSE || ft_date($date, $month) == FALSE)
{
  echo "Wrong Format\n";
  return ;
}

?>
