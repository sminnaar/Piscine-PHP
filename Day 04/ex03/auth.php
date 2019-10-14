<?php
    function auth($login, $passwd)
    {
        $usr['login'] = $login;
        $usr['passwd'] = hash("sha512", $passwd);

        if (file_exists("../private"))
        {
            $i = 0;
            $usr_array = unserialize(file_get_contents("../private/passwd"));
            foreach ($usr_array as $usr_pw_pair)
            {
                if ($usr_array[$i]['login'] === $usr['login'] && $usr_array[$i]['passwd'] === $usr['passwd'])
                {
                    echo("Welcome ".$usr['login']);
                    return TRUE;
                }
                $i++;
            }

        }
        else
        {
            echo "Intialize passwd";
            return FALSE;
        }
    }
?>