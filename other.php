<?php
class C
{
  private $var;

  public function __construct(int $var = 1)
  {
    $this->var = $var;
  }

  public function puts()
  {
    echo "puts {$this->var}", PHP_EOL;
  }
}
