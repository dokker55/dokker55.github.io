<?php
    include_once 'header.php';
    
    echo "<br /><span class='main'>Welcome to friends of Vlad,";  // Добро пожаловать в Сообщество Робина 
    
    if ($loggedin) echo " $user, you are logged in.";

    else           echo ' please sign up and/or log in to join in.';       // Пожалуйста, зарегистрируйтесь

    echo "</span><br /><br /></body></html>";?>

