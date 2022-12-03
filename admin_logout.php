<?php

session_start();

if (isset($_SESSION["AD"])) {

    $_SESSION["AD"] = null;
    session_destroy();
    echo "success";
    
}

?>