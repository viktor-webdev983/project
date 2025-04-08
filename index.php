<?php
class Date {

    private $date;

    public function __construct($date = null) {
        if($date === null) {
            $this->date = new DateTime();
        } else {
            $this->date = new DateTime($date);
        }
    }

    public function getDay() {
        return $this->date->format('d');
    }
}

$date = new Date('2025-04-08');

echo $date->getDay();


?>