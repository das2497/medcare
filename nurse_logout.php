<?php

session_start();

if (isset($_SESSION["NR"])) {

    $_SESSION["NR"] = null;
    session_destroy();
    echo "success";
    
}

?>