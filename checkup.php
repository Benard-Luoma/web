<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KQWPXLV');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQWPXLV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta content="width=device-width, initial-scale=0" name="viewport" /> -->
    <meta name="viewport" content="width=1024, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.25, user-scalable=yes" />
    <meta name="description" content="My Health Africa" />
    <meta name="author" content="My Health Africa Devs" />
    <title>My Health Africa | HCGCCK MEDICAL CHECK-UP</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="assets/bundles/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--bootstrap -->
    <link href="assets/bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--country code picker -->
    <link rel="stylesheet" href="assets/bundles/countrycode/build/css/intlTelInput.css">
    <!-- wizard -->
    <link href="assets/bundles/steps/steps.css" rel="stylesheet">
    <link href="css/checkup.css" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/bundles/select2/css/select2.min.css">
    <!-- Material Design Lite CSS -->
    <!-- sweet alert -->
    <link rel="stylesheet" href="assets/bundles/sweet-alert/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bundles/timepicker/jquery.ptTimeSelect.css" />
    <!--jquery toast -->
    <link href="assets/bundles/jquery-toast-plugin-master/jquery.toast.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/my-health-africa.png" />
</head>
<!-- END HEAD -->
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

<body style="zoom: 90%;background-color: transparent;height: fit-content; overflow-y: hidden;" onload="myFunction()" style="margin:0;" class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <!-- start header -->
    <!-- end header -->
    <div id="loader"></div>
    <!-- start page content -->
    <!-- <div class="card-body animate-bottom" style="margin-top:40px;margin-bottom:10px;padding: 0 !important"></div> -->
    <!-- start widget -->
    <div class="row card-body card-box" id="myDiv" style="text-align:center;border-radius:5px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: 0 !important; padding: 0 !important; color:black"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body">
            <div class="price-container">
                <div class="col-sm-12">
                    <label class="control-label">
                                            <img src="img/HCGCCK-logo-MHAf.jpg" style="height:100px">
                                        </label>
                    <form id="checkup_form" role="form" name="checkup_form" method="post" enctype="multipart/form-data">
                        <label class="control-label"><strong style="font-weight:bold;font-size:20px">Chongwe Daycare Chemotherapy Check-up Request</strong></label><br>
                        <label class="control-label">Kindly fill the form below to send a check-up request to HCGCCK  Daycare Chemotherapy Unit Upper Hill.</label>
                        <div class="row">
                            <!-- <label  class="control-label"><strong>Appointment Details</strong></label> -->
                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Your Preferred Appointment Date</label>
                                    <input type="date" class="form-control" placeholder="Your preffered appointment date" name="app_date" id="app_date" style="background-color:#dcdfe3;height:60px;border-radius:7px" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Your Preferred Appointment Time</label>
                                    <input type="time" class="form-control" placeholder="Time" name="app_time" id="app_time" style="background-color:#dcdfe3;height:60px;border-radius:7px">
                                </div>
                            </div>

                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Patient Full Name</label>
                                    <input type="text" class="form-control" placeholder="Full Names" name="patient_name" id="patient_name" style="background-color:#dcdfe3;height:60px;border-radius:7px" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Patient Phone No.</label>
                                    <input type="text" class="form-control" placeholder="Phone number" name="phone" id="phone" style="background-color:#dcdfe3;height:60px;border-radius:7px" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Patient Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" style="background-color:#dcdfe3;height:60px;border-radius:7px" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>Patient Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="Date of Birth" name="birth_date" id="birth_date" style="background-color:#dcdfe3;height:60px;border-radius:7px">
                                    <input type="text" class="form-control" value="upper_hill" name="hospital" id="hospital" style="display:none;">
                                </div>
                            </div>


                            <div class="col-md-12 col-12" style="padding-left: 0px;margin-top:15px;padding-right: 0px;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="text-align: left;">
                                    <label>State Your Medical Condition</label>
                                    <input type="text" class="form-control" placeholder="State your medical condition/request" name="check_up_request" id="check_up_request" style="background-color:#dcdfe3;height:60px;border-radius:7px">
                                </div>
                            </div>

                            <div class="col-md-12 col-12" style="margin-top:15px; text-align:left"> 
                                <label class="control-label">
                                            By clicking submit you agree to share your information with the specialists at HCGCCK Daycare Chemotherapy Unit Upper Hill and 
                                            you agree to our <a href="https://www.myhealthafrica.com/terms-of-use/" target="_blank"> Terms of Use </a>. 
                                        </label>
                            </div><br>
                        </div>
                        
                    </form>
                    <input type="submit" name="submit1" value="insert" style="text-align:center;"/>
                </div>
            </div>
        </div>
    </div>
    <!-- end widget -->

    <!-- end page container -->
    </div>
    <?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into appointment value('$_POST[app_date]','$_POST[app_time]','$_POST[patient_name]','$_POST[phone]','$_POST[email]','$_POST[hospital]','$_POST[check_up_required]')"); 
}

if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from cancer where name='$_POST[patient_name]'"); 
}

if(isset($_POST["submit3"]))
{
    $res=mysqli_query($link,"select * from cancer"); 
    echo "<table>";
    echo "<tr>";
    echo "<th>"; echo "ID"; echo"</th>";
    echo "<th>"; echo "app_date"; echo"</th>";
    echo "<th>"; echo "app_time"; echo"</th>";
    echo "<th>"; echo "patient_name"; echo"</th>";
    echo "<th>"; echo "phone"; echo"</th>";
    echo "<th>"; echo "email"; echo"</th>";
    echo "<th>"; echo "hospital"; echo"</th>";
    echo "<th>"; echo "check_up_request"; echo"</th>";
    
   
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["ID"]; echo"</td>";
        echo "<td>"; echo $row["app_date"]; echo"</td>";
        echo "<td>"; echo $row["app_time"]; echo"</td>";
        echo "<td>"; echo $row["patient_name"]; echo"</td>";
        echo "<td>"; echo $row["phone"]; echo"</td>";
        echo "<td>"; echo $row["email"]; echo"</td>";
        echo "<td>"; echo $row["hospital"]; echo"</td>";
        echo "<td>"; echo $row["check_up_request"]; echo"</td>";
        echo "<td>"; echo $row["Dateout"]; echo"</td>";
     
        echo "</tr>";
    }
}
?>           
    <!-- start js include path -->
    <script src="assets/bundles/jquery/jquery.min.js"></script>
    <script src="assets/bundles/popper/popper.js"></script>
    <script src="assets/bundles/jquery-blockUI/jquery.blockui.min.js"></script>
    <script src="assets/bundles/jquery.slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/bundles/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.js"></script>
    <script src="assets/bundles/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="assets/bundles/countrycode/build/js/intlTelInput.js"></script>
    <!-- bootstrap -->
    <script src="assets/bundles/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- wizard -->
    <script src="assets/bundles/steps/jquery.steps.js"></script>
    <!-- Select2 -->
    <script src="assets/bundles/select2/js/select2.full.min.js"></script>
    <!-- Sweet Alert -->
    <script src="assets/bundles/sweet-alert/sweetalert.min.js"></script>
    <script src="assets/checkup.js"></script>
    <!-- Common js-->
    <script src="assets/app.js"></script>
    <script src="assets/layout.js"></script>
    <script src="assets/theme-color.js"></script>
    <!-- Material -->
    <script src="assets/bundles/material/material.min.js"></script>
    <!-- jquery toast -->
    <script src="assets/bundles/jquery-toast-plugin-master/jquery.toast.min.js"></script>
    <!-- Flutterwave -->
    <!-- end js include path -->

</body>

</html>