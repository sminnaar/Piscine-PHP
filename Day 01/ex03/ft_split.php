#!/usr/bin/php
<?php
    function ft_split($input)
    {
        $tmp = explode(" ", $input);
        $ret = array_filter($tmp, 'strlen');
        sort($ret);
        return($ret);
    }
?>