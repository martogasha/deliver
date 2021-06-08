<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:28 GMT -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<div class="main-wrapper">

    <div class="page-content change-password-col register-col">
        <div class="list no-hairlines custom-form">
            <div class="back-btn"><a href="index.html" class="back link">
                    <img src="assets/img/left-arrow-big-black.svg" alt=""></a>
            </div>
            <div class="logo">
            </div>
            <div class="register-inner-col">
                <div class="top-title">
                    <div>
                        <h3>Register</h3>
                    </div>
                    <div>
                        <a href="{{url('carrierRegister')}}">Are you a Carrier?</a>
                    </div>
                </div>
                <form action="{{route('Register')}}" method="post">
                    @csrf
                <ul class="change-list">
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" name="first_name" placeholder="First Name" required>
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" name="last_name" placeholder="Last Name" required>
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>

                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="tel" name="phone" placeholder="Mobile Number" required>
                                <div class="item-input-icon"><img src="assets/img/smartphone.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" name="email" id="email" placeholder="Email Address" required>
                                <div class="item-input-icon"><img src="assets/img/email.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" name="password" id="pass" placeholder="Create Password" required>
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>

                        <div id="CheckPasswordMatch">
                        </div>
                    </li>
                    <input type="hidden" name="role" value="1">
                    <li class="item-content item-input">
                        <div class="item-input-wrap submit-btn-col">
                            <button type="submit" class="btn btn-submit">Register</button>
                        </div>
                    </li>
                </ul>
                </form>
                <span class="login-back">Already have an account ? <a href="{{url('/')}}">Login Now!</a></span>
            </div>
        </div>
    </div>

</div>
<!-- /Main wrapper -->

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script>

    $('#confirmPassword').keyup(function () {
        var password = $('#pass').val();
        var confirmPassword = $('#confirmPassword').val();
        if (password != confirmPassword)
            $('#CheckPasswordMatch').html('Password Dont Match')
        else
            $('#CheckPasswordMatch').html('Password Match')

    });
</script>
</body>


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:30 GMT -->
</html>
