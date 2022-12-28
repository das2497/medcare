<?php

session_start();

if (isset($_SESSION["PH"])) {

    $_SESSION["PH"] = null;
    session_destroy();
    echo "success";
    
}

?>