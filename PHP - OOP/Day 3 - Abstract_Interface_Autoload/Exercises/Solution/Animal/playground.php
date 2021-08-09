<?php

spl_autoload_register();

$garfield = new Cat('Ginger', 'Male', 'Garfield', 4);
$snoopy = new Dog('Black&White', 'Male', 'Snoopy', 4);

$garfield->communicate();
$snoopy->communicate();

$simon = new Human('Simon', 'Brown', 'Male');
$robot = new Robot('z1239', 'Silver');

$simon->work();
$robot->work();
