var bm;

function fogotpassword() {

    var m = document.getElementById("forgotPasswordModel");

    bm = new bootstrap.Modal(m);
    bm.show();

}

function chng_pswrd_type() {

    var pswrdfield = document.getElementById("Mpswd");
    var pswrdicon = document.getElementById("pswrdicon");

    // alert(pswrdfield.type);

    if (pswrdfield.type == "password") {
        pswrdfield.type = "text";
        pswrdicon.innerHTML = "<i class='bi bi-eye-slash'></i>";
    } else if (pswrdfield.type = "text") {
        pswrdfield.type = "password";
        pswrdicon.innerHTML = "<i class='bi bi-eye'></i>";
    }

}

function Mlogin() {
    var Munm = document.getElementById("Munm");
    var Mpswd = document.getElementById("Mpswd");
    var Mrm = document.getElementById("Mrm");

    var MunmSM = document.getElementById("MunmSM");
    var MpswdSM = document.getElementById("MpswdSM");

    var MtitleSM = document.getElementById("MtitleSM");

    // alert(Mrm.checked);

    var f = new FormData();
    f.append("Munm", Munm.value);
    f.append("Mpswd", Mpswd.value);
    f.append("Mrm", Mrm.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                // alert(text);

            if (text == "Please Enter Your Username") {
                MunmSM.innerHTML = text;
                MunmSM.style.display = "inline";
                MpswdSM.style.display = "none";
            } else if (text == "Please Enter Your Password") {
                MunmSM.style.display = "none";
                MpswdSM.innerHTML = text;
                MpswdSM.style.display = "inline";
            } else if (text == "1") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "patient.php";
            } else if (text == "2") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "admin.php";
            } else if (text == "3") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "doctor.php";
            } else if (text == "4") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "receptionist.php";
            } else if (text == "5") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "nurse.php";
            } else if (text == "6") {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.color = "green";
                // MtitleSM.style.display = "inline";
                window.location = "pharmacist.php";
            } else {
                MunmSM.style.display = "none";
                MpswdSM.style.display = "none";
                MtitleSM.innerHTML = text;
                MtitleSM.style.display = "inline";
            }

        }
    }

    r.open("POST", "login_process.php", true);
    r.send(f);

}

//==========================admin=========================================================================================================

function THdash() {
    document.getElementById("THdash").style.display = "block";
    document.getElementById("THprofile").style.display = "none";
    document.getElementById("THlessons").style.display = "none";
    document.getElementById("THassignments").style.display = "none";
}

function THprofile() {
    document.getElementById("THdash").style.display = "none";
    document.getElementById("THprofile").style.display = "block";
    document.getElementById("THlessons").style.display = "none";
    document.getElementById("THassignments").style.display = "none";
}

function THstudents() {
    document.getElementById("THdash").style.display = "none";
    document.getElementById("THprofile").style.display = "none";
    document.getElementById("THlessons").style.display = "none";
    document.getElementById("THassignments").style.display = "none";
}

function THChannel() {
    document.getElementById("THdash").style.display = "none";
    document.getElementById("THprofile").style.display = "none";
    document.getElementById("THlessons").style.display = "block";
    document.getElementById("THassignments").style.display = "none";
}

function THReports() {
    document.getElementById("THdash").style.display = "none";
    document.getElementById("THprofile").style.display = "none";
    document.getElementById("THlessons").style.display = "none";
    document.getElementById("THassignments").style.display = "block";
}


//=================================admin==============================================================

function d_ch_slct() {
    var specid = document.getElementById("dchnlspecility").value;


    var f = new FormData();
    f.append("specid", specid);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            document.getElementById("docchnl").innerHTML = text;

        }
    }

    r.open("POST", "doctors_chnl.php", true);
    r.send(f);
}

function doctrs() {
    var specid = document.getElementById("dchnlspecility").value;


    var f = new FormData();
    f.append("specid", specid);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            document.getElementById("docchnl").innerHTML = text;

        }
    }

    r.open("POST", "doctors.php", true);
    r.send(f);
}

function admin_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "admin_logout.php", true);
    r.send();
}

function patient_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "patient_logout.php", true);
    r.send();
}

function doctor_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "doctor_logout.php", true);
    r.send();
}

function nurse_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "nurse_logout.php", true);
    r.send();
}

function pharmacist_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "pharmacist_logout.php", true);
    r.send();
}

function recep_logout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);

            if (text == 'success') {
                window.location = 'index.php';
            }

        }
    }

    r.open("POST", "receptionist_logoot.php", true);
    r.send();
}

function doctorDetails(did, dname) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                // alert(text);

            document.getElementById("docdtails").innerHTML = text;

        }
    }

    var f = new FormData();
    f.append("did", did);
    f.append("dname", dname);

    r.open("POST", "d_chnl_details.php", true);
    r.send(f);
}

function d_chnl_back() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                // alert(text);

            document.getElementById("docdtails").innerHTML = text;

        }
    }

    r.open("POST", "patient_d_chnl.php", true);
    r.send();
}

function make_appointment(chnlid, pid) {
    // alert(chnlid + " " + pid);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
            alert(text);

        }
    }

    var f = new FormData();
    f.append("chnlid", chnlid);
    f.append("pid", pid);

    r.open("POST", "make_appointment_patient.php", true);
    r.send(f);
}

// function checkedPatient(pregno) {

//     var pchecked = document.getElementById("pchecked");

//     if (pchecked.checked != "true") {
//         document.getElementById("chklbl").innerHTML = "checked";
//         pchecked.disabled = "true";
//     }

//     var r = new XMLHttpRequest();

// }

