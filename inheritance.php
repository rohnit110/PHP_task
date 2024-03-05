<?php
echo "<h4>Inheritance PHP</h4>";
class Vegetable{
 public $name;
 public $color;
 public function __construct($name,$color){
    $this->name = $name;
    $this->color = $color;
 }
 protected function intro(){
    echo "The name of vegetable is $this->name and the color is $this->color";

 }
}
class Potato extends Vegetable{
    public function message(){
        echo "Am i vegetable or potato ?";
        $this -> intro();
    }
    
}
$potato = new Potato("potato","light brown");
$potato -> message();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h4>Constant PHP</h4>";
class Hello{
    const MESSAGE = "Welcome to PHP Tutrial";
}
echo Hello :: MESSAGE;

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();

  echo "The time is " . date("h:i:sa");