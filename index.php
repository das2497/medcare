<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MEDCARE MEDICAL CENTER | LOGIN PAGE</title>
    <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-lg-center align-content-start" style="width: 100%;">

            <div class="col-12">
                <div class="row">

                    <!-- logo -->

                    <div class="col-12 col-lg-6 lgd d-block mt-6 mt-lg-0 text-center" id="lgd">
                        <div class="row">
                            <div class="col-12">
                                <img src="assets/Untitled (800 × 800 px).svg" width="80%" class="mx-auto d-block d-lg-block">
                            </div>
                            <div class="col-12">
                                <h1 class="text-center ">MEDCARE MEDICAL CENTER</h1>
                            </div>
                            <div class="col-12">
                                <p>BETER HEALTH | BETER LIFE</p>
                            </div>
                            <div class="col-10 offset-1 col-lg-4 offset-lg-4 d-grid">
                                <button class="btn btn-outline-warning text-dark fw-bold">About Us</button>
                            </div>
                        </div>
                    </div>

                    <!-- logo -->

                    <hr class="d-block d-lg-none mt-4 rounded bg-secondary " style="height: 4px;">

                    <div class="col-lg-6 justify-content-center d-flex col-12">
                        <div class="row align-content-center g-4 rounded-3 mt-4 streg" style="padding: 20px;">

                            <!-- Login -->

                            <div class="col-12 " style="display: block;" id="login">
                                <div class="row">
                                    <h1 class="text-center">LOGIN</h1>
                                    <small id="MtitleSM" style="display: none;" class="text-danger fw-bold"></small>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span>User Name</label>
                                        <small id="MunmSM" style="display: none;" class="text-danger fw-bold"></small>
                                        <input type="text" class="form-control" id="Munm" value="" placeholder="Please Enter Your Username">
                                    </div>
                                    <div class="col-12 g-2">
                                        <label class="form-label"><span class="text-danger">*</span>Password</label>
                                        <small id="MpswdSM" style="display: none;" class="text-danger fw-bold"></small>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="Mpswd" placeholder="Please Enter Your Password">
                                            <span onclick="chng_pswrd_type();" class="input-group-text" style="cursor: pointer;" id="pswrdicon"><i class="bi bi-eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 my-4 ps-4">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 form-check">
                                                <input type="checkbox" id="Mrm" class="form-check-input">
                                                <label for="Mrm" class="form-label">Remember Me</label>
                                            </div>
                                            <div class="col-6 col-lg-6  ">
                                                <a href="#" class="link-primary text-decoration-none fw-bold float-end" onclick="fogotpassword();">Forgot Password</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-grid my-4">
                                        <div class="row">
                                            <div class="col-12 d-grid g-2">
                                                <button class="btn btn-warning fs-4" onclick="Mlogin();">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Login -->

                        </div>
                    </div>
                </div>

            </div>


            <!--=============forgot password==============================================================================================================-->

            <div class="modal" tabindex="-1" id="forgotPasswordModel">
                <div class="modal-dialog">
                    <div class="modal-content bg-white " style="margin-top: 80px;">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">TO RESET YOUR PASSWORD</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label text-dark">Pleace Enter Your Email</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="eml">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning " data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--===========forgot password===============================================================================================-->
        </div>

    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>