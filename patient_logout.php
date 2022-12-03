<?php

session_start();

if (isset($_SESSION["PT"])) {

    $_SESSION["PT"] = null;
    session_destroy();
    echo "success";
    
}

?>