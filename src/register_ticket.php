<?php

    $file = fopen('../../../app_help_desk/ tickets.txt','a');
    $title = str_replace('#', '-', $_POST['title']);
    $category = str_replace('#', '-', $_POST['category']);
    $description = str_replace('#', '-', $_POST['description']);
    $ticket = [$_SESSION['id'], $title, $category, $description];
    $ticket_array = implode('#', $ticket) . PHP_EOL;
    
    fwrite($file, $ticket_array);
    fclose($file);

    header('Location: open.php'); 
?>