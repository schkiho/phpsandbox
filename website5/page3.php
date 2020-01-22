<?php
    $user = ['name' => 'Daniel', 'email' => 'test@test.com', 'age' => 42];

    $user = serialize($user);

    setcookie('user', $user, time() +(86400 * 30));

    $user = unserialize($_COOKIE['user']);

    echo $user['name'];