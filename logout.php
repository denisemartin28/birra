<?php  

    session_start();
    session_destroy();
    // Borrar la cookie
    setcookie('email', '', -1);
    header('location: home.php');
    exit;
?>
