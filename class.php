<?php
class Drive {
    public $model;
    public $color;
    function set_name($model){
        $this->model = $model;
    }
    function get_name(){
        return $this-> model;
    }
}
$BMW_X7 = new Drive();
$Mustang = new Drive();
$BMW_X7 ->set_name('BMW_X7');
$Mustang -> set_name('Mustang');
echo $BMW_X7 -> get_name();
echo "<br>";
echo $Mustang ->get_name();

var_dump($Mustang instanceof Drive);
var_dump($BMW_X7 instanceof Drive);

echo "<h4>__construct Function</h4>";


class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name ." and ". $this->color."<br>";
    }
    }
  $apple = new Fruit("Apple", "red");
  $strawberry = new Fruit("Strawberry", "Dark pink");
  echo $apple->get_name();
  echo $strawberry->get_name();
  echo "<br>";
  echo "<h4>__destruct Function</h4>";
  class Bike {
    public $fname;
    public $color;
  
    function __construct($fname, $color) {
      $this->fname = $fname;
      $this ->color = $color;
    }
    function __destruct() {
      echo "The fruit is {$this->fname}. and color is {$this->color}";
    }
  }
  
  $apple = new Bike("GSA_1250", "Gold");
 echo $_SERVER['SCRIPT_URI'];
