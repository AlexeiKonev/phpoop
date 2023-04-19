<?php

namespace  App;

class Visitor
{
 public string $name; 
 public int $age; 
 public array $hours;

public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;


}

    public function Visit(){
    print_r('im visit'.'<br>') ;
 }
}