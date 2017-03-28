<?PHP

class Lannister {
  public function sleepWith($who) {
    if (get_parent_class($who) != get_parent_class($this))
      echo 'Let\'s do this.' , PHP_EOL;
    else if (get_class($this) == 'Jaime' && get_class($who) == 'Cersei')
      echo 'With pleasure, but only in a tower in Winterfell, then.' , PHP_EOL;
    else
      echo 'Not even if i\'m drunk !' , PHP_EOL;
  }
}

?>
