<?php

session_start();

require 'connection.php';

if (isset($_SESSION["DT"])) {


?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DOCTOR | <?= $_SESSION["DT"]["name"]; ?></title>
        <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <div class="col-12">

                    <!-- header -->

                    <div class="row  border-bottom border-4 border-primary shadow-lg  d-block d-lg-none bg-dark">

                        <div class="col-12 col-lg-2 text-center text-lg-start ">
                            <img alt="NAITA logo" src="assets/Untitled (800 × 800 px).svg" width="60px" style="border-radius: 100%;">
                            <h4 class="d-block d-lg-inline mt-2 mt-lg-0 text-white">DOCTOR | <?= $_SESSION["DT"]["name"]; ?></h4>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-7 pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end navbar-dark">
                                <div class="container-fluid">
                                    <!-- <a class="navbar-brand d-block d-lg-none text-white" href="#">Menu</a> -->
                                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        Menu<span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#">Appoinments</a>
                                            </li>
                                            <hr class="border border-bottom border-4 mt-2">
                                            <li>
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Help</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" onclick="doctor_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>

                    </div>

                    <!-- header -->

                    <!-- body -->

                    <div class="row ">
                        <div class="col-lg-2 col-12 border-end border-primary  border-4 shadow-lg position-fixed " style="background-color: #0e0e23;">

                            <div class="row d-none d-lg-block d-flex vh-100 px-2">
                                <div class="col-12 text-center mt-3">
                                    <img alt="NAITA logo" src="assets/Untitled (800 × 800 px).svg" width="60px" style="border-radius: 100%;">
                                    <h4 class="d-block  mt-2 mt-lg-0 text-white text-decoration-underline">DOCTOR | <?= $_SESSION["DT"]["name"]; ?></h4>
                                </div>
                                <div class="col-12 text-center g-4 my-4">
                                    <span class="fs-5 fw-normal text-white fw-bold">DOCTOR ACCOUNT</span>
                                </div>
                                <hr class="border-bottom border-white border-4">
                                <hr>
                                <div class="col-12 text-center my-2 mm">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Appoinments</a>
                                </div>
                                <div class="col-12 text-center vh-100 " style="padding-top: 80%;">
                                    <div class="row">
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">Help</a>
                                        </div>
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">About Us</a>
                                        </div>
                                        <div class="col-12 text-center mm align-text-bottom">
                                            <a class="nav-link fw-bold  text-warning" onclick="doctor_logout();" href="#">log out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" offset-lg-2 col-lg-10">
                            <div class="row p-4 d-flex vh-100">

                                <!-- Dashboard -->

                                <div class="col-12  ">

                                    <div class="row" id="dappoimnts">
                                        <div class="col-10 offset-1 col-lg-8 offset-lg-2 shadow mt-2">
                                            <?php
                                            $dcrs = Database::search("SELECT *
        FROM patient_channels
        INNER JOIN patient ON patient_channels.patient_id=patient.id
        INNER JOIN d_chanel_time ON patient_channels.chnl_id=d_chanel_time.chnl_id
        WHERE d_chanel_time.doc_id='1' AND 
        DAY(d_chanel_time.date_time) < CURDATE() AND 
        patient_channels.paid='1' AND 
        patient_channels.`status`='1';");

                                            $dcn = $dcrs->num_rows;

                                            ?>
                                            <h4 class="text-center">Today My Appoinments</h4>
                                            <table class="table table-responsive table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Patient Registration No</th>
                                                        <th>Patient Name</th>
                                                        <th>Open</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    for ($i = 0; $i < $dcn; $i++) {
                                                        $dcd = $dcrs->fetch_assoc();
                                                    ?>
                                                        <tr class="table-info">
                                                            <td><?= $dcd["preg_no"]; ?></td>
                                                            <td><?= $dcd["name"]; ?></td>
                                                            <td>
                                                                <button id="pchecked" class="btn btn-outline-primary fw-bold" onclick="checkedPatient('<?= $dcd['preg_no']; ?>');">Open Appoinment</button>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <!-- Dashboard -->

                            </div>

                        </div>



                    </div>
                </div>

            </div>

            <!-- body -->

        </div>

        </div>
        </div>


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
    </body>

    </html>


<?php

} else {
?>
    <script>
        window.location = "index.php"
    </script>
<?php
}
