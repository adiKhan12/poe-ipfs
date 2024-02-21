<?php
    $dbhost = "sql160.main-hosting.eu";
    $dbuser = "u889487780_mgi";
    $dbpass = "DB_PASS";
    $db     = "u889487780_hash";

    $conn   = new mysqli ($dbhost, $dbuser, $dbpass, $db);

    // check connection

    if($conn->connect_error)
        echo "Connection was failed";
    else
        echo "Connection success";

?>