function checkedPatient(pregno) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);
            document.getElementById("dappoimnts").innerHTML = text;
        }
    }

    var f = new FormData();

    r.open("POST", "opened_apoinmnt.php", true);
    r.send(f);

}

function recp_patient_dtails(preg) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);
            document.getElementById("pdtails").innerHTML = text;
        }
    }

    var f = new FormData();
    f.append("preg", preg);

    r.open("POST", "rcp_patient_details.php", true);
    r.send(f);

}

function pdtails_back() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
                //  alert(text);
            document.getElementById("pdtails").innerHTML = text;
        }
    }

    r.open("POST", "pdtails_recp.php", true);
    r.send();

}

function pdtails_update(pregno) {

    var rppreg_no = document.getElementById("rppreg_no");
    var rpuname = document.getElementById("rpuname");
    var rpname = document.getElementById("rpname");
    var rpgender_type = document.getElementById("rpgender_type");
    var rpnic = document.getElementById("rpnic");
    var rpdob = document.getElementById("rpdob");
    var rpaddress = document.getElementById("rpaddress");
    var rpcontact = document.getElementById("rpcontact");
    var rpperson = document.getElementById("rpperson");
    var rpnotes = document.getElementById("rpnotes");
    var rppass = document.getElementById("rppass");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
            alert(text);
            //   document.getElementById("pdtails").innerHTML = text;
        }
    }

    var f = new FormData();
    f.append("rppreg_no", rppreg_no);
    f.append("rpuname", rpuname);
    f.append("rpname", rpname);
    f.append("rpgender_type", rpgender_type);
    f.append("rpnic", rpnic);
    f.append("rpdob", rpdob);
    f.append("rpaddress", rpaddress);
    f.append("rpcontact", rpcontact);
    f.append("rpperson", rpperson);
    f.append("rpnotes", rpnotes);
    f.append("rppass", rppass);

    r.open("POST", "pdtails_update_recp.php", true);
    r.send(f);

}

function patient_dtails_update() {

    var ppreg_no = document.getElementById("ppreg_no");
    var puname = document.getElementById("puname");
    var pfullname = document.getElementById("pfullname");
    var pgender = document.getElementById("pgender");
    var pnic = document.getElementById("pnic");
    var pdob = document.getElementById("pdob");
    var paddress = document.getElementById("paddress");
    var pcontact = document.getElementById("pcontact");
    var presponsible = document.getElementById("presponsible");
    var pspecialnotes = document.getElementById("pspecialnotes");
    var ppass = document.getElementById("ppass");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
            alert(text);
        }
    }

    var f = new FormData();
    f.append("ppreg_no", ppreg_no.value);
    f.append("puname", puname.value);
    f.append("pfullname", pfullname.value);
    f.append("pgender", pgender.value);
    f.append("pnic", pnic.value);
    f.append("pdob", pdob.value);
    f.append("paddress", paddress.value);
    f.append("pcontact", pcontact.value);
    f.append("presponsible", presponsible.value);
    f.append("pspecialnotes", pspecialnotes.value);
    f.append("ppass", ppass.value);

    r.open("POST", "pdtails_update_process.php", true);
    r.send(f);

}

function back_to_appointments() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
            document.getElementById("dappoimnts").innerHTML = text;
        }
    }

    var f = new FormData();

    r.open("POST", "backtoappoinmnts.php", true);
    r.send(f);

}

function add_prescription() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText
            document.getElementById("prescription").innerHTML = text;
        }
    }

    var f = new FormData();

    r.open("POST", "add_prescription.php", true);
    r.send(f);
}

function saveprescrip() {
    alert("ok");
}

//===============================Lab Report Upload===================================================================================================

function upload_lab_report() {
    var pid = document.getElementById("pidnurse").value; // patient id

    if (pid == "") {
        document.getElementById("pidawarning").innerHTML = "Pleace Enrer Patient Id";
    } else {

        var view = document.getElementById("viewreportname"); //view tag
        var file = document.getElementById("uploadlabreport"); //file chooser

        file.onchange = function() {
            var file1 = this.files[0];
            var url1 = window.URL.createObjectURL(file1);
            view.innerHTML = url1;
            document.getElementById("pidawarning").innerHTML = "";
            upload_repot(pid);
        }
    }
}

function upload_repot(pid) {
    var file = document.getElementById("uploadlabreport");
    var form = new FormData();
    if (file.files.length == 0) {
        document.getElementById("pidawarning").innerHTML = "Pleace Select the Lab Report to upload";
    } else {
        form.append("file", file.files[0]);
        form.append("pid", pid);
    }
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "Successfull") {
                document.getElementById("successfulUpload").style.display = "block";
                document.getElementById("successfulUpload").innerHTML = "Successfully Uploaded";
                window.location.reload();
            } else {
                document.getElementById("errorUpload").style.display = "block";
                document.getElementById("errorUpload").innerHTML = t;
            }
        }
    }
    r.open("POST", "upload_lab_report.php", true);
    r.send(form);
}

//===================================================================================================================================================================

function search_lab_report() {
    var pid = document.getElementById("searchreportnurse").value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            document.getElementById("prescripsrchrslt").innerHTML = t;
        }
    }
    var f = new FormData();
    f.append("pid", pid);
    r.open("POST", "searchlabreportprocess.php", true);
    r.send(f);
}

function srchprescrippharmc() {
    var pid = document.getElementById("prescripsrch").value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            document.getElementById("prescripsrchrslt").innerHTML = t;
        }
    }
    var f = new FormData();
    f.append("pid", pid);
    r.open("POST", "srchprescrippharmcprocess.php", true);
    r.send(f);
}