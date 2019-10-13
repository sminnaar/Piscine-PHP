<?php
    if ($_GET["action"] == "set")
    {
        setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
        echo "Your Cookie has been set\n";
    }
    if ($_GET["action"] == "get")
    {
        if ((strlen($_COOKIE[$_GET["name"]]) > 0))
        {
            echo "Your Cookie name: ".$_COOKIE[$_GET["name"]];
        }
        else
            echo "Cookie was deleted";
    }
    if ($_GET["action"] == "del")
    {
        setcookie($_GET["name"], "", time() + 3600, "/");
        echo ("Your Cookie has been deleted\n");
    }
?>