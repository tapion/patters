<?php

//namespace Duck\FlyBehaivor\FlyBehaivors;

use Duck\FlyBehaivor;

class FlyWithWings implements Duck\FlyBehaivor\FlyBehaivor{
  public function fly(){
    echo 'Estoy volandooooo <br/>';
  }
  public function prueba(){
    echo 'Pruebabbbbb';
  }
}

class FlyNoWay implements Duck\FlyBehaivor\FlyBehaivor{
  public function fly()
  {
    echo 'No puedo volar :( <br/>';
  }
}

Class FlyRocketPowered implements Duck\FlyBehaivor\FlyBehaivor
{
  public function fly()
  {
    echo 'Volando en un Rocket? <br/>';
  }
}
