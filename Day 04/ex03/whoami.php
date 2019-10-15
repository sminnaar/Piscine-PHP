<?php
    session_start();
    if ($_SESSION['logged_on_user'] === "" || !($_SESSION['logged_on_user']))
        echo "ERROR\n";
    else
        echo "Current User is: ".$_SESSION['logged_on_user']."\n";
?>