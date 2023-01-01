<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.css">


<div class="col-12 col-lg-2 d-grid m-2">
<button class="btn btn-outline-primary" onclick="back_to_appointments();">Back</button>
</div>
<div class="col-12 col-lg-4 offset-lg-7 p-2 shadow rounded alert-primary">
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
<div class="col-12 col-lg-2 offset-lg-0 d-grid">
    <a href="patient_history.php" target="_blank" class="btn btn-outline-primary fw-bold fs-4">Treatment History</a>
</div>
<div class="col-12 col-lg-2 offset-lg-10 d-grid m-1">
    <button class="btn btn-outline-primary " onclick="add_prescription();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></i> Create Prescription</button>
</div>
<div class="col-10 offset-1 mt-2 " id="prescription">

</div>