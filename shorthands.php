<?php
    
    # Ternary & Shorthand Syntax
    $loggedIn = false;
    $arr = [1,2,3,4,5,6,7,8,9];

    // oldschool way long version
    // if($loggedIn){
    //     echo 'You are logged in';
    // }else{
    //     echo 'You are Not logged in';
    // }

    // echo ($loggedIn) ? 'You are logged in' : 'You are Not logged in';

    // asign variables based on a condition
    // $isRegistered = ($loggedIn == true) ? true : false;
    // echo $isRegistered;

    // $age = 9;
    // $score = 5;
    
    // nested statement
    // echo 'Your score is: '. ($score > 10 ? ($age > 10 ? 'Average' : 'Exeptional'): ($age >10 ? 'Horrible' : 'Average'));


?>

<!-- Oldschool way -->
<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php }else { ?>
        <h1>Please Register</h1>
    <?php } ?>        
</div>

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Please Register</h1>     
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>        
    <?php endforeach; ?>
</div>

<div>
    <?php for($i = 0;$i < 10;$i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>    
</div>

