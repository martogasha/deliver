@include('driverPartial.head')
@include('driverPartial.sidebar')

    <div class="navbar two-action no-hairline">
        <div class="navbar-inner d-flex align-items-center">
            <div class="left">
                <a href="#" class="link icon-only">
                    <i class="custom-hamburger">
                        <span><b></b></span>
                    </i>
                </a>
            </div>
            <div class="sliding custom-title">Accepted Requests</div>
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
@include('flash_message')
    <div class="page-content favourites pt-0">
        <div class="block mt-0">

            <!-- focused -->
            <div class="focused segments mt-0 pb-0">
                <div class="container">
                    <div class="focused-content">
                        <div class="swiper-container">
                            @foreach($bookings as $booking)
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="doctor-profile.html">
                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="doctor-profile.html">{{$booking->user->first_name}} {{$booking->user->last_name}}</a></h4>
                                        <p class="doc-speciality">From - {{$booking->origin}}</p>
                                        <p class="doc-speciality">To -{{$booking->destination}}</p>
                                        <p class="doc-speciality">Distance -{{$booking->distance}}Km</p>
                                        <h5 class="doc-department">
                                            @if($booking->status==1)
                                            <span class="speciality-img"><img src="assets/img/check-circle-big.svg" class="img-fluid" alt="Speciality"></span>Checked in
                                            @else
                                            @endif
                                        </h5>
                                        <div class="doc-info">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(47)</span>
                                            </div>
                                            <div class="doc-location">
                                                <p><button class="btn-primary" data-toggle="modal" data-target="#clientDetails"> Details</button></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-clock"></i> Available on Fri, {{$booking->time}} {{$booking->amPm}}</li>
                                            <li><b>Ksh {{$booking->price}}</b></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <div class="clinic-btn">
                                            <a class="apt-btn" href="{{url('clientDetails',$booking->id)}}">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- end focused -->

        </div>
    </div>
</div>
<!-- /Main wrapper -->
<div class="modal fade" id="clientDetails" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border:none;border-radius: 5px;">
            <div class="modal-header" style="background: #1ab394;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
                <h4 class="modal-title text-center"><img src="https://lh3.googleusercontent.com/-Zxh4srAEtU0/Wp0cZV-PJuI/AAAAAAAAD4E/En5x5c53s44jzvG8M0sSyFZXoRhGXfBzwCL0BGAYYCw/h100/2018-03-05.png" alt=""></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>
<script>
    $('.view').click(function () {
        var booking_id = $(this).attr('id');
        $.ajax({
        type: "get",
        url: "takeRequest",
        data: {'booking_id':booking_id},
        cache:false,
        success: function (data) {
            alert(data);
        }
    });
    });

</script>

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/favourites.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:11 GMT -->
</html>
