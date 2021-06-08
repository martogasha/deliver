<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/invoice-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:10 GMT -->
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

<body class="not-gray-bg">
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
            <div class="sliding custom-title">Invoices</div>
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

    <div class="page-content">
        <div class="container inv-section">
            <div class="top-inv-col">
                <div class="inv-logo">
                    <img alt="" src="../assets/img/logo.html" alt="">
                </div>
                <div class="order-details">
                    <p>Order: <span>#00124</span></p>
                    <p>Issued: <span>20/07/2019</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Invoice From</h5>
                    <ul class="inv-receiver">
                        <li>Dr. Darren Elder<br> 806 Twin Willow Lane, Old Forge,<br> Newyork, USA</li>
                    </ul>
                    <h5>Invoice To</h5>
                    <ul class="inv-receiver">
                        <li>Dr. Darren Elder<br> 806 Twin Willow Lane, Old Forge,<br> Newyork, USA</li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="payment-method">
                        <h5>Payment Method</h5>
                        <ul>
                            <li>Debit Card<br> XXXXXXXXXXXX-2541<br> HDFC Bank</li>
                        </ul>
                    </div>
                </div>
            </div>
            <table class="inv-table">
                <tbody>
                <tr>
                    <th class="text-align-left">Description</th>
                    <th class="text-align-center">Quantity</th>
                    <th class="text-align-center">VAT</th>
                    <th class="text-align-center">Total</th>
                </tr>
                <tr>
                    <td>
                        General Consultation
                    </td>
                    <td class="text-align-center">1</td>
                    <td class="text-align-center">$0</td>
                    <td class="text-align-center">$100</td>
                </tr>
                <tr>
                    <td>
                        Video Call Booking
                    </td>
                    <td class="text-align-center">1</td>
                    <td class="text-align-center">$0</td>
                    <td class="text-align-center">$520</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"><b>Subtotal</b></td>
                    <td colspan="1">$350</td>
                </tr>
                <tr>
                    <td colspan="3"><b>Discount</b></td>
                    <td colspan="1">-10%</td>
                </tr>
                <tr>
                    <td colspan="3"><b>Total Amout:</b></td>
                    <td colspan="1">$315</td>
                </tr>
                </tfoot>
            </table>
            <div class="invoice-info">
                <h5>Other information</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus.</p>
            </div>
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


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/invoice-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:10 GMT -->
</html>
