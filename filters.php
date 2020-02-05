<?php
    // Check for posted data (also works with INPUT_GET when method is GET)
/*
    if(filter_has_var(INPUT_POST,'data')){
        echo 'Data Found';
    }else{
        echo 'No Data';
    }

    if(filter_has_var(INPUT_POST,'data')){
        $email = $_POST['data'];

        // With FILTER_SANITIZE Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else{
            echo 'Email is NOT valid';
        }
    }

        #FILTER_VALIDATE_BOOLEAN
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL

        $var = 'gggjgjj';

        if(filter_var($var, FILTER_VALIDATE_INT)){
            echo $var. ' is a number';
        }else{
            echo $var. ' is NOT a number';
        }

        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_SANITIZE_STRING
        #FILTER_SANITIZE_URL
   
    // sanitize a integer
    $var = '33k2jj445d999k4ll32j44j';
    var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

    // prevent people from for example inserting scrip tags into a form that outputs something on the page
    $var = '<script>alert(1)</script>';
    // if you run it without SANITIZE it run the script and give you a alert
    var_dump(filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS));
    // output will be the script as a string not executing
  
    $filters = [
        "data" => FILTER_VALIDATE_EMAIL, 
        "data2" => [
            "filter" => FILTER_VALIDATE_INT, "options" => [
                "min_range" => 1, 
                "max_range" => 100
                ]
            ]
        ];
    // used for data from input field
    print_r(filter_input_array(INPUT_POST,$filters));
*/
   $arr = [
       "name" => "daniel schmidt",
       "age" => "42",
       "email" => "daniel@gmail.com"];
       
    $filters = [
        "name" => [
            // with FILTER_CALLBACK you can apply a function on  the field for example ucwords make every first letter in the words uppercase
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ],
        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "options" => [
                "min_range" => 1, 
                "max_range" => 120
            ]
        ],
        "email" => FILTER_VALIDATE_EMAIL
    ];
    
    print_r(filter_var_array($arr, $filters))

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>