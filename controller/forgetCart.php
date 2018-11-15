<?php
    session_start();
    if(!isset($_SESSION['order'])) {
        header("Location: ../index.php");
    }
    else
    {
        header("Location: index.php");
        echo "Session is set";
    }

    if(isset($_GET['logout']))
    {
        echo "Session will be destroyed";
        session_destroy();
        unset($_SESSION['order']);
        header("Location: ../index.php");
    }
?>