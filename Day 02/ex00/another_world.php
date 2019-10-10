#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $out = preg_split('/\s+/', $argv[1]);
        $out = implode(" ", $out);
        $out = trim($out);
        echo($out);
        echo "\n";
    }
?>