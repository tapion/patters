<?php

namespace Duck;

abstract class Duck {

  protected $flyBehaivor;
  protected $quackBehaivor;

  public abstract function display();


  public function performFly()
  {
    $this->flyBehaivor->fly();
  }

  public function performQuak()
  {
    $this->quackBehaivor->quack();
  }

  public function swim()
  {
    echo 'Todos los patos nadan <br/>';
  }

  public function setFlyBehaivor(FlyBehaivor $fb){
    $this->flyBehaivor = $fb;
  }

  public function setQuackBehaivor(QuackBehaivor $qb)
  {
    $this->quackBehaivor = $qb;
  }
}
