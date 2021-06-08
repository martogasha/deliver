<!-- Doccure home -->
    <div class="container">
        <div class="section-title">
            <h3>Carriers
                <a href="search-doctor.html" class="see-all-link">View All</a>
            </h3>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content" id="motor">
                        <img src="assets/img/motorcycle.svg" alt="">
                        <div class="text">
                           Ksh:<b>{{$distance*10}}</b>
                            <input type="hidden" id="motorPrice" value="{{$distance*10}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content" id="car">
                        <img src="assets/img/car.svg" alt="">
                        <div class="text">
                            Ksh:<b>{{$distance*20}}</b>
                            <input type="hidden" id="carPrice" value="{{$distance*20}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content" id="pickup">
                        <img src="assets/img/lorry.svg" alt="">
                        <div class="text">
                            Ksh:<b>{{$distance*30}}</b>
                            <input type="hidden" id="pickupPrice" value="{{$distance*30}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content" id="truck">
                        <img src="assets/img/truck.svg" alt="">
                        <div class="text">
                            Ksh:<b>{{$distance*40}}</b>
                            <input type="hidden" id="truckPrice" value="{{$distance*40}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content" id="transit">
                        <img src="assets/img/transit.svg" alt="">
                        <div class="text">
                            Ksh:<b>{{$distance*50}}</b>
                            <input type="hidden" id="transitPrice" value="{{$distance*50}}">
                        </div>
            </div>
        </div>
    </div>
            <script>
                $('#motor').click(function () {
                    $('#price').text($('#motorPrice').val());
                    $('#getPrice').val($('#motorPrice').val());
                    $('#carrierType').val('Motorcycle')
                    $(this).css({
                        'background' : 'grey',
                    })
                    $('#car').css({
                        'background' : ''
                    })
                    $('#pickup').css({
                        'background' : ''
                    })
                    $('#truck').css({
                        'background' : ''
                    })
                    $('#transit').css({
                        'background' : ''
                    })
                });
                $('#car').click(function () {
                    $('#price').text($('#carPrice').val());
                    $('#getPrice').val($('#carPrice').val());
                    $('#carrierType').val('Car')
                    $(this).css({
                        'background' : 'grey',
                    })
                    $('#motor').css({
                        'background' : ''
                    })
                    $('#pickup').css({
                        'background' : ''
                    })
                    $('#truck').css({
                        'background' : ''
                    })
                    $('#transit').css({
                        'background' : ''
                    })
                });
                $('#pickup').click(function () {
                    $('#price').text($('#pickupPrice').val());
                    $('#getPrice').val($('#pickupPrice').val());
                    $('#carrierType').val('Pickup')
                    $(this).css({
                        'background' : 'grey',
                    })
                    $('#motor').css({
                        'background' : ''
                    })
                    $('#car').css({
                        'background' : ''
                    })
                    $('#truck').css({
                        'background' : ''
                    })
                    $('#transit').css({
                        'background' : ''
                    })
                });
                $('#truck').click(function () {
                    $('#price').text($('#truckPrice').val());
                    $('#getPrice').val($('#truckPrice').val());
                    $('#carrierType').val('Truck')
                    $(this).css({
                        'background' : 'grey',
                    })
                    $('#motor').css({
                        'background' : ''
                    })
                    $('#car').css({
                        'background' : ''
                    })
                    $('#pickup').css({
                        'background' : ''
                    })
                    $('#transit').css({
                        'background' : ''
                    })
                });
                $('#transit').click(function () {
                    $('#price').text($('#transitPrice').val());
                    $('#getPrice').val($('#transitPrice').val());
                    $('#carrierType').val('Transit')
                    $(this).css({
                        'background' : 'grey',
                    })
                    $('#motor').css({
                        'background' : ''
                    })
                    $('#car').css({
                        'background' : ''
                    })
                    $('#pickup').css({
                        'background' : ''
                    })
                    $('#truck').css({
                        'background' : ''
                    })
                });
            </script>
<!-- /Doccure home -->
