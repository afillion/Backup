<?PHP

class UnholyFactory {
  private $_fighters = array();

  public function absorb($soldier) {
    if (is_a($soldier, 'Fighter') === TRUE) {
      if (array_key_exists($soldier->getName(), $this->_fighters) === FALSE) {
        $this->_fighters[$soldier->getName()] = $soldier;
        echo '(Factory absorbed a fighter of type ' , $soldier->getName() , ')' , PHP_EOL;
      }
      else {
        echo '(Factory already absorbed a fighter of type ' , $soldier->getName() , ')' , PHP_EOL;
      }
    }
    else {
      echo '(Factory can\'t absorb this, it\'s not a fighter)' , PHP_EOL;
    }
    return ;
  }
  public function fabricate($fighter) {
    if (array_key_exists($fighter, $this->_fighters) === TRUE) {
      echo '(Factory fabricates a fighter of type ' , $fighter , ')' , PHP_EOL;
      return $this->_fighters[$fighter];
    }
    else {
      echo '(Factory hasn\'t absorbed any fighter of type ' , $fighter , ')' , PHP_EOL;
      return NULL;
    }
  }
}

?>
