<?php

namespace Duck;


class QuackSound implements QuackBehaivor{
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
