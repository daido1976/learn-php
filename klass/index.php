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

$c = new C(100);
$c->puts();
