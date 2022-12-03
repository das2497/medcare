<?php

session_start();

if (isset($_SESSION["DT"])) {

    $_SESSION["DT"] = null;
    session_destroy();
    echo "success";
    
}

?>