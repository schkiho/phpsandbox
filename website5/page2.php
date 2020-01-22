<?php
    // Update Cookie
    setcookie('username', 'Frank', time()+(86400 *30));

    // Delete Cookie for this set the exp time into the past
    setcookie('username', 'Frank', time() -3600);

    // Check if cookies saved
    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE).' cookies saved<br>';
    }else {
        echo 'No cookies saved<br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set<br>';
    }else {
        echo 'User is not set';
    }