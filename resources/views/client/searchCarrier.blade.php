@include('clientPartial.head')
<body>
<div class="main-wrapper">
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
            <div class="sliding custom-title">Posted Request</div>
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
        <div class="container">

            <!-- Search tag -->
            <!-- /Search tag -->

            <!-- focused -->
            <div class="focused segments mt-0 pb-0 search-doctor">
                <div class="focused-content">
                    <div class="swiper-container">
                        @foreach($bookings as $booking)
                        <div class="doctor-widget">
                            <div class="doc-info-left">
                                <div class="doctor-img">
                                        <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name"><a href="{{url('carrierDetail',$booking->id)}}">{{$booking->user->first_name}} {{$booking->user->last_name}}</a></h4>
                                    <p class="doc-speciality"><b>Motorcycle</b></p>
                                    <p class="doc-speciality"><b>From</b> - {{$booking->origin}}</p>
                                    <p class="doc-speciality"><b>To</b> - {{$booking->destination}}</p>
                                    <p class="doc-speciality"><b>Distance</b> - {{$booking->distance}}Km</p>
                                    <h5 class="doc-department">
                                        @if($booking->status==1)
                                            <span class="speciality-img"><img src="assets/img/check-circle-big.svg" class="img-fluid" alt="Speciality"></span>Checked in
                                        @else
                                        @endif
                                        <span class="doc-experince">{{$booking->time}} {{$booking->amPm}}</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="doc-info-right">
                                <div class="clini-infos">
                                    <ul>
                                        @if($booking->carrier != null  )
                                        <li><i class="far fa-thumbs-up"></i><b style="color:green">Request Received</b></li>
                                        @else
                                            <li></li>
                                            @endif
                                        <li><b>Ksh {{$booking->price}}</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Filter -->
            <!-- /Filter -->

            <!-- Rating popup -->
            <div class="modal fade" id="doctor-filter-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="link popup-close close" href="#" data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="popup custom-filter-popup">
                                <div class="inner-popup-block">
                                    <div class="filter-col">
                                        <form method="post">
                                            <input type="text" class="filter-box" placeholder="Filter">
                                            <input type="submit" name="" class="clear-btn" value="Clear">
                                        </form>
                                    </div>
                                    <div class="block-title">Date</div>
                                    <div class="list no-hairlines-md">
                                        <ul>
                                            <li>
                                                <input type="text" name="date" id="date" data-select="datepicker">
                                                <span class="calendar-icon"><img src="assets/img/icon-metro-calendar-big.svg" alt=""></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="block-title">Gender</div>
                                    <div class="list custom-list-two">
                                        <ul>
                                            <li>
                                                <div class="item-radio item-content">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
                                                        <label class="custom-control-label" for="customRadio1"><span>Male</span></label>
                                                        <span class="gender-icon">
																<img src="assets/img/maledoc.svg" alt="">
															</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-radio item-content">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2">
                                                        <label class="custom-control-label" for="customRadio2"><span>Female</span></label>
                                                        <span class="gender-icon">
																<img src="assets/img/doctofemr.svg" alt="">
															</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="block-title">Select Specialist</div>
                                    <div class="list custom-list-two custom-specialist">
                                        <ul>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Urology">
                                                        <label class="custom-control-label" for="Urology">Urology</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Cardiologist">
                                                        <label class="custom-control-label" for="Cardiologist">Cardiologist</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Dentist">
                                                        <label class="custom-control-label" for="Dentist">Dentist</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Neurology">
                                                        <label class="custom-control-label" for="Neurology">Neurology</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Orthologist">
                                                        <label class="custom-control-label" for="Orthologist">Orthologist</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="item-content item-checkbox">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Gynaecology">
                                                        <label class="custom-control-label" for="Gynaecology">Gynaecology</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="apply-filter-btn" data-dismiss="modal" aria-label="Close">
                                    <a href="#" class="btn">Apply Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Rating popup -->

            <!-- end focused -->

        </div>
    </div>

</div>
<!-- /Main wrapper -->
<!-- Modal -->
<div class="modal fade" id="requestSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="page-content pt-0 pb-0">
                    <div class="booking-success-col">
                        <div class="booking-middle">
                            <div class="booking-middle-inner">
                                <span class="tick-icon"><img src="assets/img/check-circle-big.svg" alt=""></span>
                                <div class="success-full-text">
                                    <h3>Request Received Successfully!</h3>
                                </div>
                                <div class="view-btn-col"><a href="{{url('search')}}" class="btn">View</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="user_idd" value="{{\Illuminate\Support\Facades\Auth::id()}}">

<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Datepicker JS -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/jquery.datepicker2.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

</body>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('b9e0acae9a5cc17695f9', {
        cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        var user = $('#user_idd').val();
        var carrier = data.carrier_id;

            $('#requestSuccess').modal('show');
            $('#requestReceived').html('<i class="far fa-thumbs-up"></i><b style="color:green">Request Received</b>')



    });

    // Vue application
</script>

