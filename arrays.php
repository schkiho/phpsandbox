<?php
    # Array - Variable that holds multiple values
    /*
        - Indexed
        - Associative   (inhaltsorientiert/inhaltsadressiert)
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin','Bob','Hans');
    $numbers = array(12,13,14);
    // short version
    $cars = ['Honda','BMW','Audi'];
    //add a value to an array
    $cars[3] = 'Trabant';
    // if not noing the indexes
    $cars[] = 'Lada';
    // access a single value via index
    //echo $cars[4];

    /*
    # some important array functions
    // to check how much elements in the array
    echo count($cars);
    // print out the array good for debuging
    print_r($cars);
    //show the data types
    var_dump($cars);
    */

    //Associative arrays
    // to create key and value for array also possible the opposite way
    $people = array('Daniel' => 42,'Jose' => 32,'Sara' => 25);
    // to access a single value
    // echo $people['Daniel'];
    // add to associative array
    $people['Jill'] = 29;
    //echo $people['Jill'];

    // Multi-dimentional arrays
    $cars = array(
        array('Honda',20,10),
        array('BMW',30,20),
        array('AUDI',23,12)
    );

    // access single value in multi array
    echo $cars[1][1];

?>