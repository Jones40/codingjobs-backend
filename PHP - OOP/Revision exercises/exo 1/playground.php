<?php

require_once 'train.php';


$depTime = new train(1, 9, 10);
$arrTime = new train(1, 9, 10);
$delayTime = new train(1, 9, 10);
echo $depTime->getTime();


foreach ($trains as $train) {
    $train->getTime();
}
