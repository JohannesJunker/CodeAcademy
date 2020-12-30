<?php
require ("Entities/CaldendarEntity.php");

//Contains database related code for the page.
class CalendarModel 
{
    //Get Calendarmonths from the database and return them in an array
    function GetCalendarMonths()
    {
        require 'Credentials.php';
    
    
        //Open connection to Select database.
        mysql_connect($host, $user, $passwd) or die (mysql_error());
        mysql_select_db($database);
        $result = mysql_query("select distinct months from calendar_dates") or die (mysql_error());
        $months = array();

        //get data from database.
        while ($row = mysql_fetch_array($result))
        {
            array_push($months, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $months;
    }

    // Get Calendar_entity objects from the database an return them in an array.
    function GetCalendarByMonths ($months)
    {
        require 'Credentials.php';
        
        //Open connection to Select database.
        mysql_connect($host, $user, $passwd) or die (mysql_error());
        mysql_select_db($database);
        
     
        $query = "select* from calendar_dates where months like '$months'";
        $result = mysql_query("select distinct months from calendar_dates") or die (mysql_error());
        $Montharray = array();

        //Get data from database;
        while ($row = mysql_fetch_array($result)){
            
            $id = row[1];
            $db_date = row[2];
            $year = row[3];
            $months = row[4];
            $day = row[5];
            $week = row[6];
            $day_name = row[7];
            $month_name = row[8];
            $event = row[9];
            
            
        }
    }
}

?>