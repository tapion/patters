<?php
interface FlyBehaivor{
  public function fly();
}

interface QuackBehaivor{
  public function quack();
}

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

class FlyWithWings implements FlyBehaivor{
  public function fly(){
    echo 'Estoy volandooooo <br/>';
  }
  public function prueba(){
    echo 'Pruebabbbbb';
  }
}

class FlyNoWay implements FlyBehaivor{
  public function fly()
  {
    echo 'No puedo volar :( <br/>';
  }
}

class Quack_c implements QuackBehaivor{
  public function quack(){
    echo 'Cuak Cuak <br/>';
  }
}

Class MuteQuack implements QuackBehaivor{
  public function quack(){
    echo '...';
  }
}

Class Squeak implements QuackBehaivor{
  public function quack(){
    echo 'squeak <br/>';
  }
}

Class FlyRocketPowered implements FlyBehaivor
{
  public function fly()
  {
    echo 'Volando en un Rocket? <br/>';
  }
}
