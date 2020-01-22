<?php
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('y'); // Year use capital Y for full displayed year
    // echo date('l'); // Day of the week

    // echo date('Y/l/d/m') // in between you can use what ever you want for output
    
    // echo date('h'); // Hour
    // echo date('i'); // Minutes
    // echo date('s'); // Seconds
    // echo date('a'); // AM or PM

    /*
    // Set Time Zone
    date_default_timezone_set('Asia/Hong_Kong'); 

    echo date('h:i:sa')
    */

    // make date and times

    /*
    Unix timestamp is a long integer containing the number of seconds between the unix epoch (January 1 1970 00:00:00 GMT) and the time specified
    */
    $timestamp = mktime(10,14,54,9,10,1981); // (hour,min,sec,month,day,year)

    // echo $timestamp;

    // format it to a actual date
    // echo date ('m/d/Y h:i:sa',$timestamp);

    // set a string to time
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');

    // echo $timestamp2;

    echo date ('d/m/Y h:i:sa',$timestamp5);
?>