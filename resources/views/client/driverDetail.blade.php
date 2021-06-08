<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:10 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
    <title>Doccure - HTML Mobile Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Fancyboc CSS -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper.min.css">

    <!-- Circle CSS -->
    <link rel="stylesheet" href="assets/css/circle.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<div class="main-wrapper">

    <div class="side-menu" id="sidebar-menu">
        <div class="close-btn"><span class="material-icons">close</span></div>
        <ul>
            <li>
                <a class="" href="index.html">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="" href="appointments.html">
                    <span class="material-icons">date_range</span>
                    Appointments
                </a>
            </li>
            <li>
                <a class="" href="patients-list.html">
                    <span class="material-icons">person</span>
                    My Patients
                </a>
            </li>
            <li>
                <a class="" href="schedule-timings.html">
                    <span class="material-icons">access_time</span>
                    Schedule Timings
                </a>
            </li>
            <li>
                <a class="" href="invoices.html">
                    <span class="material-icons">insert_drive_file</span>
                    Invoices
                </a>
            </li>
            <li>
                <a class="" href="pages.html">
                    <span class="material-icons">pages</span>
                    Pages
                </a>
            </li>
            <li>
                <a class="" href="chat.html">
                    <span class="material-icons">message</span>
                    Message
                </a>
            </li>
            <li>
                <a class="" href="profile-settings.html">
                    <span class="material-icons">settings</span>
                    Profile Settings
                </a>
            </li>
            <li>
                <a class="" href="social-media.html">
                    <span class="material-icons">share</span>
                    Social Media
                </a>
            </li>
            <li>
                <a class="" href="change-password.html">
                    <span class="material-icons">lock_open</span>
                    Change Password
                </a>
            </li>
        </ul>
        <a class="sidebar-logout" href="login.html"><span><img src="assets/img/open-account-logout.svg" alt=""></span>Logout</a>
    </div>

    <div class="navbar two-action no-hairline">
        <div class="navbar-inner d-flex align-items-center">
            <div class="left">
                <a href="#" class="link icon-only">
                    <i class="custom-hamburger">
                        <span><b></b></span>
                    </i>
                </a>
            </div>
            <div class="sliding custom-title">Patient - Profile</div>
            <div class="right d-flex">
                <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
                <a href="#" data-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right header_drop_icon">
                    <a href="doctor-profile.html" class="dropdown-item">My Profile</a>
                    <a href="profile-settings.html" class="dropdown-item">Settings</a>
                    <a href="login.html" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content pt-0">

        <!-- Doctor Profile -->
        <div class="doctor-profile-tab pb-0">
            <div class="container">
                <div class="tab-col">
                    <ul class="nav nav-tabs">
                        <li><a href="#OverView" data-toggle="tab" class="active">OverView</a></li>
                        <li><a href="#Appointments" data-toggle="tab">Appointments</a></li>
                        <li><a href="#prescriptions" data-toggle="tab">Prescriptions</a></li>
                        <li><a href="#medical-records" data-toggle="tab">Medical Records</a></li>
                        <li><a href="#billing" data-toggle="tab">Billing</a></li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" id="OverView">
                        <div class="panel panel-default">
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="tab-widget">
                                        <div class="left-icon-col">
                                            <span><img src="assets/img/i-icon.svg" alt="i"></span>
                                        </div>

                                        <div class="right-content-col">
                                            <div class="doctor-widget">
                                                <div class="doc-info-left">
                                                    <div class="doctor-img">
                                                        <a href="patient-profile.html" class="doctor-img-profile">
                                                            <img src="assets/img/patients/patient4.jpg" class="img-fluid img-circle" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="doc-info-cont">
                                                        <h4 class="doc-name mb-2"><a href="patient-profile.html">Michelle Fairfax</a></h4>
                                                        <div class="patient-details-col">
                                                            <span>Patient ID - PT0025</span>
                                                        </div>
                                                        <div class="patient-details-col mt-1">
                                                            <span>Blood Group - O+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="doc-info-right mt-3">
                                                    <div class="doc-info">
                                                        <div class="doc-location">
                                                            <p><i class="fas fa-phone"></i> +1 504 368 6874</p>
                                                        </div>
                                                        <div class="doc-location">
                                                            <p><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-widget">
                                        <div class="left-icon-col">
                                            <span><img src="assets/img/icon-awesome-user.svg" alt="i"></span>
                                        </div>

                                        <div class="right-content-col">
                                            <div class="doctor-widget">
                                                <h6>About me</h6>
                                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-widget">
                                        <div class="left-icon-col">
                                            <span><img src="assets/img/map-doctor.svg" alt="i"></span>
                                        </div>

                                        <div class="right-content-col">
                                            <div class="doctor-widget">
                                                <h6>Last Booking</h6>
                                                <div class="mt-3">
                                                    <h5 class="list-title mb-1"><i class="material-icons">checkmark_alt</i> Dr. Darren Elder</h5>
                                                    <span class="sub-title">Dentist</span>
                                                    <span class="sub-title">14 Nov 2019 5.00 PM</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h5 class="list-title mb-1"><i class="material-icons">checkmark_alt</i> Dr. Darren Elder</h5>
                                                    <span class="sub-title">Dentist</span>
                                                    <span class="sub-title">15 Nov 2019 4.00 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="Appointments">
                        <div class="panel panel-default">
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="patient-appointments-col">
                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Booking Date - 16 Mar 2020</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Dental</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Appt Date - 22 Mar 2020 , 4:30 PM</span>
                                                        </div>
                                                        <div class="hour-col">
                                                            <div>
                                                                <span class="hours">$150</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status-col">
                                                <div class="status-btn">
                                                    <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Booking Date - 16 Mar 2020</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Dental</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Appt Date - 22 Mar 2020 , 4:30 PM</span>
                                                        </div>
                                                        <div class="hour-col">
                                                            <div>
                                                                <span class="hours">$150</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status-col">
                                                <div class="status-btn">
                                                    <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Booking Date - 16 Mar 2020</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Dental</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-03.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Deborah Angel</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Appt Date - 22 Mar 2020 , 4:30 PM</span>
                                                        </div>
                                                        <div class="hour-col">
                                                            <div>
                                                                <span class="hours">$150</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status-col">
                                                <div class="status-btn">
                                                    <a href="#" class="btn success"><i><img src="assets/img/icon-checkmark.svg" alt=""></i>Confirm</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                </div>
                                                <div class="status-btn">
                                                    <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="prescriptions">
                        <div class="panel panel-default">
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="patient-appointments-col">
                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Prescription 1</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Prescription 2</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Prescription 3</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-03.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Deborah Angel</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">Prescription 4</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="medical-records">
                        <div class="panel panel-default">
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="patient-appointments-col">
                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">Dental Filling</span>
                                                        </div>
                                                        <div class="download-pdf">
                                                            <a href="assets/img/logo.png" download>Dental-test.pdf</a>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">Dental Filling</span>
                                                        </div>
                                                        <div class="download-pdf">
                                                            <a href="../assets/img/logo.html" download>Dental-test.pdf</a>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-03.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Deborah Angel</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">Dental Filling</span>
                                                        </div>
                                                        <div class="download-pdf">
                                                            <a href="../assets/img/logo.html" download>Dental-test.pdf</a>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">Dental Filling</span>
                                                        </div>
                                                        <div class="download-pdf">
                                                            <a href="../assets/img/logo.html" download>Dental-test.pdf</a>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="billing">
                        <div class="panel panel-default">
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="patient-appointments-col">
                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Paid on - 14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">$450</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Paid on - 14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-02.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">$450</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="../assets/img/icon-metro-printer.html" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Paid on - 14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-03.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Deborah Angel</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">$450</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="patient-widget">
                                            <div class="patient-top-details">
                                                <div>
                                                    <span class="invoice-id">#MR-0010</span>
                                                </div>
                                                <div>
                                                    <span class="date-col">Paid on - 14 Nov 2019</span>
                                                </div>
                                            </div>
                                            <div class="invoice-widget">
                                                <div class="pat-info-left">
                                                    <div class="patient-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-07.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="pat-info-cont">
                                                        <h4 class="pat-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <div class="patient-details-col">
                                                            <span class="">Dental</span>
                                                            <span class="filling">$450</span>
                                                        </div>
                                                        <div class="status-col no-shadow">
                                                            <div class="status-btn">
                                                                <a href="#" class="btn view-eye"><i><img src="assets/img/icon-awesome-eye.svg" alt=""></i>View</a>
                                                            </div>
                                                            <div class="status-btn">
                                                                <a href="#" class="btn print"><i><img src="assets/img/icon-metro-printer.svg" alt=""></i>Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Doctor Profile -->

    </div>

</div>
<!-- /Main wrapper -->

<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Fancyboc JS -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:10 GMT -->
</html>
