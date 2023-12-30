<?php

    session_start();
    echo '<hr />';

    $user_authenticated = false;
    $user_id = null;
    $user_type_id = null;
    $type = array(1 => 'admin', 2 => 'user');
    $app_users = array(
        array('id' => 1, 'email' => 'adm@gmail.com', 'password' => '12345', 'type_id' => 1),
        array('id' => 2, 'email' => 'test@gmail.com', 'password' => '123abc', 'type_id' => 1),
        array('id' => 3, 'email' => 'jose@gmail.com', 'password' => 'jose1', 'type_id' => 2),
        array('id' => 4, 'email' => 'maria@gmail.com', 'password' => 'maria2', 'type_id' => 2),
    );

    foreach ($app_users as $user) {
        if ($user['email'] == $_REQUEST['email'] && $user['password'] == $_REQUEST['password']) {
            $user_authenticated = true;
            $user_id = $user['id'];
            $user_type_id = $user['type_id'];
        }        
    }

    if($user_authenticated) {
        echo 'User exists';
        $_SESSION['authenticated'] = 'YES';
        $_SESSION['id'] = $user_id;
        $_SESSION['type_id'] = $user_type_id;
        header('Location: home.php');
    } else {
        $_SESSION['authenticated'] = 'NO';
        header('Location: index.php?login=error');
    }

?>