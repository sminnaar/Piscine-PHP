<?php
    if (($_SERVER['PHP_AUTH_USER'] !== "zaz") || ($_SERVER['PHP_AUTH_PW']) !== "Ilovemylittleponey")
    {
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
        echo "<html><body>That area is accesable for menbers only</body><html>\n";
    }
    else
    {
        file_get_contents("../img/42.png");
        echo "<html><body>Welcome Zaz<br />\n<img src='data:image/png;base64,".base64_encode(file_get_contents("../img/42.png"))."'>\n</body></html>\n"; 
    }
?>