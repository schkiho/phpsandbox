<?php

    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        
        // print_r(htmlentities($_GET['name']));
        // echo $name;
    }    
    // for security reason the function htmlentities takes the power out of the tags so hacker can't submit a script to hack your code
    // it output the script as string so it can't execute
/*
    if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']);
        
        print_r($_POST);
        echo $name;
    }    
    // if you don't want to see it in the browser query use post instead of get
    // more secure to send data

    if(isset($_REQUEST['name'])){
        $name = htmlentities($_REQUEST['name']);
        
        print_r($_REQUEST);
        // echo $name;
    }
    // works with both GET & POST method but shows the date in the query via GET    

    echo $_SERVER['QUERY_STRING'];
    // works only with the GET method
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Vebsite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div class="mb-4" >
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <!-- print it out without form and submit -->
    <ul>
        <li>
            <a href="get_post.php?name=Daniel">Daniel</a>
        </li>
        <li>
            <a href="get_post.php?name=Otto">Otto</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>