<?php
include_once('header.php');
?>
<!-- Banner -->
<header class="innner-page">
    <div class="container">
        <h1><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</h1>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <!-- Contact Form-->
            <div class="col-sm-6 margin-bottom-20" style="margin-top: 4%;">
                <div class="col-12 contact-address-box">
                    <h3>Reach Us</h3>
                    <br>
                    <p><i class="fa fa-street-view" aria-hidden="true"></i> 55/558 2nd floor Moins Building, Near
                        Manorama Junction<br>
                        Panampilly Nagar Pin: 682036</p>
                    <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 9544773656, 9544778622, 9037735602
                    </p>
                    <p><i class="fa fa-paper-plane" aria-hidden="true"></i> jolijobs4you@gmail.com</p>
                </div>
            </div>
            <!--Google Map-->
            <div class="col-sm-6 small-map">
                <div id="map"></div>
                <div id="cont" style="display:none"><img src='img/logo.png' width='120' alt="logo">
                    <p style='color:#0A84CB;font-size:16px;'>Panampilly Nagar<br>
                        Ernakulam, Kerala, INDIA</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Call To Action-->
<aside class="dark-bg">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h3 class="margin-0">Want to Get in Touch with us <a href="registration.php" class="konnect-button-3">Submit
                        Your Query</a></h3>
            </div>
        </div>
    </div>
</aside>
<!--Contact Us-->
<section class="footer-contact">
    <div class="container">
        <div class="row">
            <!-- About Us-->
            <div class="col-md-3 col-sm-6 footer-box"><img src="img/logo.png">
            </div>

            <!-- Address-->
            <div class="col-md-3 col-sm-6 footer-box"><img src="img/icons/location.png" alt="icon"
                                                           class="konnect-contact-icon">
                <h3>Our <span class="color-default">Location</span></h3>
                <p>55/558 2nd floor Moins Building, Near Manorama Junction<br>
                    Panampilly Nagar Pin: 682036</p>
            </div>

            <!--     Phone Numbers-->
            <div class="col-md-3 col-sm-6 footer-box"><img src="img/icons/phone.png" alt="icon"
                                                           class="konnect-contact-icon">
                <h3>Phone <span class="color-default">Contact</span></h3>
                <p>9544773656<br>
                    9544778622<br>
                    9037735602</p>
            </div>

            <!-- Email Details -->
            <div class="col-md-3 col-sm-6 footer-box"><img src="img/icons/email.png" alt="icon"
                                                           class="konnect-contact-icon">
                <h3>Email <span class="color-default">Us</span></h3>
                <p>jolijobs4you@gmail.com

            </div>
        </div>
    </div>
</section>
<!--Back To Top-->
<span id="back-to-top" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip"
      data-placement="left"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span><!--Main Footer-->

<footer class="konnect-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">

                <!--Footer Social Icons-->
                <div class="contact-social">
                    <p>
                        <a href="https://www.facebook.com/JOLi-JOBS-com-100954461307994/?ref=aymt_homepage_panel&eid=ARDg7qU2YctwZSg0KTN1TxMA43oX304wIxWBv5R0tqFjVbDIySUr9QV7pQAOnM_rTsctoa0r9fH5UkfZ"
                           target="blank"> <i class="fa fa-facebook"></i> </a> <a
                                href="https://www.instagram.com/jolijobs.c/"> <i class="fa fa-instagram"></i> </a></p>
                </div>
            </div>

            <!-- Footer Copy rights-->
            <div class="col-sm-6 text-right">
                <p> &copy;2019 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->

<script src="assets/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/default.js"></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: 9.96556632, lng: 76.294326},
            scrollwheel: false,
            getMap: true
        });
        var infowindow = new google.maps.InfoWindow({
            content: document.getElementById("cont").innerHTML
        });
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            icon: "img/map-icon.png",
            map: map
        });
        infowindow.open(map, marker);
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5u8QmAP6DxLCQrbI5QnH9Y4n6xLBV2V0&amp;callback=initMap">
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-77800499-1', 'auto');
    ga('send', 'pageview');

</script></body>


</html>
