<?php

/*

Interfaces

An interface looks like a class but has only static properties or abstract methods.

We use interface to implement multiple inheritance.

Interfaces are used to implements/share roles.

An interface allow to specify one part of the code must be implemented.

Best practice : 
    - Name should start with a capital I
    - Name of the file should be the same as the interface name
*/

interface IExample
{
    public function sit();
}

class Dog extends Animal implements IExample
{
    // I HAVE TO IMPLEMENT THIS METHOD : Mandatory
    public function sit()
    {
        echo 'Dog is sitting';
    }
}

class Human implements IExample
{
    // I HAVE TO IMPLEMENT THIS METHOD : Mandatory
    public function sit()
    {
        echo 'Human is sitting';
    }
}
