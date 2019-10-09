#!/usr/bin/php
<?php
    $i = 0;
    if ($argc == 1)
        exit;
    $in = implode(" ", $argv);
    $out = explode(" ", $in);
    unset($out[0]);
    natsort($out);
    while ($out[$i] != NULL)
    {
        echo($out[$i++]);
        echo "\n";
    }
?>