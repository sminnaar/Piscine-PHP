#!/usr/bin/php
<?php
    function    my_sort($x, $y)
    {
        $i = 0;
        $a = strtolower($x);
        $b = strtolower($y);
        $order = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        while (($i < strlen($x)) || ($))
    }
    $i = 0;
    if ($argc == 1)
        exit;
    
    $unsorted = join_args($argv, $argc);
    $unsorted = trim_string($unsorted);
    $out = explode(" ", $in);
    // unset($out[0]);
    usort($out, "my_sort");
    while ($out[$i] != NULL)
    {
        echo($out[$i++]);
        echo "\n";
    }
?>