<?php

session_start();

require 'connection.php';

if (isset($_SESSION["AD"])) {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>ADMIN <?= $_SESSION["AD"]["username"]; ?></title>
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
                            <h4 class="d-block d-lg-inline mt-2 mt-lg-0 text-white">ADMIN <?= $_SESSION["AD"]["username"]; ?></h4>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-7 pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end navbar-dark">
                                <div class="container-fluid">
                                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        Menu<span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                            <li onclick="THdash();">
                                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Doctor</span> </a>
                                            </li>
                                            <li onclick="THprofile();">
                                                <a href="#" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Receptionist</span></a>
                                            </li>
                                            <li onclick="THstudents();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Nurse</span></a>
                                            </li>
                                            <li onclick="THReports();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Pharmacist</span></a>
                                            </li>
                                            <hr class="border border-bottom border-4 mt-2">
                                            <li>
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Help</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" onclick="admin_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                                    <h4 class="d-block  mt-2 mt-lg-0 text-white text-decoration-underline">ADMIN <?= $_SESSION["AD"]["username"]; ?></h4>
                                </div>
                                <div class="col-12 text-center g-4 my-4">
                                    <span class="fs-5 fw-normal text-white fw-bold">ADMIN ACCOUNT</span>
                                </div>
                                <hr class="border-bottom border-white border-4">
                                <hr>
                                <div class="col-12 text-center my-2 mm" onclick="THdash();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Doctor</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="THprofile();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Receptionist</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="THstudents();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Nurse</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="THReports();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Pharmacist</a>
                                </div>
                                <div class="col-12 text-center vh-100 " style="padding-top: 100%;">
                                    <div class="row">
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">Help</a>
                                        </div>
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">About Us</a>
                                        </div>
                                        <div class="col-12 text-center mm align-text-bottom">
                                            <a class="nav-link fw-bold  text-warning" onclick="admin_logout();" href="#">log out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" offset-lg-2 col-lg-10">
                            <div class="row p-4 d-flex vh-100">

                                <!-- Dashboard -->

                                <div class="col-12  ">

                                    <div class="row ">

                                        <!-- Doctor -->

                                        <div class="col-12" style="display: block;" id="THdash">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h4 class="text-center text-uppercase fw-bold ">Doctor</h4>
                                                </div>
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 d-grid">
                                                    <a href="adminadd_doc.php" target="_blank" class="btn btn-outline-primary fw-bold">Add Doctor</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="w-100 table-responsive table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Username</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">Speciality</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsdoc = Database::search("SELECT *
                                                                             FROM doctor
                                                                             INNER JOIN specialies ON doctor.specialty=specialies.id;");

                                                            for ($i = 0; $i < $rsdoc->num_rows; $i++) {
                                                                $rddoc = $rsdoc->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $rddoc["uname"]; ?></td>
                                                                    <td class="text-center"><?= $rddoc["name"]; ?></td>
                                                                    <td class="text-center"><?= $rddoc["speciality"]; ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Doctor -->

                                        <!-- Receptionist -->

                                        <div class="col-12" style="display: none;" id="THprofile">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h4 class="text-center text-uppercase fw-bold ">Receptionist</h4>
                                                </div>
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 d-grid">
                                                    <a href="adminadd_Receptionist.php" target="_blank" class="btn btn-outline-primary fw-bold">Add Receptionist</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="w-100 table-responsive table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Username</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">NIC</th>
                                                                <th class="text-center">Contact</th>
                                                                <th class="text-center">Gender</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsrecp = Database::search("SELECT *
                                                            FROM receptionist
                                                            INNER JOIN gender ON receptionist.gender=gender.id;");

                                                            for ($i = 0; $i < $rsrecp->num_rows; $i++) {
                                                                $rdrecp = $rsrecp->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $rdrecp["uname"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["name"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["nic"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["contact"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["gender_type"]; ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Receptionist -->

                                        <!-- Nurse-->

                                        <div class="col-12" style="display: none;" id="THlessons">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h4 class="text-center text-uppercase fw-bold ">Nurse</h4>
                                                </div>
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 d-grid">
                                                    <a href="adminadd_Nurse.php" target="_blank" class="btn btn-outline-primary fw-bold">Add Nurse</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="w-100 table-responsive table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Username</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">NIC</th>
                                                                <th class="text-center">Contact</th>
                                                                <th class="text-center">Gender</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsrecp = Database::search("SELECT *
                                                            FROM receptionist
                                                            INNER JOIN gender ON receptionist.gender=gender.id;");

                                                            for ($i = 0; $i < $rsrecp->num_rows; $i++) {
                                                                $rdrecp = $rsrecp->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $rdrecp["uname"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["name"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["nic"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["contact"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["gender_type"]; ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Nurse-->

                                        <!-- Pharmacist -->

                                        <div class="col-12" style="display: none;" id="THassignments">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h4 class="text-center text-uppercase fw-bold ">Pharmacist</h4>
                                                </div>
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 d-grid">
                                                    <a href="adminadd_Pharmacist.php" target="_blank" class="btn btn-outline-primary fw-bold">Add Pharmacist</a>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="w-100 table-responsive table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Username</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">NIC</th>
                                                                <th class="text-center">Contact</th>
                                                                <th class="text-center">Gender</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsrecp = Database::search("SELECT *
                                                            FROM receptionist
                                                            INNER JOIN gender ON receptionist.gender=gender.id;");

                                                            for ($i = 0; $i < $rsrecp->num_rows; $i++) {
                                                                $rdrecp = $rsrecp->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $rdrecp["uname"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["name"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["nic"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["contact"]; ?></td>
                                                                    <td class="text-center"><?= $rdrecp["gender_type"]; ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Pharmacist -->

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
