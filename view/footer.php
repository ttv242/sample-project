<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3 class="mb-4">About</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
                <ul class="list-unstyled ">
                    <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span
                            class="">34
                            Street Name, City Name Here, United States</span></li>
                    <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span
                            class="">+1
                            242 4942 290</span></li>
                    <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class=""><a
                                href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="345d5a525b744d5b4146505b59555d5a1a575b59">[email&#160;protected]</a></span>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3 class="mb-4">Links</h3>
                <ul class="list-unstyled ">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Destination</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="mb-4">Latest Blog</h3>
                <ul class="list-unstyled blog-entry-footer">
                    <li><a href="#">
                            <span class="post-meta">March 20, 2018</span>
                            <h3>7 Best Destination in The World</h3>
                        </a>
                    </li>
                    <li><a href="#">
                            <span class="post-meta">March 20, 2018</span>
                            <h3>4 Hour Work Week And The Rest Is Travel</h3>
                        </a>
                    </li>
                    <li><a href="#">
                            <span class="post-meta">March 20, 2018</span>
                            <h3>Why You Should Travel Today</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Connect</h3>
                <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">

                Copyright &copy;
                <script data-cfasync="false"
                    src="view/js/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                    target="_blank">Colorlib</a>

            </div>
        </div>
    </div>
</footer>


<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#f4b214" />
    </svg></div>
<script src="view/js/jquery-3.2.1.min.js"></script>
<script src="view/js/jquery-migrate-3.0.0.js"></script>
<script src="view/js/popper.min.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/owl.carousel.min.js"></script>
<script src="view/js/jquery.waypoints.min.js"></script>
<script src="view/js/jquery.stellar.min.js"></script>
<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            { types: ['geocode'] });

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;libraries=places&amp;callback=initAutocomplete"
    async defer></script>
<script src="view/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
    integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
    data-cf-beacon='{"rayId":"7b9408633cd16c2a","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:37:32 GMT -->

</html>