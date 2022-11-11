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

    <title>ADMIN PANEL</title>
    <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row ">

            <div class="col-12">

                <!-- header -->

                <div class="row  border-bottom border-4 border-primary shadow-lg" style="background: linear-gradient(138deg, rgba(255,255,255,1) 0%, rgba(255,200,80,1) 100%);">

                    <div class="col-12 col-lg-2 text-center text-lg-start mt-3">
                        <img alt="NAITA logo" src="assets/Untitled (800 × 800 px).svg" width="60px" style="border-radius: 100%;">
                        <h4 class="d-block d-lg-inline mt-2 mt-lg-0">MEDICAL CENTER</h4>
                    </div>

                    <div class="col-12 col-lg-3 offset-lg-7  pt-3 mb-4">

                        <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end">
                            <div class="container-fluid">
                                <a class="navbar-brand d-block d-lg-none" href="#">Menu</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="dashmm();">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="Meetingsmm();">Meetings Shedule</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="studentsmm();">Students</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="univercitymm();">Univercities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="assessorsmm();">Assessors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="companymm();">Companies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="reportsmm();">Reports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="monitoringmm();">Monitoring</a>
                                        </li>
                                        <li class="nav-item mt-2 mx-2">
                                        <li>
                                            <a href="#" class="nav-link d-block d-lg-none fw-bold">Notifications</a>
                                            <a href="#" class="d-none d-lg-block mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell" style="color: blue; display: block;" viewBox="0 0 16 16">
                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 
                                                        .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 
                                                        12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68
                                                         10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" style="color: red; display: none;" viewBox="0 0 16 16">
                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7
                                                         0-2.42-1.72-4.44-4.005-4.901z" />
                                                </svg>
                                            </a>
                                        </li>
                                        </li>
                                        <li>
                                            <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Our Policies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">log out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>

                </div>

                <!-- header -->

                <!-- body -->

                <div class="row  d-block d-lg-flex vh-100 ">
                    <div class="col-lg-2 col-12 border-end border-secondary border-4 shadow-lg" style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,200,80,1) 100%);">

                        <div class="row d-none d-lg-block">
                            <div class="col-12 text-center g-4">
                                <span class="fs-5 fw-normal">Main Account</span>
                            </div>
                            <hr>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="dashmm();">Dashboard</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="Meetingsmm();">Meetings Shedule</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="studentsmm();">Students</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="univercitymm()">Univercities</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="assessorsmm();">Assessors</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="companymm();">Companies</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="reportsmm();">Reports</a>
                            </div>
                            <div class="col-12 text-center my-2 mm">
                                <a href="#" class="fs-5 fw-normal text-decoration-none text-dark" onclick="monitoringmm();">Monitoring</a>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-10">
                        <div class="row p-4">

                            <!-- Dashboard -->

                            
                            <!-- Dashboard -->




                        </div>

                    </div>



                </div>
            </div>

        </div>

        <!-- body -->

        <!-- footer -->


        <footer class="row  bg-dark ">
            <div class="col-12 col-lg-2   text-center">
                <img src="assets/Untitled (800 × 800 px).svg" alt="logo" width="100">
                <h4 class="text-center text-white fs-5">ssssssssssssssssssssssssssssssss</h4>
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