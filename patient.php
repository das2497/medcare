<?php

session_start();

require 'connection.php';

if (!isset($_SESSION["ST"])) {


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>MEDCARE MEDICAL CENTER | PATIENT ACCOUNT</title>
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
                                    <h4 class=" mt-2 mt-lg-3 ms-lg-4 text-white">MEDCARE MEDICAL CENTER | PATIENT</h4>
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
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Dashboard</a>
                                            </li>
                                            <li class="nav-item" onclick="THprofile();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Profile</a>
                                            </li>
                                            <li class="nav-item" onclick="THlessons();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Lessons</a>
                                            </li>
                                            <li class="nav-item" onclick="THassignments();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Assingments</a>
                                            </li>
                                            <li class="nav-item" onclick="THanswers();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Answers</a>
                                            </li>
                                            <hr class="my-1 text-white border border-bottom ">
                                            <li>
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">Our Policies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                                            </li>
                                            <li onclick="THprofile();">
                                                <a href="#" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Profile</span></a>
                                            </li>
                                            <li onclick="THlessons();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Lessons</span></a>
                                            </li>
                                            <li onclick="THassignments();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Assingments</span></a>
                                            </li>
                                            <li onclick="THanswers();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Answers</span></a>
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

                                <!-- ==========dashboard=============================================================================================                         -->
                                <div class="col-12" id="STdash" style="display: block; ">
                                    <h1>Dashboard</h1>



                                </div>
                                <!-- ==========dashboard================================================================================== -->

                                <!-- ==========profile============================================================================================= -->
                                <div class="col-12" id="STprofile" style="display: none;">
                                    <h1>Profile</h1>

                                    <div class="row pt-4">
                                        <div class="col-12 col-lg-6"><label class="labels">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" value="<?php echo $_SESSION["ST"]["uname"]; ?>" id="STuname">
                                        </div>
                                        <div class="col-12 col-lg-6"><label class="labels">Full Name</label>
                                            <input type="text" class="form-control" placeholder="Full Name" value="<?php echo $_SESSION["ST"]["full_name"]; ?>" id="STfulnm">
                                        </div>
                                        <div class="col-md-12 col-lg-6"><label class="labels">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" value="<?php echo $_SESSION["ST"]["email"]; ?>" id="STemail">
                                        </div>
                                        <div class="col-md-12 col-lg-6"><label class="labels">Password</label>
                                            <input type="text" class="form-control" placeholder="Password" value="<?php echo $_SESSION["ST"]["pass"]; ?>" id="STpass">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">Grade</label>
                                            <input type="text" class="form-control" placeholder="Grade" value="<?php echo $_SESSION["ST"]["grade"]; ?>" readonly>
                                        </div>
                                        <div class="col-10 offset-1 col-lg-2 offset-lg-5 d-grid mt-5 text-center">
                                            <button class="btn btn-primary profile-button" type="button" onclick="UpdateStudentProfile();">Update Profile</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- ==========profile================================================================================== -->

                                <!-- ==========lessons============================================================================================= -->
                                <div class="col-12" id="STlessons" style="display: none;">
                                    <h1>Lessons</h1>

                                    <?php
                                    $rstbl = Database::search("SELECT lesson_note.id, lesson_note.path, lesson_note.l_name, sub_name.name, grade.grade FROM lesson_note 
                                    INNER JOIN subject ON lesson_note.subject_id=subject.name
                                    INNER JOIN sub_name ON subject.name=sub_name.id
                                    INNER JOIN grade ON lesson_note.grade_id=grade.id WHERE grade.grade='" . $_SESSION["ST"]["grade"] . "';");
                                    $tbn = $rstbl->num_rows;

                                    ?>

                                    <div class="col-12 col-lg-8 offset-lg-2 overflow-scroll ">
                                        <table class=" table table-responsive shadow stdn mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Lesson name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Grade</th>
                                                    <th scope="col">Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                for ($i = 0; $i < $tbn; $i++) {
                                                    $tbd = $rstbl->fetch_assoc();

                                                ?>
                                                    <tr class="hov  alert-info">
                                                        <td><?php echo $tbd["id"]; ?></td>
                                                        <td><?php echo $tbd["l_name"]; ?></td>
                                                        <td><?php echo $tbd["name"]; ?></td>
                                                        <td><?php echo $tbd["grade"]; ?></td>
                                                        <td><a href="<?php echo $tbd["path"]; ?>" target="_blank" class="btn btn-primary">Download</a></td>
                                                    </tr>

                                                <?php

                                                }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- ==========lessons================================================================================== -->

                            <!-- ==========assignments============================================================================================= -->
                            <div class="col-12" id="STassignments" style="display: none;">
                                <h1>Assingments</h1>

                                <div class="row">

                                    <?php
                                    $rstbl = Database::search("SELECT assignment.id, assignment.as_name, assignment.path, sub_name.name, grade.grade FROM assignment
                                        INNER JOIN subject ON assignment.subject_id=subject.id
                                        INNER JOIN sub_name ON subject.name=sub_name.id
                                        INNER JOIN grade ON assignment.gradeid=grade.id WHERE grade.grade='" . $_SESSION["ST"]["grade"] . "';;");
                                    $tbn = $rstbl->num_rows;

                                    ?>

                                    <div class="col-12 col-lg-8 offset-lg-2 overflow-scroll ">
                                        <table class=" table table-responsive shadow stdn mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Assignment name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Grade</th>
                                                    <th scope="col">Download</th>
                                                    <th scope="col">Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                for ($i = 0; $i < $tbn; $i++) {
                                                    $tbd = $rstbl->fetch_assoc();

                                                    $rm = Database::search("SELECT answer.marks, answer.`status` FROM answer WHERE answer.`status`='0' AND answer.student_id='" . $tbd["id"] . "';");
                                                    $dm = $rm->fetch_assoc();

                                                ?>
                                                    <tr class="hov  alert-info">
                                                        <td><?php echo $tbd["id"]; ?></td>
                                                        <td><?php echo $tbd["as_name"]; ?></td>
                                                        <td><?php echo $tbd["name"]; ?></td>
                                                        <td><?php echo $tbd["grade"]; ?></td>
                                                        <td><a href="<?php echo $tbd["path"]; ?>" target="_blank" class="btn btn-primary">Download</a></td>
                                                        <td>
                                                            <h4><?php if (isset($dm["marks"])) {
                                                                    echo $dm["marks"];
                                                                } else {
                                                                    "none";
                                                                }

                                                                ?></h4>
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
                            <!-- ==========assignments================================================================================== -->

                            <!-- ==========answers=============================================================================================  -->
                            <div class="col-12" id="STanswers" style="display: none;">
                                <h1>Answers</h1>

                                <div class="row">

                                    <?php
                                    $rstbl = Database::search("SELECT assignment.id, assignment.as_name, assignment.path, sub_name.name, grade.grade FROM assignment
                                        INNER JOIN subject ON assignment.subject_id=subject.id
                                        INNER JOIN sub_name ON subject.name=sub_name.id
                                        INNER JOIN grade ON assignment.gradeid=grade.id WHERE grade.grade='" . $_SESSION["ST"]["grade"] . "';;");
                                    $tbn = $rstbl->num_rows;

                                    ?>

                                    <div class="col-12 col-lg-8 offset-lg-2 overflow-scroll ">
                                        <table class=" table table-responsive shadow stdn mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Assignment name</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Grade</th>
                                                    <th scope="col">Upload Answers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                for ($i = 0; $i < $tbn; $i++) {
                                                    $tbd = $rstbl->fetch_assoc();

                                                    $lesid = "les" . $tbd["id"];

                                                ?>
                                                    <tr class="hov  alert-info">
                                                        <td><?php echo $tbd["id"]; ?></td>
                                                        <td><?php echo $tbd["as_name"]; ?></td>
                                                        <td><?php echo $tbd["name"]; ?></td>
                                                        <td><?php echo $tbd["grade"]; ?></td>
                                                        <td class="d-grid g-1"><input class="btn btn-secondary" type="file" id="<?php echo $lesid; ?>"><button class="btn btn-warning" onclick="upload_answers('<?php echo $_SESSION['ST']['id']; ?>','<?php echo $tbd['id']; ?>','<?php echo $lesid; ?>');">Upload Answers</button></td>
                                                    </tr>

                                                <?php

                                                }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>
                            <!-- ==========answers================================================================================== -->

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
                <h4 class="text-center text-white fs-5">ELAYAS CAMPUS</h4>
                <p class="text-white text-center">TO BETER WORLD | BETER FUTURE | BETER COUNTRY</p>
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
    header("Location: index.php");
}
