<?php
class Demo1
{
  public $name = "rohnit";
  protected $email = 'rohnit@gmail.com';
  private $password = '12345678';

  function access()
  {
    echo $this->name;
    echo $this->email;
    echo $this->password;
  }
}
$obj = new Demo1();
$obj->name;
// $obj->email;
// $obj->password;
$obj->access();
echo "<br>";

class demo2 extends Demo1
{
  public $name = 'salman';
  protected $email = 'sjql@gmail.com';
  function access1()
  {
    echo $this->name;
    echo $this->email;
    // echo $this->password;
  }
}
$obj1 = new Demo2();
echo $obj1->name;
// echo $obj1->email;
// echo $obj1->password;
$obj1->access1();


// Late static 
class base
{
  protected static $name = "frog";
  public function show()
  {
    echo static::$name;
    echo self::$name;
  }
}
class derived extends base
{
  protected static $name = "jump";
}
$obj = new derived();
$obj->show();


//Traits
trait garage
{
  public function show()
  {
    echo "Here is the detail of a car<br>";
  }
  public function color()
  {
    echo "Here is a different color of your car<br>";
  }
}
trait bike1
{
  public function see()
  {
    echo "Here is a detail of a bike<br>";
  }
  public function color1()
  {
    echo "Here is a diffrent color of your bike<br>";
  }
}
class Ride
{
  use garage;
  public function color1()
  {
    echo "from class";
  }
}

class Arrange extends Ride
{
  use bike1, garage;
  public function color1()
  {
    echo "Arrange";
  }
}
$obj = new Ride();
$obj->show();
$obj->color();

$obj2 = new Arrange();
$obj2->see();
$obj2->color1();
$obj2->color();

interface A
{
  function calc($A, $B);
}
echo "<br>";
interface B
{
  function sum($a, $b);
}
class Sub implements A, B
{
  public function calc($y, $x)
  {
    echo $x + $y . "<br>";
  }
  public function sum($v, $z)
  {
    echo $v - $z;
  }
}
$test = new Sub();
$test->calc(12, 33);

$test->sum(33, 43);

echo "<br>";

class abc
{
  private $data = ["name" => "Rohnit", "age" => 23];

  public function __get($prop)
  {
    if (array_key_exists($prop, $this->data)) {
      return $this->data[$prop];
    } else {
      echo "this key ($prop) doesn't exist";
    }
  }
  public function __set($prop, $value)
  {
  }
}
$test = new abc();
echo $test->nam;
echo "<br>";

$data = serialize(["Red", "Green", "Blue"]);
echo $data;
