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

    public function getMonth($lang = null) {
        $month = $this->date->format('m');

        if($lang === 'ua') {
            $months = [
                '01' => 'Січень', '02' => 'Лютий', '03' => 'Березень', '04' => 'Квітень', '05' => 'Травень', '06' => 'Червень', '07' => 'Липень', '08' => 'Серпень', '09' => 'Вересень', '10' => 'Жовтень', '11' => 'Листопад', '12' => 'Грудень', 
            ];
            return $months[$month];
        } elseif($lang === 'en') {
            $months = [
                '01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'Jule', '08' => 'August', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December', 
            ];
            return $months[$month];
        }
        return $month;
    }

    public function getYear() {
        return $this->date->format('Y');
    }

}

$date = new Date('2025-04-08');

echo $date->getDay();
echo $date->getMonth('en');
echo $date->getYear('en');


?>