<?php
    # substring()
    // Returns a portion of a string

    // $output = substr('Hello', 1, 3);
    // first param is the string second the start index third the end index
    // $output = substr('Hello', -4, -1);
    // for reverse use negative numbers but than first number is stop index second is start index
    // echo $output;

    #strlen()
    // Returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    // Find the position of the first occurence of a substring

    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos()
    // Find the position of the last occurence of a substring

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    // Strips whitespace

    // $text = 'Hello World        ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed)

    # strtoupper()
    // Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;
    
    # strtolower()
    // Makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    // Capitalize every first letter of each word

    // $output = ucwords('hello this is my string');
    // echo $output;

    # str_replace()
    // Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World','Everyone', $text);
    // first param is the search string, second the replacement, third the variable with the string
    // echo $output;

    #is_string()
    // Check if String

    // $val = 'Hello';
    // $output = is_string($val);
    // echo $output;

    // $values = [true,false,null,'abc',22,'22',22.4,'22.4','',' ',0,'0'];

    // foreach($values as $value){
    //     // using it with looping over a array it outputs only the once which are a string
    //     if(is_string($value)){
    //        echo "{$value} is a string<br>"; 
    //     }
    // }

    #gzcompress()
    // Compress a String

    $string = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet";

    $compressed = gzcompress($string);
    echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
?>