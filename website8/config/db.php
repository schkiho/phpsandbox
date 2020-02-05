<?php
  // Create Connection

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Check Connection
  if(mysqli_connect_errno()){
    // Connection Failed
    echo 'Failed to connect to MySQL '. msqli_connect_errno();
  }