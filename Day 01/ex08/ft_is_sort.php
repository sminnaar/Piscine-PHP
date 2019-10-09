<?php
    function ft_is_sort($tab)
    {
    $check = $tab;
    sort($check);
    $i = 0;
    $not = 0;
    $wrd = count($tab);
    while ($i <= $wrd)
    {
        if ($check[$i] != $tab[$i])
            $not = 1;
        $i++;
    }
    if ($not == 1)
        return (0);
    else
        return (1);
    }
?>