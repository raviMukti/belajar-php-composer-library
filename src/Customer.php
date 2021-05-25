<?php

namespace RaviMukti\Belajar;

class Customer
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $helloName)
    {
        return "Hello ".$helloName." My Name Is ".$this->name;
    }
}