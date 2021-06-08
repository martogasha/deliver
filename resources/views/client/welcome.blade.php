@include('clientPartial.head')
<body>
<div class="main-wrapper">
    @include('clientPartial.sidebar')
    <div class="home">

        <div class="navbar two-action no-hairline">
            <div class="navbar-inner d-flex align-items-center">
                <div class="left">
                    <a href="#" class="link icon-only">
                        <i class="custom-hamburger">
                            <span><b></b></span>
                        </i>
                    </a>
                </div>
                <div class="sliding custom-title">Find Carrier</div>
                <div class="right d-flex">
                    <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
                    <a href="#" data-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right header_drop_icon">
                        <a href="{{url('profile')}}" class="dropdown-item">My Profile</a>
                        <a href="profile-settings.html" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content header-bg">
            <div class="top-search">
                <div class="container">
                    <div class="search-area">
                            <div class="list inset">
                                <ul>
                                    <li class="d-flex">
                                        <div class="item-icon">
                                            <i class="search-icon fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="item-col">
                                            <input type="text" id="from_places" placeholder="Search Location (Mombasa : Kenya)">
                                            <input type="hidden" id="origin" name="origin">
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="item-icon">
                                            <i class="search-icon fas fa-building"></i>
                                        </div>
                                        <div class="item-col">
                                            <input type="text" id="to_places" placeholder="Nairobi, Kenya">
                                            <input type="hidden" id="destination" name="destination">
                                        </div>
                                    </li>
                                </ul>
                                <div style="text-align: center">
                                <b><span id="distance" style="font-size: 15px"></span></b> <span>Km</span>
                                    <input type="hidden" name="distance" id="getDistance">
                                </div>
                                <hr>
                                    <div style="text-align: center">
                                <b><span id="price" style="font-size:25px;color:blue"></span></b> <span>/=</span>
                                        <input type="hidden" name="price" id="getPrice">

                                    </div>
                            </div>
                    </div>
                </div>
            </div>
                <button class="btn btn-primary btn-block" type="button" id="calculatePrice">Calculate Price</button>

            <!-- Doccure home -->
                <!-- Doccure home -->
                <div class="specialist-slider segments" id="carrierDiv">
                </div>

                <!-- /Doccure home -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check if Loaded</label>
            </div>

            <div class="main-wrapper">
                <div class="col-md-6 mb-4" id="fileInput">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type a brief detail about the load">
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-mdb-color btn-rounded float-left">
                            <input type="file" id="fileupload">
                        </div>
                    </div>
                        <div class="file-field">
                            <div class="z-depth-1-half mb-4">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                                     alt="example placeholder" id="upload-img">
                            </div>
                        </div>
                </div>

                    <div class="page-content pt-0">
                        <div class="container">
                            <!-- Schedule -->
                            <div class="schedule-timings">
                                <div class="container">
                                    <div class="block-title">Select day</div>
                                    <div class="swiper-container schedule-timings-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="sunday" name="checkbox" value="Sunday"/>
                                                        <div class="item-title">Sun</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="monday" name="checkbox" value="Monday"/>
                                                        <div class="item-title">Mon</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="tuesday" name="checkbox" value="Tuesday"/>
                                                        <div class="item-title">Tue</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="wednesday" name="checkbox" value="Wednesday"/>
                                                        <div class="item-title">Wed</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="thursday" name="checkbox" value="Thursday"/>
                                                        <div class="item-title">Thu</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="friday" name="checkbox" value="Friday"/>
                                                        <div class="item-title">Fri</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="item-content">
                                                    <div>
                                                        <input type="checkbox" id="saturday" name="checkbox" value="Saturday"/>
                                                        <div class="item-title">Sat</div>
                                                        <i class="icon icon-checkbox"></i>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="row text-center">

                <!--Grid column-->
                <!-- /Main wrapper -->

                <!-- Edit Time Slot Modal -->
                <div class="modal fade custom-modal" id="edit_time_slot">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Choose Pickup Time</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="hours-info">
                                        <div class="row form-row hours-cont">
                                            <div class="col-12 col-md-10">
                                                <div class="row form-row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Pickup Time</label>
                                                            <select class="form-control" id="time">
                                                                <option value="6:00">6:00</option>
                                                                <option value="7:00">7:00</option>
                                                                <option value="8:00">8:00</option>
                                                                <option value="9:00">9:00</option>
                                                                <option value="10:00">10:00</option>
                                                                <option value="11:00">11:00</option>
                                                                <option value="12:00">12:00</option>
                                                                <option value="1:00">1:00</option>
                                                                <option value="2:00">2:00</option>
                                                                <option value="3:00">3:00</option>
                                                                <option value="4:00">4:00</option>
                                                                <option value="5:00">5:00</option>
                                                            </select>
                                                            <br>
                                                            <select class="form-control" id="timeslot">
                                                                <option value="A.M">AM</option>
                                                                <option value="P.M">PM</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="submit-section text-center">
                                        <button type="button" id="booking" class="btn btn-primary submit-btn" aria-label="Close">Post</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Time Slot Modal -->

                <!-- /Doccure home -->

            <!-- focused -->
            <!-- end focused -->
        </div>
    </div>
<input type="hidden" id="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
    <input type="hidden" id="carrierType">
    <input type="hidden" id="originLng" value="{{$user->originLng}}">
