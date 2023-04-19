<?php

namespace  App;

class Worker
{
 public string $name; 
 public int $age; 
 public array $hours;

 public function Work(){
    print_r('im working'.'<br>') ;
 }
}