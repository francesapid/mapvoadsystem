<?php
    session_start();
    
    if(isset($_GET['logout'])) {
        session_destroy();
        header('LOCATION: login.php');
    }
    else {
        header('LOCATION: login.php');
    }