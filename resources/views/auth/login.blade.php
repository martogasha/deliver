<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:25:46 GMT -->
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
@include('flash_message')
<div class="main-wrapper">
    <div class="page-content change-password-col register-col">
        <div class="list no-hairlines custom-form">
            <div class="back-btn"><a href="index.html" class="back link">
                    <img src="assets/img/left-arrow-big-black.svg" alt=""></a>
            </div>
            <div class="register-icon">
                <img src="assets/img/icon.jpg" alt="">
            </div>
            <div class="register-inner-col">
                <div class="top-title">
                    <div>
                        <h3>Login</h3>
                    </div>
                    <div>
                        <a href="{{url('carrierRegister')}}">Are you Carrier?</a>
                    </div>
                </div>
                <form action="{{route('Login')}}" method="post">
                    @csrf
                <ul class="change-list">
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" name="phone" placeholder="Phone Number">
                                <div class="item-input-icon"><img src="assets/img/email.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" name="password" placeholder="Password">
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="col-50 save-password">
                    </li>
                    <li class="col-50 forgot-password">
                        <a href="forgot-password.html">Forgot Password ?</a>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-input-wrap submit-btn-col">
                            <button type="submit" class="btn btn-submit">Login Now</button>
                        </div>
                    </li>
                </ul>
                </form>
                <span class="login-back">Don't have an login ? <a href="{{url('register')}}">Signup Now!</a></span>
                <div class="bottom-social-btn">
                    <ul>
                        <li><a href="#" class="facebook"><span><img src="assets/img/facebook-letter.svg" alt="facebook"></span>Facebook</a></li>
                        <li><a href="#" class="google"><span><img src="assets/img/google-plus-letter.svg" alt="googleplus"></span>Google</a></li>
                    </ul>
                </div>
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


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:25:49 GMT -->
</html>
