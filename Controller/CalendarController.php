<?php
require ("Model/ CalendarModel.php");

// Contains all non database- related functions
class CalendarController 
{
    function CreateCalendarDropdownList()
    {
        $calendarModel = new CalendarModel();
        $result = "<form action = '' method = 'post' width = ''200px'
                    Please select a month:
                    <select name ='months'>
                        <select name = 'types' >
                        <option value = '%' >All</option>
                        " .$this->CreateOptionValues($calendarModel->GetCalendarMonths()).
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) 
    {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateCalendarTables($months)
    {
        $CalendarModel = new CalendarModel();
        $calendarArray = $calendarModel->GetCalendarMonths($months);
        $result = "";
        
        //Generate a CalendarTable for each MonthEntity in array
        foreach ($calendarArray as $key => $months) 
        {
            $result = $result .
                    "<table class = 'coffeeTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$coffee->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$coffee->name</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$coffee->type</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$coffee->price</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$coffee->roast</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$coffee->country</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$coffee->review</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
        
    }

}

?>