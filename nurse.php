<?php

session_start();

require 'connection.php';

if (isset($_SESSION["NR"])) {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>NURSE <?= $_SESSION["NR"]["name"]; ?></title>
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
                            <h4 class="d-block d-lg-inline mt-2 mt-lg-0 text-white">NURSE <?= $_SESSION["NR"]["name"]; ?></h4>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-7 pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end navbar-dark">
                                <div class="container-fluid">
                                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        Menu<span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#">Lab Reports</a>
                                            </li>
                                            <hr class="border border-bottom border-4 mt-2">
                                            <li>
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Help</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" onclick="nurse_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                                    <h4 class="d-block  mt-2 mt-lg-0 text-white text-decoration-underline">NURSE <?= $_SESSION["NR"]["name"]; ?></h4>
                                </div>
                                <div class="col-12 text-center g-4 my-4">
                                    <span class="fs-5 fw-normal text-white fw-bold">NURSE ACCOUNT</span>
                                </div>
                                <hr class="border-bottom border-white border-4">
                                <hr>
                                <div class="col-12 text-center my-2 mm">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Lab Reports</a>
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
                                            <a class="nav-link fw-bold  text-warning" onclick="nurse_logout();" href="#">log out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" offset-lg-2 col-lg-10">
                            <div class="row p-4 d-flex vh-100">

                                <!-- Dashboard -->

                                <div class="col-12  ">

                                    <h2 class="text-center">Lab Reports</h2>
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="row">
                                                <h4 class="text-success text-center" style="display: none;" id="successfulUpload"></h4>
                                                <h4 class="text-danger text-center" style="display: none;" id="errorUpload"></h4>
                                                <div class="col-10 offset-1 col-lg-4 offset-lg-2"><label class="form-label"><small class="text-danger">*</small>Enter Patient Id</label>
                                                    <small class="text-danger d-inline fw-bold" id="pidawarning"></small>
                                                    <input type="text" class="form-control" placeholder="Enter Patient Id" id="pidnurse">
                                                </div>
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-0 mt-4 d-grid">
                                                    <label onclick="upload_lab_report();" class="btn btn-outline-primary fw-bold fw-bolder " for="uploadlabreport">Upload</label>
                                                    <input type="file" class="d-none" id="uploadlabreport" />
                                                    <small id="viewreportname"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-8 offset-lg-2 mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Search</span>
                                                </div>
                                                <input type="text" class="form-control" onkeyup="search_lab_report();" id="searchreportnurse">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="row border m-4  rounded " id="prescripsrchrslt">
                                                    <p class="text-center">Please Search Lab Report</p>
                                                </div>
                                            </div>
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
