<?php
/*abstract class Animal
{
    public $name;
    public $age;
    protected $prueba;

    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old->".$this->prueba;
    }

    abstract public function Greet();
}

class Dog extends Animal
{
  public function __construct(){
    $this->prueba = 'hola';
  }
    public function Greet()
    {
        return "Woof!";
    }

    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";
    }
}
$animal = new Dog();
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();
*/

/*
include ('duck.php');
include ('FlyBehaivor.php');
include ('FlyWithWings.php');
include ('QuackBehaivor.php');
include ('QuackSound.php');
include ('duckSimulator.php');
*/
//use Duck;


$llamado = new \Duck\MiniDuckSimulator();
exit('hola');
