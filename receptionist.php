<?php

session_start();

require 'connection.php';

if (isset($_SESSION["RP"])) {


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
            <div class="row ">

                <div class="col-12">

                    <!-- header -->

                    <div class="row  border-bottom border-4 border-primary shadow-lg bg-dark">

                        <div class="col-12 col-lg-4  text-center text-lg-start mt-3">
                            <div class="row align-content-center">
                                <div class="col-12 col-lg-1">
                                    <img alt="logo" src="assets/Untitled (800 × 800 px).svg" width="60px">
                                </div>
                                <div class="col-12 col-lg-11">
                                    <h4 class=" mt-2 mt-lg-3 ms-lg-4 text-white"><?= $_SESSION["RP"]["name"]; ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-5  pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end">
                                <div class="container-fluid ">
                                    <!-- <a class="navbar-brand d-block d-lg-none text-white" href="#">Menu</a> -->
                                    <button class="navbar-toggler text-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon "></span>
                                    </button>
                                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-end  ">
                                            <li class="nav-item" onclick="THdash();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Channelings</a>
                                            </li>
                                            <li class="nav-item" onclick="THprofile();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Patients</a>
                                            </li>
                                            <hr class="my-1 text-white border border-bottom ">
                                            <li>
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">Our Policies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" onclick="recep_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                        <div class="col-2">

                            <!-- sidebar -->

                            <div class="row d-none d-lg-flex vh-100">
                                <div class="col-12 d-none d-lg-block px-sm-2 px-0 bg-dark">
                                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white ">
                                        <h4 class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white">Menu</h4>
                                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                            <li onclick="THdash();">
                                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Channelings</span> </a>
                                            </li>
                                            <li onclick="THprofile();">
                                                <a href="#" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Patients</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- sidebar -->

                        </div>

                        <!-- Dashboard -->

                        <div class="col-12 col-lg-10 ">

                            <div class="row ">

                                <!-- ============================================Channeling=================================================================== -->

                                <div class="col-12" id="THdash" style="display: block;">
                                    <h4>Channelings</h4>

                                </div>

                                <!-- =============================================Channeling================================================================== -->

                                <!-- ============================================Patients=================================================================== -->

                                <div class="col-12" id="THprofile" style="display: none;">
                                    <h4>Patients </h4>
                                    <div class="row">
                                        <div class="col-10 offset-1 shadow m-2" id="pdtails">
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
                                                            <td><button onclick="recp_patient_dtails('<?= $pd['preg_no'] ?>');" class="btn btn-primary">View Details</button></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- =============================================Patients================================================================== -->

                            </div>

                        </div>

                        <!-- Dashboard -->

                    </div>


                    <!-- body -->

                </div>

            </div>



            <!-- footer -->

            <footer class="row bg-warning fixed-bottom">
                <div class="col-12 col-lg-4 offset-lg-4   text-center">
                    <img src="assets/Untitled (800 × 800 px).svg" alt="logo" width="100">
                    <h4 class="text-center text-white fs-5">MEDCARE MEDICAL CENTER</h4>
                    <p class="text-white text-center">BETER HEALTH | BETER LIFE</p>
                </div>
            </footer>

            <!-- footer -->

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
