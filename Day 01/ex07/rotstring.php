#!/usr/bin/php
<?php
    $i = 1;
    if ($argc == 1)
        exit;
    $out = preg_split('/\s+/', $argv[1]);
    while ($out[$i] != NULL)
    {
        echo($out[$i++]);
        echo(" ");
    }
    echo("$out[0]\n");
?>