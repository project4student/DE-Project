<?php
    session_start();
    setcookie('login','',time()-3600);
    session_unset();
    session_destroy();

    header("location:/DE-Project-main/index.php");
?>