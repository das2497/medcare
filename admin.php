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
                                                    <button class="btn btn-outline-primary fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Doctor</button>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <table class="w-100 table-responsive table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Username</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">Speciality</th>
                                                                <th class="text-center">Update</th>
                                                                <th class="text-center">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsdoc = Database::search("SELECT doctor.id, doctor.uname, doctor.name, doctor.specialty, doctor.password, specialies.speciality
                                                            FROM doctor
                                                            INNER JOIN specialies ON doctor.specialty=specialies.id ORDER BY doctor.id ASC;");

                                                            for ($i = 0; $i < $rsdoc->num_rows; $i++) {
                                                                $rddoc = $rsdoc->fetch_assoc();
                                                            ?>
                                                                <tr class="border">
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rddoc["uname"]; ?>" id="<?= $rddoc['id']; ?>1"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rddoc["name"]; ?>" id="<?= $rddoc['id']; ?>2"></td>
                                                                    <td class="text-center p-1">
                                                                        <select class="form-control" id="<?= $rddoc['id']; ?>3">
                                                                            <option value="0">Select Speciality</option>
                                                                            <?php
                                                                            $rsdocslct = Database::search("SELECT * FROM specialies;");
                                                                            for ($j = 0; $j < $rsdocslct->num_rows; $j++) {
                                                                                $docslctd = $rsdocslct->fetch_assoc();
                                                                                if ($docslctd["id"] == $rddoc["specialty"]) {
                                                                            ?>
                                                                                    <option value="<?= $docslctd["id"]; ?>" selected><?= $docslctd["speciality"]; ?></option>
                                                                                <?php
                                                                                } else {
                                                                                ?>
                                                                                    <option value="<?= $docslctd["id"]; ?>"><?= $docslctd["speciality"]; ?></option>
                                                                            <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-primary w-100 fw-bold " onclick="admin_update_doc('<?= $rddoc['id']; ?>');">Update</button></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-danger w-100 fw-bold " onclick="admin_delete_doc('<?= $rddoc['id']; ?>','<?= $rddoc['uname']; ?>','<?= $rddoc['name']; ?>');">Delete</button></td>
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
                                                                <th class="text-center">Update</th>
                                                                <th class="text-center">Delete</th>
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
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdrecp["uname"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdrecp["name"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdrecp["nic"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdrecp["contact"]; ?>"></td>
                                                                    <td class="text-center p-1">
                                                                        <select class="form-control" id="<?= $rdrecp["res_id"] . $i; ?>">
                                                                            <option value="0">Select Gender</option>
                                                                            <?php
                                                                            $rsrecp = Database::search("SELECT * FROM gender;");
                                                                            for ($i = 0; $i < $rsrecp->num_rows; $i++) {
                                                                                $drecp = $rsrecp->fetch_assoc();
                                                                                if ($drecp["id"] == $rdrecp["gender"]) {
                                                                            ?>
                                                                                    <option value="<?= $rdrecp["id"]; ?>" selected><?= $drecp["gender_type"]; ?></option>
                                                                                <?php
                                                                                } else {
                                                                                ?>
                                                                                    <option value="<?= $rdrecp["id"]; ?>"><?= $drecp["gender_type"]; ?></option>
                                                                            <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-primary w-100 fw-bold " onclick="admin_update_recp('<?= $rdrecp['res_id']; ?>');">Update</button></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-danger w-100 fw-bold ">Delete</button></td>
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
                                                                <th class="text-center">Update</th>
                                                                <th class="text-center">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsnrs = Database::search("SELECT * FROM nurse;");

                                                            for ($i = 0; $i < $rsnrs->num_rows; $i++) {
                                                                $rdnrs = $rsnrs->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdnrs["uname"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdnrs["name"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdnrs["nic"]; ?>"></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-primary w-100 fw-bold " onclick="admin_update_nrs('<?= $rdnrs['nrs_id']; ?>');">Update</button></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-danger w-100 fw-bold ">Delete</button></td>
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
                                                                <th class="text-center">Update</th>
                                                                <th class="text-center">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="alert-info table-hover">
                                                            <?php
                                                            $rsphm = Database::search("SELECT * FROM pharmcist;");

                                                            for ($i = 0; $i < $rsphm->num_rows; $i++) {
                                                                $rdphm = $rsphm->fetch_assoc();
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdphm["uname"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdphm["name"]; ?>"></td>
                                                                    <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rdphm["nic"]; ?>"></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-primary w-100 fw-bold " onclick="admin_update_phm('<?= $rdphm['ph_id']; ?>');">Update</button></td>
                                                                    <td class="text-center p-1"><button class="btn btn-outline-danger w-100 fw-bold ">Delete</button></td>
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

        <!-- add doctor -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content " style="background-color: #24243e;">
                    <h4 class="text-success fw-bold text-center mt-1" style="display: none;" id="adminaddsuccesssmall">Successfull</h4>
                    <div class="modal-header">
                        <h1 class="modal-title text-white text-uppercase fs-5" id="staticBackdropLabel">Add Doctor</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Username</label><br>
                                <small id="adminaddunamesmall" style="display: none;" class="small">Please Doctor Username</small>
                                <input type="text" class="form-control" placeholder="Type Doctor Username" id="adminadduname">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Name</label><br>
                                <small id="adminaddnamesmall" style="display: none;" class="small">Please Doctor Name</small>
                                <input type="text" class="form-control" placeholder="Type Doctor Name" id="adminaddname">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Specialie</label><br>
                                <small id="adminaddspesltsmall" style="display: none;" class="small">Please Doctor Specialie</small>
                                <select class="form-control" id="adminaddspeslt">
                                    <option value="0">Select Speciality</option>
                                    <?php
                                    $rsdocslctadd = Database::search("SELECT * FROM specialies;");
                                    for ($i = 0; $i < $rsdocslctadd->num_rows; $i++) {
                                        $docslctdadd = $rsdocslctadd->fetch_assoc();
                                    ?>
                                        <option value="<?= $docslctdadd["id"]; ?>"><?= $docslctdadd["speciality"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <label class="form-label text-white"><span class="text-danger">*</span>Password</label><br>
                            <small id="adminaddpasssmall" style="display: none;" class="small">Please Doctor Password</small>
                            <input type="text" class="form-control" placeholder="Type Doctor Password" id="adminaddpass">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row w-100">
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-outline-danger text-white" data-bs-dismiss="modal" onclick="adminadddocclose();">Close</button>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-outline-primary text-white" onclick="adminadddoc();">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add doctor -->

           <!-- add receptionist -->
           <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content " style="background-color: #24243e;">
                    <h4 class="text-success fw-bold text-center mt-1" style="display: none;" id="adminaddsuccesssmall">Successfull</h4>
                    <div class="modal-header">
                        <h1 class="modal-title text-white text-uppercase fs-5" id="staticBackdropLabel">Add Doctor</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Username</label><br>
                                <small id="adminaddunamesmall" style="display: none;" class="small">Please Doctor Username</small>
                                <input type="text" class="form-control" placeholder="Type Doctor Username" id="adminadduname">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Name</label><br>
                                <small id="adminaddnamesmall" style="display: none;" class="small">Please Doctor Name</small>
                                <input type="text" class="form-control" placeholder="Type Doctor Name" id="adminaddname">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label text-white"><span class="text-danger">*</span>Specialie</label><br>
                                <small id="adminaddspesltsmall" style="display: none;" class="small">Please Doctor Specialie</small>
                                <select class="form-control" id="adminaddspeslt">
                                    <option value="0">Select Speciality</option>
                                    <?php
                                    $rsdocslctadd = Database::search("SELECT * FROM specialies;");
                                    for ($i = 0; $i < $rsdocslctadd->num_rows; $i++) {
                                        $docslctdadd = $rsdocslctadd->fetch_assoc();
                                    ?>
                                        <option value="<?= $docslctdadd["id"]; ?>"><?= $docslctdadd["speciality"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <label class="form-label text-white"><span class="text-danger">*</span>Password</label><br>
                            <small id="adminaddpasssmall" style="display: none;" class="small">Please Doctor Password</small>
                            <input type="text" class="form-control" placeholder="Type Doctor Password" id="adminaddpass">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row w-100">
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-outline-danger text-white" data-bs-dismiss="modal" onclick="adminadddocclose();">Close</button>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="button" class="btn btn-outline-primary text-white" onclick="adminadddoc();">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- add receptionist -->

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
