<?php

class Human extends Creature implements IWorkers
{
    public function work()
    {
        echo $this->_name . ' is currently working.<br>';
    }

    public function communicate()
    {
        echo 'blablablablabla';
    }
}
