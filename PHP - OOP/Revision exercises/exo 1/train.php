<?php

class train
{

    private $id;
    private $depTime;
    private $arrTime;
    private $delay;


    public function __construct($id, $depTime, $arrTime)
    {

        $this->id = $id;
        $this->depTime = $depTime;
        $this->arrTime = $arrTime;
        $this->delay = 0;
    }

    public function get_id()
    {
        return $this->id;
    }
    public function get_depTime()
    {
        return $this->depTime;
    }
    public function get_arrTime()
    {
        return $this->arrTime;
    }
    public function get_delay()
    {
        return $this->delay;
    }

    public function set_delay($delay)
    {

        if (is_int($delay)) {
            $this->delay = $delay;
        } else {
            return 'this is not a integer';
        }
    }
    public function set_id($id)
    {

        if (is_int($id)) {
            $this->id = $id;
        } else {
            return 'this is not a integer';
        }
    }
    public function getTime()
    {
        $rand = rand(0, 1);
        if ($rand == 1) {
            $this->delay = 202135;
            return '<span style=" color: red; ">' . $this->delay . '</span>';
        } else {
            return '<span style=" color: green; ">' . $this->depTime . '</span>';
        }
    }
}
