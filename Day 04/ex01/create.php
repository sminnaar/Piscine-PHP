<?php
    if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['oldpw'] === hash("sha512", ($oldpw = $_POST['oldpw'])))
    {
        echo "ERROR\n";
        echo "Please enter valid Username and Password\n";
        print_r($user_array);
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
                if ($usr_pass_pair['login'] === $login) //&& $usr_pass_pair['passwd'] === $hpass )
                {
                    echo "ERROR\n";
                    echo "User already exists\n";
                    print_r($user_array);
                    return ;
                }
            }
        }
        $user_array[] = $usr;
        file_put_contents("../private/passwd", serialize($user_array));
        echo "OK\n";
    }
    print_r($user_array);
?>