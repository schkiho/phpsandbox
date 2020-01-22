<?php
    #Function - Block of code that can be repeatedly called
    
    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */

    /*
    // Simple Function
    // Create Simple Function
    function simpleFunction(){
        echo 'Hello World';
    }

    // Run Simple Function
    simpleFunction();
    */

    /*
    // Function with Params
    function sayHello($name = 'World'){ // setting 'World' as default param
        echo "Hello $name<br>";
    }

    sayHello('Otto');
    sayHello('Bob');
    sayHello();
    */

    /*
    // Function returns a value
    function addNumbers($num1,$num2){
        return $num1 + $num2;
    }

    echo addNumbers(2,3)
    */

    // passing Arguments by Reference
    $myNum = 10;

    function addFive($num){ // argument passed by value
        $num += 5; // short way of $num = $num +5

    }

    function addTen(&$num){ // argument passed by reference
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>"; // don't manipulate the value

    addTen($myNum);

    echo "Value: $myNum<br>"; // manipulate the value
?>