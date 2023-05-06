<?php

    // ----------------------Open Connetion--------------------------------- 
    session_start();
    // ----------------------Open Connetion--------------------------------- 

    session_unset();
    session_destroy();

    header('location:login.php');

    

?>