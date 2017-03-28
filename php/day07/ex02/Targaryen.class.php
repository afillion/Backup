<?PHP

class Targaryen {
  protected function resistsFire() {
    return FALSE;
  }
  public function getBurned() {
    if ($this->resistsFire() === TRUE)
      return 'emerges naked but unharmed';
    else
      return 'burns alive';
  }
}

?>
