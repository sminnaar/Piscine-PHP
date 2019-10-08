#!/usr/bin/php
<?php
if ($argc == 2)
{
    $out = preg_replace('/\s+/', ' ', trim($argv[1]));
    echo("$out\n");
}
else
    exit;
?>