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
        return ;
    }
    else
    {
        $usr['login'] = $login = $_POST['login'];
        $hpassold = hash("sha512", ($passwd = $_POST['oldpw']));
        $hpassnew = hash("sha512", ($passwd = $_POST['newpw']));
        if ($hpassnew === $hpassold)
        {
            echo "ERROR\n";
            echo "Passwords can not match\n";
        }
        if (file_exists("../private/passwd") === FALSE)
        {
            echo "ERROR\n";
            echo "Create an account first\n";
            return ;            
        }
        $user_array = unserialize(file_get_contents("../private/passwd"));
        if ($user_array)
        {
            foreach ($user_array as $usr_pass_pair)
            {
                if ($usr_pass_pair['login'] === $login && $usr_pass_pair['passwd'] === $hpassold)
                {
                    $usr_pass_pair['passwd'] = $hpassnew;
                    file_put_contents("../private/passwd", serialize($usr_pass_pair));
                    echo "OK\n";
                    echo "Password Updated\n";
                    return ;
                }
            }
        }
        else
        {
            echo "ERROR\n";
        }
    }
?>