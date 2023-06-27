<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To register Page
        header("Location: register.php");
    }
?>