<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(!function_exists('get_past_date')){
    function get_past_date($startDate,$monthIncrement=0){
        $startingTimeStamp = $startDate->getTimestamp();
        $monthString = date('Y-m', $startingTimeStamp);
        $safeDateString = "first day of $monthString";
        $incrementedDateString = "$safeDateString $monthIncrement month";
        $newTimeStamp = strtotime($incrementedDateString);
        $newDate = DateTime::createFromFormat('U', $newTimeStamp);
        return $newDate;
    }
    
}
if(!function_exists('get_date_difference')){
    function get_date_difference($start_str,$end_str){
             $start  = strtotime($start_str);
             $end    = strtotime($end_str); 
             $start_d  = date('Y-m-d H:i:s',$start);
             $end_d    = date('Y-m-d H:i:s',$end); 


             $d_start    = new DateTime($start_d); 
             $d_end    = new DateTime($end_d); 
             $diff=$d_start->diff($d_end);
             return $diff;
    }
}
?>
