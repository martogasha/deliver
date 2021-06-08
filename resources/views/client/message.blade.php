<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/chat-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:12 GMT -->
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
                <div class="chat-top-icon">
                    <div class="back-icon">
                        <a href="{{url('carrierDetail')}}" class="back link"><img src="assets/img/left-arrow.svg" alt=""></a>
                    </div>
                    <div class="item-avatar">
                        <img src="assets/img/patients/patient6.jpg" width="37" alt="">
                    </div>
                </div>
            </div>
            <div class="sliding custom-title">Madeleine Penelope</div>
            <div class="right d-flex">
                <a href="voice-call.html" class="call-icon"><img src="assets/img/phone-icon.svg" alt=""></a>
                <a href="#" data-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right header_drop_icon">
                    <a href="doctor-profile.html" class="dropdown-item">My Profile</a>
                    <a href="profile-settings.html" class="dropdown-item">Settings</a>
                    <a href="login.html" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content messages-content header-bg pt-0">
        <div class="messages">
            <div class="message message-received message-first message-last message-tail m-0">
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">Hai I am Meera, am from Delhi</div>
                    </div>
                    <div class="message-footer">Mar 26, 08:03 PM </div>
                </div>
            </div>
            <div class="message message-sent message-first">
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">Lorem Ipsum, you need to 4 be sure there <span class="smile"><img src="assets/img/smile.svg" alt=""></span></div>
                    </div>
                    <div class="message-footer">Mar 26, 08:03 PM <img src="assets/img/green-tick.svg" alt=""></div>
                </div>
            </div>
            <div class="today-col">
                <span>Today</span>
            </div>
            <div class="message message-received message-first message-last message-tail">
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">I am not well so shall i come to hospital</div>
                    </div>
                    <div class="message-footer">02:30 PM</div>
                </div>
            </div>
            <div class="message message-sent message-first">
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">There are many variations of passages of Lorem Ipsum.<span class="smile"><img src="assets/img/smile.svg" alt=""></span><br><br> Available,the majority have suffered alteration in some form, by injected humour, or randomised words <span class="smile"><img src="assets/img/likess.svg" alt=""></span></div>
                    </div>
                    <div class="message-footer">02:31 PM <img src="assets/img/green-tick.svg" alt=""></div>
                </div>
            </div>
            <div class="message message-received message-first">
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">Ok, Cool So Are you available for some time?</div>
                    </div>
                    <div class="message-footer">02:33 PM</div>
                </div>
            </div>
        </div>
        <div class="toolbar messagebar">
            <div class="toolbar-inner">
                <div class="messagebar-area">
                    <textarea placeholder="Type your message....."></textarea>
                </div>
                <a class="link send-btn" href="#"><img src="assets/img/send.svg" alt=""></a>
            </div>
            <div class="messagebar-sheet"></div>
        </div>
    </div>

</div>
<!-- /Main wrapper -->

<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/chat-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:16 GMT -->
</html>
