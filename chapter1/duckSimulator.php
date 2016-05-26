<?php
namespace Duck\Test;

use Duck\FlyBehaivor\FlyBehaivors as FlyBehaivors;
use Duck\QuackBehaivor as QuackBehaivors;
use Duck;

Class MallarDuck extends Duck\Duck{
  public function __construct(){
    $this->quackBehaivor = new QuackBehaivors\QuackSound();
    $this->flyBehaivor = new FlyBehaivors\FlyWithWings();
  }

  public function display(){
    echo 'Soy un pato Mallar';
  }
}

Class ModelDuck extends Duck\Duck{
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
