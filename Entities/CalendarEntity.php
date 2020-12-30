<?php

class CalenderEntity {
    
   public $id;
   public $db_date;
   public $year;
   public $month;
   public $day;
   public $week;
   public $day_name;
   public $month_name;
   public $event;

function _construct ($id, $db_date, $year,$month,$day,$week,$day_name,$month_name,$event){
        $this->id =$id;
        $this->db_date =$db_date;
        $this->year =$year;
        $this->month =$month;
        $this->day =$day;
        $this->week =$week;
        $this->day_name =$day_name;
        $this->month_name =$month_name;
        $this->event =$event;
    
    }
}

?>
