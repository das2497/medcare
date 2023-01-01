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

        <title>DOCTOR <?= $_SESSION["DT"]["name"]; ?></title>
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
                            <div class="row align-content-center ">
                                <div class="col-12 col-lg-1">
                                    <img alt="logo" src="assets/Untitled (800 × 800 px).svg" width="60px">
                                </div>
                                <div class="col-12 col-lg-11 ">
                                    <h4 class=" mt-2 mt-lg-3 ms-lg-4 text-white">DOCTOR <?= $_SESSION["DT"]["name"]; ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-5  pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end">
                                <div class="container-fluid ">
                                    <button class="navbar-toggler text-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon "></span>
                                    </button>
                                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-end  ">
                                            <li class="nav-item" onclick="THdash();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Appoinments</a>
                                            </li>
                                            <hr class="my-1 text-white border border-bottom ">
                                            <li>
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">Our Policies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" onclick="doctor_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                                            <li>
                                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Appoinments</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- sidebar -->

                        </div>

                        <!-- Dashboard -->

                        <div class="col-12 col-lg-10 ">

                            <div class="row">

                                <div class="col-12 col-lg-4 offset-lg-7 p-2 shadow rounded alert-primary mt-2">
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
                                <div class="col-12 mt-4">
                                    <div class="row">
                                        <div class="col-6 d-grid" onclick="prescriptionhistory();">
                                            <button class="btn btn-outline-primary" >Prescription History</button>
                                        </div>
                                        <div class="col-6 d-grid">
                                            <button class="btn btn-outline-primary" onclick="labreporthistry();">Lab Reports</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 offset-1 mt-4 overflow-scroll vh-100">
                                    <div class="row">
                                        <div class="col-12" id="preshistory" style="display: block;">
                                            <?php

                                            $rs1 = Database::search("SELECT *
                                            FROM prescription
                                            INNER JOIN doctor ON prescription.doc_id=doctor.id
                                            INNER JOIN patient ON prescription.pat_id=patient.id
                                            WHERE prescription.doc_id='1' AND prescription.pat_id='1';");

                                            $n1 = $rs1->num_rows;

                                            for ($i = 0; $i < $n1; $i++) {
                                                $d1 = $rs1->fetch_assoc();

                                            ?>
                                                <div class="row border m-1 rounded">
                                                    <div class="col-12">
                                                        <h4>Date : 2022-12-31</h4>
                                                    </div>
                                                    <div class="col-12"><label class="form-label">Drug And Dosage</label>
                                                        <textarea class="form-control" id="" cols="30" rows="10" readonly><?= $d1["drugs_doses"]; ?></textarea>
                                                    </div>
                                                    <div class="col-12"><label class="form-label">Aditional Notes</label>
                                                        <textarea class="form-control" id="" cols="30" rows="10" readonly><?= $d1["notes"]; ?></textarea>
                                                    </div>
                                                </div>
                                            <?php
                                            }

                                            ?>
                                        </div>
                                        <div class="col-12" id="labreporthistory" style="display: none;">
                                            <?php

                                            $rs2 = Database::search("");

                                            $n2 = $rs2->num_rows;

                                            for ($i = 0; $i < $n2; $i++) {
                                                $d2 = $rs2->fetch_assoc();

                                            ?>
                                                <div class="row border m-1 rounded">
                                                    <div class="col-12">
                                                        <h4>Date : 2022-12-31</h4>
                                                    </div>
                                                    <div class="col-12"><label class="form-label">Lab Report</label>
                                                        <img src="assets/Untitled (800 × 800 px).svg" alt="Lab Report">
                                                    </div>
                                                </div>
                                            <?php
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Dashboard -->

                    </div>

                    <!-- body -->

                </div>

            </div>

        </div>

        </div>
        </div>


        <script>
            var prescriptionhistory = function() {
                alert("prescription_history");
            }

            var labreporthistry = function() {
                alert("labreporthistry");
            }
        </script>
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
