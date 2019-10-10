#!/usr/bin/php
<?php
    $i = 0;
    if ($argc == 1)
        exit;
    $in = implode(" ", $argv);
    $out = preg_split('/\s+/', $in);
    unset($out[0]);
    sort($out);
    while ($out[$i] != NULL)
    {
        echo($out[$i++]);
        echo "\n";
    }
?>