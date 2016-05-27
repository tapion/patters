<?php

namespace Duck;



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

Class FlyRocketPowered implements FlyBehaivor
{
  public function fly()
  {
    echo 'Volando en un Rocket? <br/>';
  }
}
