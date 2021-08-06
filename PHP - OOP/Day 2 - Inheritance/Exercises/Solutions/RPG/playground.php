<?php

require_once 'Character.php';
require_once 'Equipment.php';

$legolas = new Elf('Legolas');
$orc = new Orc('Orcas');

$legolas->attack($orc);
/*
$sword1 = new Equipment("Sword", 10, 0, 0);
$sword2 = new Equipment("Sword", 15, -2, 3);
$shield = new Equipment("Shield", 0, 10, 0);

$legolas->add_equipment($sword1);
*/