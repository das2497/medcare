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

    <title>Receptionist | <?= $_SESSION["RP"]["name"]; ?></title>
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
                        <h4 class="d-block d-lg-inline mt-2 mt-lg-0 text-white">Receptionist | <?= $_SESSION["RP"]["name"]; ?></h4>
                    </div>

                    <div class="col-12 col-lg-3 offset-lg-7 pt-3 mb-4">

                        <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end navbar-dark">
                            <div class="container-fluid">
                                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu<span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                        <li class="nav-item" onclick="THdash();">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#">Channelings</a>
                                        </li>
                                        <li class="nav-item" onclick="THprofile();">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#">Patients</a>
                                        </li>
                                        <hr class="border border-bottom border-4 mt-2">
                                        <li>
                                            <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Help</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold" onclick="recep_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                                <h4 class="d-block  mt-2 mt-lg-0 text-white text-decoration-underline">Receptionist | <?= $_SESSION["RP"]["name"]; ?></h4>
                            </div>
                            <div class="col-12 text-center g-4 my-4">
                                <span class="fs-5 fw-normal text-white fw-bold">Receptionist ACCOUNT</span>
                            </div>
                            <hr class="border-bottom border-white border-4">
                            <hr>
                            <div class="col-12 text-center my-2 mm" onclick="THdash();">
                                <a href="#" class="nav-link fw-bold fs-5 text-white">Channelings</a>
                            </div>
                            <div class="col-12 text-center my-2 mm" onclick="THprofile();">
                                <a href="#" class="nav-link fw-bold fs-5 text-white">Patients</a>
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
                                        <a class="nav-link fw-bold  text-warning" onclick="recep_logout();" href="#">log out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" offset-lg-2 col-lg-10">
                        <div class="row p-4 d-flex vh-100">

                            <!-- Dashboard -->

                            <div class="col-12 col-lg-10 ">

                                <div class="row ">

                                    <!-- ============================================Channeling=================================================================== -->

                                    <div class="col-12" id="THdash" style="display: block;">
                                        <h4>Channelings</h4>

                                        <h4>Doctors</h4>

                                        <div class="row" id="docdtails">
                                            <?php
                                            $rsub2 = Database::search("SELECT * FROM specialies;");
                                            ?>
                                            <div class="col-6 offset-3">
                                                <select class="form-select" id="dchnlspecility" onchange="doctrs();">
                                                    <option value="x">Select Speciality</option>
                                                    <?php
                                                    $rsub2 = Database::search("SELECT * FROM specialies;");
                                                    while ($row2 = mysqli_fetch_assoc($rsub2)) {
                                                    ?>
                                                        <option value="<?php echo $row2["id"]; ?>"><?php echo $row2["speciality"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-12 overflow-scroll " id="docchnl">

                                                <table class=" table table-responsive table-striped shadow table-hover mt-4">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Doctor's Name</th>
                                                            <th>Speciality</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        $rs1 = Database::search("SELECT doctor.id, doctor.uname, doctor.name, doctor.specialty, specialies.speciality, doctor.password FROM doctor 
                        INNER JOIN specialies ON doctor.specialty=specialies.id;");
                                                        $sn = $rs1->num_rows;

                                                        for ($i = 0; $i < $sn; $i++) {
                                                            $sd = $rs1->fetch_assoc();

                                                        ?>
                                                            <tr class="alert-info">
                                                                <td><?php echo $sd["name"]; ?></td>
                                                                <td><?php echo $sd["speciality"]; ?></td>
                                                            </tr>

                                                        <?php

                                                        }

                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- =============================================Channeling================================================================== -->

                                    <!-- ============================================Patients=================================================================== -->

                                    <div class="col-12" id="THprofile" style="display: none;">
                                        <h4>Patients </h4>
                                        <div class="row">
                                            <div class="col-12 col-lg-10 shadow mt-2" id="pdtails">
                                                <?php
                                                $prs = Database::search("SELECT * FROM patient
                    INNER JOIN gender ON patient.gender=gender.id
                    INNER JOIN responsible ON patient.responsible=responsible.responsible_id;");

                                                $pn = $prs->num_rows;
                                                ?>
                                                <table class="table table-responsive table-striped ">
                                                    <thead>
                                                        <th>Registration No</th>
                                                        <th>patient Name</th>
                                                        <th>Details</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        for ($i = 0; $i < $pn; $i++) {
                                                            $pd = $prs->fetch_assoc();
                                                        ?>
                                                            <tr class="table-info">
                                                                <td><?= $pd["preg_no"] ?></td>
                                                                <td><?= $pd["name"] ?></td>
                                                                <td><button onclick="recp_patient_dtails('<?= $pd['preg_no'] ?>');" class="btn btn-outline-primary fw-bold">View Details</button></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-10 offset-1 col-lg-2 offset-lg-0 ">
                                                <a href="register_patient_resp.php" class="btn btn-outline-primary fw-bold  mx-auto d-flex p-2" target="_blank">Register Patient</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- =============================================Patients================================================================== -->

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