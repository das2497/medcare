<?php

session_start();

if (isset($_SESSION["RP"])) {

    $_SESSION["RP"] = null;
    session_destroy();
    echo "success";
    
}

?>