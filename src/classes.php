<?php
namespace App;

class MagicClass {

  public function __construct() {
    echo "__construct\n";
  }


  public function __destruct() {
    echo "__destruct\n";
  }


  public function __get($name) {
    echo "__get($name)\n";
  }


  public function __set($name, $value) {
    echo "__set($name, $value)\n";
  }


  public function __isset($name) {
    echo "__isset($name)\n";
  }


  public function __unset($name) {
    echo "__unset($name)\n";
  }

 
  public function __call($name, $arguments) {
    echo "__call($name, " . implode(", ", $arguments) . ")\n";
  }

 
  public static function __callStatic($name, $arguments) {
    echo "__callStatic($name, " . implode(", ", $arguments) . ")\n";
  }


  public function __sleep() {
    echo "__sleep\n";
    return ["a", "b"]; // Произвольный массив свойств
  }


  public function __wakeup() {
    echo "__wakeup\n";
  }


  public function __toString() {
    echo "__toString\n";
    return "MagicClass";
  }


  public function __invoke($x) {
    echo "__invoke($x)\n";
    return $x * 2;
  }


  public static function __set_state($array) {
    echo "__set_state(" . var_export($array, true) . ")\n";
    return new self(); // Произвольный объект
  }


  public function __clone() {
    echo "__clone\n";
  }


  public function __debugInfo() {
    echo "__debugInfo\n";
    return ["a" => 1, "b" => 2]; // Произвольный массив
  }
}

class Point {
    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }

    public function move($dx, $dy) {
      $this->x += $dx;
      $this->y += $dy;
    }
  }
  
  class Vector {
    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }
  
    public function length() {
      return sqrt($this->x ** 2 + $this->y ** 2);
    }
  
    public function isZero() {
      return $this->x == 0 && $this->y == 0;
    }
  
    public function isPerpendicular($other) {
      return $this->x * $other->x + $this->y * $other->y == 0;
    }
  }
?>