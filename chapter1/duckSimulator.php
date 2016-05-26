<?php
Class MallarDuck extends Duck{
  public function __construct(){
    $this->quackBehaivor = new Quack_c();
    $this->flyBehaivor = new FlyWithWings();
  }

  public function display(){
    echo 'Soy un pato Mallar';
  }
}

Class ModelDuck extends Duck{
  public function __construct(){
    $this->flyBehaivor = new FlyNoWay();
    $this->quackBehaivor = new Quack_c();
  }

  public function display()
  {
    echo 'Soy un molde de pato';
  }
}

class MiniDuckSimulator{
  public function __construct(){
    $mallard = new MallarDuck();
    $mallard->performFly();
    $mallard->performQuak();

    $modelDuck = new ModelDuck();
    $modelDuck->performFly();
    $modelDuck->setFlyBehaivor(new FlyRocketPowered);
    $modelDuck->performFly();
  }
}
