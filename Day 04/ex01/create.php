<?php
    if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['passwd'])
    {
        echo "ERROR\n";
        echo "Please enter valid Username and Password\n";
        return ;
    }
    else
    {
        $usr['login'] = $login = $_POST['login'];
        $usr['passwd'] = $hpass = hash("sha512", ($passwd = $_POST['passwd']));

        if (!file_exists("../private"))
            mkdir("../private");
        if (file_exists("../private/passwd"))
            $user_array = unserialize(file_get_contents("../private/passwd"));
        if ($user_array)
        {
            foreach ($user_array as $usr_pass_pair)
            {
                if ($usr_pass_pair['login'] === $login)
                {
                    echo "ERROR\n";
                    echo "User already exists\n";
                    return ;
                }
            }
        }
        $user_array[] = $usr;
        file_put_contents("../private/passwd", serialize($user_array));
        echo "OK\n";
    }
?>