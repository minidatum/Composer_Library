<?php

namespace Minidatum\Belajar;

class Customer {

    public function __construct(private string $name){

    }

    public function sayHalo(string $name):string{
        return "Hello $name, My name is $this->name";
    }

}