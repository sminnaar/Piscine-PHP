#!/usr/bin/php
<?php
    function ft_split($input)
    {
        $tmp = preg_split('/\s+/', $input);
        $ret = array_filter($tmp, 'strlen');
        sort($ret);
        return($ret);
    }
?>