</div>

<!-- Modal -->
<div class="modal fade" id="locationSaved" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border:none;border-radius: 5px;">
            <div class="modal-header" style="background: #1ab394;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
                <h4 class="modal-title text-center"><img src="https://lh3.googleusercontent.com/-Zxh4srAEtU0/Wp0cZV-PJuI/AAAAAAAAD4E/En5x5c53s44jzvG8M0sSyFZXoRhGXfBzwCL0BGAYYCw/h100/2018-03-05.png" alt=""></h4>
            </div>
            <div class="modal-body">
                <p style="text-align:center;color:#1ab394;font-size:24px;font-weight:500;">Location Saved!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- /Main wrapper -->
<!-- Modal -->
<div class="modal fade" id="bookingSuccess" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border:none;border-radius: 5px;">
            <div class="modal-header" style="background: #1ab394;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
                <h4 class="modal-title text-center"><img src="https://lh3.googleusercontent.com/-Zxh4srAEtU0/Wp0cZV-PJuI/AAAAAAAAD4E/En5x5c53s44jzvG8M0sSyFZXoRhGXfBzwCL0BGAYYCw/h100/2018-03-05.png" alt=""></h4>
            </div>
            <div class="modal-body">
                <p style="text-align:center;color:#1ab394;font-size:24px;font-weight:500;">Posted Success!</p>
            </div>
            <div class="modal-footer">
                <a href="{{url('search')}}"><button class="btn btn-info">View</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#fileInput').hide();
        x = navigator.geolocation;
        x.getCurrentPosition(success, failure);
        function success(position){
            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();
            var myLat = position.coords.latitude;
            var myLong = position.coords.longitude;
            var coords = (myLat + "," + myLong);
            var origin = (-1.2840302 + "," + 36.8232677);
            geocodeLatLng(geocoder,coords,infowindow);
            $value = origin;
            $value1 = coords;
        }
        function failure(){}
    });
    google.maps.event.addDomListener(window, 'load', function () {
        var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
        var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

        google.maps.event.addListener(from_places, 'place_changed', function () {
            var from_place = from_places.getPlace();
            var from_address = from_place.formatted_address;
            $('#origin').val(from_address);
        });

        google.maps.event.addListener(to_places, 'place_changed', function () {
            var to_place = to_places.getPlace();
            var to_address = to_place.formatted_address;
            $('#destination').val(to_address);
        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#distance').text(Math.ceil(distance_in_kilo.toFixed(2)));
                    $('#getDistance').val(Math.ceil(distance_in_kilo.toFixed(2)));
                    var dist = Math.ceil(distance_in_kilo.toFixed(2));
                }
                $.ajax({
                    type: "get",
                    url: "getCarrierPrice/" + dist,
                    data: "",
                    cache:false,
                    success: function (data) {
                        $('#carrierDiv').html(data);
                    }
                });
            }
        }

        $('#calculatePrice').click(function () {
            calculateDistance();
        });
        $('#booking').click(function () {
            booking();
        });

        function booking(){
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var distance = $('#getDistance').val();
            var price = $('#getPrice').val();
            var carrier = $('#carrierType').val();
            var time = $('#time').val();
            var timeslot = $('#timeslot').val();
            var user_id = $('#user_id').val();
            $.ajax({
                type: "get",
                url: "book",
                data: {'origin':origin, 'destination':destination, 'distance':distance, 'price':price, 'carrier':carrier, 'time':time, 'timeslot':timeslot, 'user_id':user_id},
                cache:false,
                success: function (data) {
                    $('#edit_time_slot').modal('hide');
                    $('#bookingSuccess').modal('show');
                }
            });
        }

    });
    function geocodeLatLng(geocode,coords,infowindow) {
        const input = coords;
        const latlngStr = input.split(",", 2);
        const latlng = {
            lat: parseFloat(latlngStr[0]),
            lng: parseFloat(latlngStr[1]),
        };
    geocode.geocode({ location: latlng }, (results, status) => {
        if (status === "OK") {
            if (results[0]) {
                $('#from_places').val(results[0].formatted_address);
                $('#origin').val(results[0].formatted_address);
                $('#originLat').val(results[0].geometry.location.lat);
                $('#originLng').val(results[0].geometry.location.lng);
                $value = results[0].geometry.location.lat;
                $value1 = results[0].geometry.location.lng;
                $value2 = $('#user_id').val();
            } else {
                window.alert("No results found");
            }
        } else {
            window.alert("Geocoder failed due to: " + status);
        }
    });
    }

    $('#sunday').on('change', function () {
     if($(this).is(':checked')){
         $('#edit_time_slot').modal('show');
     }
    });
    $('#monday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    });
    $('#tuesday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    });
    $('#wednesday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    });
    $('#thursday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    });
    $('#friday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    }); $('#saturday').on('change', function () {
        if($(this).is(':checked')){
            $('#edit_time_slot').modal('show');
        }
    });
    $(function(){
        $("#fileupload").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#upload-img").attr("src",x);
            console.log(event);
        });
    });
    $('input[type="checkbox"]').click(function(){
        if($(this).prop("checked") == true){
            $('#fileInput').show();
        }
        else if($(this).prop("checked") == false){
            $('#fileInput').hide();

        };
    });
</script>
<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:20:44 GMT -->
</html>
