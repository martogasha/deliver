@include('clientPartial.head')
@include('clientPartial.sidebar')
    <div class="navbar two-action no-hairline">
        <div class="navbar-inner d-flex align-items-center">
            <div class="left">
                <a href="#" class="link icon-only">
                    <i class="custom-hamburger">
                        <span><b></b></span>
                    </i>
                </a>
            </div>
            <div class="sliding custom-title">Carrier Details</div>
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

    <div class="page-content profile-settings">

        <!-- Profile settings -->
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="checkout">
                    <div class="panel panel-default">
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">

                                <div class="doctor-widget doctor-dashboard">
                                    <div class="doc-info-left">
                                        <div class="doctor-img">
                                            <a class="doctor-img-profile" href="doctor-profile.html">
                                                <img src="{{asset('assets/img/doctors/doctor-02.jpg')}}" class="img-fluid img-circle" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <div class="toggle-icon-doctor">
                                                <h5 class="doc-department">
                                                    <span class="speciality-img"><img src="{{asset('assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality"></span>
                                                </h5>
                                            </div>
                                            <h4 class="doc-name"><a href="doctor-profile.html">{{$booking->carrier->first_name}} {{$booking->carrier->last_name}}</a></h4>
                                            <span>{{$booking->carrier->plates}}</span>
                                            <br>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(47) <a href="#">reviews</a></span>
                                            </div>
                                            <div class="doc-info custom-info">
                                                <div class="doc-location">
                                                    <p><button class="btn btn-info">{{$booking->carrier->phone}}</button></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-summary">
                                    <div class="title-col">
                                        <h5>Booking Summary</h5>
                                    </div>
                                    <div class="summary-col">
                                        <div class="summary-col-inner">
                                            <div>Client<span>{{$booking->user->first_name}} {{$booking->user->last_name}}</span></div>
                                            <div>Date <span>(Mon)16 Nov 2019</span></div>
                                            <div>Time<span>{{$booking->time}} {{$booking->amPm}}</span></div>
                                            <div>Price<span style="color: black"><b>Ksh {{$booking->price}}</b></span></div>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    @if($booking->status == 0)
                                    <li class="bottom-button two-button">
                                        <button>Cancel Request</button>
                                    </li>
                                    @else
                                    @endif
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="payment">
                    <div class="panel panel-default">
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">

                                <div class="widget-title">
                                    <h5>Payment Information</h5>
                                </div>
                                <div class="setting-widget">
                                    <div class="list no-hairlines-md pricing-col no-border">
                                        <form>
                                            <ul>
                                                <li class="for-tab-fullwidth">
                                                    <div class="custom-control custom-radio custom-control-inline d-flex justify-content-between">
                                                        <div>
                                                            <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
                                                            <label class="custom-control-label" for="customRadio1"><span>Credit Card</span></label>
                                                        </div>
                                                        <div>
                                                            <div class="item-icon"><img src="assets/img/credit-card.svg" alt=""></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content item-input">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">Name on Card <span>*</span></div>
                                                        <div class="item-input-wrap">
                                                            <input type="text">
                                                            <span class="input-clear-button"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content item-input">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">Card Number <span>*</span></div>
                                                        <div class="item-input-wrap">
                                                            <input type="text" placeholder="1234 5678 9876 5432">
                                                            <span class="input-clear-button"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content item-input col-50 gender">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">Expiry Month <span>*</span></div>
                                                        <div class="item-input-wrap">
                                                            <input type="text" placeholder="MM">
                                                            <span class="input-clear-button"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content item-input col-50 dob">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">Expiry Year <span>*</span></div>
                                                        <div class="item-input-wrap">
                                                            <input type="text" placeholder="YY">
                                                            <span class="input-clear-button"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item-content item-input">
                                                    <div class="item-col">
                                                        <div class="item-title item-label">CVV <span>*</span></div>
                                                        <div class="item-input-wrap">
                                                            <input type="text">
                                                            <span class="input-clear-button"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>

                                <div class="setting-widget padding-less">
                                    <div class="list no-hairlines-md pricing-col no-border">
                                        <form>
                                            <ul>
                                                <li class="for-tab-fullwidth">
                                                    <div class="custom-control custom-radio custom-control-inline d-flex justify-content-between">
                                                        <div>
                                                            <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2">
                                                            <label class="custom-control-label" for="customRadio2"><span>Paypal</span></label>
                                                        </div>
                                                        <div>
                                                            <div class="item-icon"><img src="assets/img/paypal.svg" alt=""></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="list acceptence-col">
                                    <ul>
                                        <li>
                                            <label class="item-checkbox item-content">
                                                <input type="checkbox" name="checkbox" value="accept" />
                                                <i class="icon icon-checkbox"></i>
                                                <div class="item-col">
                                                    <div class="item-title">I have read and accept <a href="#">Terms & Conditions</a></div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <ul>
                                    <li class="bottom-button">
                                        <button class="btn">Confirm and Pay</button>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Profile settings -->
    </div>
        <div class="fixed-chat-col">
            <a href="{{url('message')}}"><img src="assets/img/chat-icon.svg" alt=""></a>
        </div>

</div>
<!-- /Main wrapper -->

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Swiper JS -->
<script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body>


<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/patient-date-time.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:26:18 GMT -->
</html>
