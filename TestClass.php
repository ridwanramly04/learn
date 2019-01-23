<?php

class test{ 
    
    function login($name = null)
    {
        return "Kelas pertama name :".$name;
    }
}

class test2{

    protected $name;
    protected $test;

    function __construct($name, $age = null)
    {
        $this->name = $name;
        $this->test = new test();

    }
    function login()
    {
        return "Name :".$this->name;
    }

    function calledClass()
    {
        return $this->test->login($this->name);
    }
}

//Cara pertama
$kedua = new test2('ahmad');

echo $kedua->calledClass()."<br>";

//Cara kedua





