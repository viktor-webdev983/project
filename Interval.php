<?php

class Interval {
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2) {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays() {
        
    }
}