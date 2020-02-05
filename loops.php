<?php
    #Loops - execute code set number of times

    /*
      For
      While
      Do..While
      Foreach  
    */

    #For Loop mostly used when you know number of times to execute
    #@params - init, condition, increment

    /*
    for($i = 0;$i <= 10;$i++){
        echo 'Number '.$i;
        echo '<br>';
    }
    */

    #While Loop mostly used if you don't know number of times execute
    #@params - condition

    /*
    $i = 0;
    while($i <= 10){
        echo $i;
        echo '<br>';
        $i++; 
    }
    */

    #Do...While Loops
    #@params - condition

    $i = 0;
    do{
        echo 'Number '.$i;
        echo '<br>';
        $i++; 
    }
    while($i <= 10);

    #Foreach Loop is used for Arrays

    /*
    // normal Array
    $people = ['Brad','Jose','Otto'];

    foreach($people as $person){
        echo $person;
        echo '<br>';
    }
    */

    // Associative Array
    $people = ['Brad' => 'brad@gmail.com','Jose' => 'jose@gmx.com','Otto' => 'otto@yahoo.de'];

    foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br>';
    }
?>