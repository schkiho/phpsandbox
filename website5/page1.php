<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600); // exp in 1 hour
        // first param is name of the cookie second is value and third is expiration
    
        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Cookies</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER[PHP_SELF]; ?>">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>