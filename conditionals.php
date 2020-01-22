<?php
    #Conditionals

    /*
        == match the value
        === match value and datatype
        <
        >
        <=
        >=
        !=
        !==
    */

    /*
    $num = 4;

    if($num >= 5){
        echo '5 passed';
    }elseif($num < 10){
        echo 'is smaller than 10';
    }else {
        echo 'did not pass';
    }
    */

    # Nesting if()
    /*
    $num = 6;

    if($num >= 5){
        if($num < 10){
            echo "$num passed";
        }
    }
    */

    /*
        Logical Operator to reduce usage of if statements and nesting

        and &&
        or ||
        xor  (explicit or only one condition has to be true)
    */

    /*
    $num = 4;

    if($num > 4 xor $num < 10) {
        echo "$num passed";
    }
    */

    # Switch

    $favColor = 'black';

    switch($favColor){
        case 'red':
            echo 'Your favorit color is red';
        break;
        case 'blue':
            echo 'Your favorit color is blue';
        break;
        case 'green':
            echo 'Your favorit color is green';
        break;
        default:
            echo 'Your favorit color is something else';        
    }
?>