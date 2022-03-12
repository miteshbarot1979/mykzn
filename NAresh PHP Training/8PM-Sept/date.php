<?php 

// finding the elapsed time between two times

function time_elapsed_B($secs){
    $bit = array(
        ' year'        => $secs / 31556926 % 12,
        ' week'        => $secs / 604800 % 52,
        ' day'        => $secs / 86400 % 7,
        ' hour'        => $secs / 3600 % 24,
        ' minute'    => $secs / 60 % 60,
        ' second'    => $secs % 60
        );
       
    foreach($bit as $k => $v){
        if($v > 1)$ret[] = $v . $k . 's';
        if($v == 1)$ret[] = $v . $k;
        }
    array_splice($ret, count($ret)-1, 0, 'and');
    $ret[] = 'ago.';
   
    return join(' ', $ret);
}
$nowtime = time();
$oldtime = 163491310;


echo time_elapsed_B($nowtime-$oldtime);


//$posted = "2021-10-22 8:00 PM";

//$current = date("Y-m-d h:i:s A");

//date_default_timezone_set("Asia/Kolkata");

//echo time(); // 1634914410

//$dob = "1987-07-22";


//echo strtotime($dob);

//echo date("l, Y-m-d",strtotime("hello"));


//1987-07-25


//echo date("l, Y-M-d h:i:s A",1612957879);


//1612957879




//date_default_timezone_set("America/New_York");
//date_default_timezone_set("Europe/London");
//date_default_timezone_set("Pacific/Auckland");
//date_default_timezone_set("Australia/Sydney");
//echo date("l dS M Y, h:i:s A");
//echo date_default_timezone_get();
//echo date("l dS M Y");
// Thursady 21 Oct 2021

?>
