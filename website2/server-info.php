<?php
    # $_SERVER SUPERGLOBAL
    // all to find at php.net/manual

    // Create Server Array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
    ];

    // echo $server['Server Software'];
    // print_r($server)

    // Create Client Array
    $client = [
       'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
       'Client IP' => $_SERVER['REMOTE_ADDR'],
       'Remote Port' => $_SERVER['REMOTE_PORT'],
    ];

    // print_r($client)
?>