<?php

session_start();

require "connection.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DOCTOR <?= $_SESSION["DT"]["name"]; ?></title>
    <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row ">

            <div class="col-12 col-lg-4 offset-lg-7 p-2 shadow rounded">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold">Appoinment No.</p>
                            </div>
                            <div class="col-6">
                                <p>444444</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold">Patient Id</p>
                            </div>
                            <div class="col-6">
                                <p>555555</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="fw-bold">Datw</p>
                            </div>
                            <div class="col-6">
                                <p>2022-12-30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>