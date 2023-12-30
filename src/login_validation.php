<?php

    session_start();
    echo '<hr />';

    $user_authenticated = false;
    $app_users = array(
        array('id' => 1, 'email' => 'adm@gmail.com', 'password' => '12345', 'type_id' => 1),
        array('id' => 2, 'email' => 'test@gmail.com', 'password' => '123abc', 'type_id' => 1),
    );

    foreach ($app_users as $user) {
        if ($user['email'] == $_REQUEST['email'] && $user['password'] == $_REQUEST['password']) {
            $user_authenticated = true;
        }        
    }

    if($user_authenticated) {
        echo 'User exists';
        $_SESSION['authenticated'] = 'YES';
        header('Location: home.php');
    } else {
        $_SESSION['authenticated'] = 'NO';
        header('Location: index.php?login=error');
    }

?>