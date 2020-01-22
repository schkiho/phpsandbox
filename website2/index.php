<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <hr class="m-4">
        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
                <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>