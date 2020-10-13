<?php
    session_start();
    session_unset();
    session_destroy();
    header("location:/DE_Project/index.php");
?>