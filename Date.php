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
    
    public function getWeekDay($lang = null)
    {
        $weekday = $this->date->format('N');  // 1 (понед.) до 7 (воскр.)

        // Если язык задан, возвращаем день недели на нужном языке
        if ($lang === 'ru') {
            $weekdays = [
                1 => 'понедельник', 2 => 'вторник', 3 => 'среда', 4 => 'четверг', 5 => 'пятница', 6 => 'суббота', 7 => 'воскресенье'
            ];
            return $weekdays[$weekday];
        } elseif ($lang === 'en') {
            $weekdays = [
                1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'
            ];
            return $weekdays[$weekday];
        }
        
        return $weekday;
    }

    public function addDay($value)
    {
        $this->date->modify("+$value day");
        return $this;
    }

    public function subDay($value)
    {
        $this->date->modify("-$value day");
        return $this;
    }

    public function addMonth($value)
    {
        $this->date->modify("+$value month");
        return $this;
    }

    public function subMonth($value)
    {
        $this->date->modify("-$value month");
        return $this;
    }

    public function addYear($value)
    {
        $this->date->modify("+$value year");
        return $this;
    }

    public function subYear($value)
    {
        $this->date->modify("-$value year");
        return $this;
    }

    public function format($format)
    {
        return $this->date->format($format);
    }

    public function __toString()
    {
        return $this->date->format('Y-m-d');
    }

}

?>