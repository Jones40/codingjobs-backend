<?php

spl_autoload_register();

$garfield = new Cat('Ginger', 'Male', 'Garfield', 4);
$snoopy = new Dog('Black&White', 'Male', 'Snoopy', 4);
$caty = new Cat('Black', 'Female', 'Caty', 3);
$joe = new Dog('Brown', 'Male', 'Joe the cat', 3);

$simon = new Human('Simon', 'Brown', 'Male');
$john = new Human('John', 'Brown', 'Male');

$robot = new Robot('z1239', 'Silver');
$robot2 = new Robot('y9877', 'Gold');

// Creature array 
$creatureArray = array(
    $garfield,
    $snoopy,
    $caty,
    $joe,
    $simon,
    new Human('John', 'Brown', 'Male')
);

// Create Human/robots
$workersArray = array(
    $simon,
    $john,
    $robot,
    $robot2
);

// Loop 10 times
for ($i = 0; $i <= 10; $i++) {
    // generate random int
    $random = rand(0, count($creatureArray) - 1);
    // Access the object and ask it to communicate
    $creatureArray[$random]->communicate();
}

// Loop 10 times
for ($i = 0; $i <= 10; $i++) {
    // generate random int
    $random = rand(0, count($workersArray) - 1);
    // Access the object and ask it to communicate
    $workersArray[$random]->work();
}


foreach ($workersArray as $worker) {
    if (get_class($worker) == 'Robot') {
    } elseif (get_class($worker) == 'Human') {
    }
}
