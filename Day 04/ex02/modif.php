<?php
    if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'])
    {
        echo "ERROR\n";
        if (!$_POST['login'])
            echo "Enter Username\n";
        if (!$_POST['oldpw'])
            echo "Enter Old Password\n";
        if (!$_POST['newpw'])
            echo "Enter New Password\n";
        print_r($user_array);
        return ;
    }
    else
    {
        $usr['login'] = $login = $_POST['login'];
        $usr['oldpw'] = $hpassold = hash("sha512", ($passwd = $_POST['oldpw']));
        $usr['newpw'] = $hpassnew = hash("sha512", ($passwd = $_POST['newpw']));

        if (file_exists("../private/passwd") === FALSE)
        {
            echo "ERROR\n";
            echo "Create an account first\n";
            print_r($user_array);
            return ;            
        }
        $user_array = unserialize(file_get_contents("../private/passwd"));

        $i = 0;
        if ($user_array)
        {
            foreach ($user_array as $usr_pass_pair)
            {
                if ($usr_pass_pair['login'] === $login && $usr_pass_pair['passwd'] === $usr['oldpw'])
                {
                    $user_array[$i]['passwd'] = $usr['newpw'];
                    file_put_contents("../private/passwd", serialize($user_array));
                    echo "OK\n";
                    echo "Password Updated\n";
                    print_r($user_array);
                    return ;
                }
                $i++;
            }
        }
        echo "ERROR\n";
    }
    print_r($user_array);
?>