<?php

namespace Duck\QuackBehaivor\QuackBehaivors;

include ('QuackBehaivor.php');

class QuackSound implements Duck\QuackBehaivor\QuackBehaivor{
  public function quack(){
    echo 'Cuak Cuak <br/>';
  }
}

Class MuteQuack implements Duck\QuackBehaivor\QuackBehaivor{
  public function quack(){
    echo '...';
  }
}

Class Squeak implements Duck\QuackBehaivor\QuackBehaivor{
  public function quack(){
    echo 'squeak <br/>';
  }
}
