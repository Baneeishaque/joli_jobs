<?php
include_once('db.php');

if (isset($_POST['job_title'])) {


    $job_title = $_POST['job_title'];
    $job_role = $_POST['job_role'];
    $employer = $_POST['employer'];
    $job_description = $_POST['job_description'];
    $number = $_POST['number'];
    $place = $_POST['job_place'];
    $date = date('Y-m-d');
    $wa_number = ($_POST['wa_number'] ? $_POST['wa_number'] : '');
    // $category = ($_POST['category']?$_POST['category']:'');
    if (isset($_POST['category']) && !empty($_POST['category'])) {
        $category = $_POST['category'];
    } else {
        $category = $_POST['category2'];
    }

    $sql = "
    INSERT INTO `vacancies` (`id`, `job_title`, `job_role`, `employer_name`, `job_description`, `contact_number`, `date_post`, `whatsapp_number`, `category`, `place`) 
    VALUES (NULL, '" . $job_title . "', '" . $job_role . "', '" . $employer . "', '" . $job_description . "', '" . $number . "', '" . $date . "', '" . $wa_number . "', '" . $category . "', '" . $place . "');
    ";
    if ($conn->query($sql) === TRUE) {
        $message = "vacancy added successfully";
    } else {
        $message = "something went wrong! Please try again :)";
    }
}


$categories = $conn->query("SELECT * FROM `categories`");
?>
<?php
include_once('header.php');
?>
<!-- Banner -->
<header class="innner-page">
    <div class="container">
        <h1><i class="fa fa-angle-double-right" aria-hidden="true"></i> Submit Your Application</h1>
    </div>
</header>

<!--Apply Job / Submit Application-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-dark">
                <!--Services Heading-->
                <h2 class="section-heading text-dark">Submit <span>Your Application</span></h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <div class="konnect-space"></div>
            </div>
        </div>

        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>

        <form class="konnect-form" id="contactForm" method="POST" action="">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="job_title" placeholder="Job Tittle"
                           required="required" style="margin-top: 6%;">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="job_role" placeholder="Job Role"
                           required="required" style="margin-top: 6%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="employer" placeholder="Employer Name"
                           required="required" style="margin-top: 6%;">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="job_description"
                           placeholder="Job description" required="required" style="margin-top: 6%;">
                    <input type="text" class="form-control" id="place" name="job_place" placeholder="Place"
                           required="required" style="margin-top: 6%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="number" placeholder="Contact Number"
                           required="required" style="margin-top: 6%;">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="wa_number" placeholder="Whatsapp Number"
                           required="required" style="margin-top: 6%;">
                </div>
            </div>


            <!-- <label for="">job title</label>
             <input type="text" name="job_title" required="required">
             <br/><br/><br/>

             <label for="">job role</label>
             <input type="text" name="job_role" required="required">
             <br/><br/><br/>

             <label for="">employer name</label>
             <input type="text" name="employer" required="required">
             <br/><br/><br/>

             <label for="">job description</label>
             <input type="text" name="job_description" required="required">
             <br/><br/><br/>

             <label for="">contact number</label>
             <input type="text" name="number" required="required">
             <br/><br/><br/>

             <label for="">whatsapp number</label>
             <input type="text" name="wa_number">
             <br/><br/><br/>-->

            <label for="">category</label>
            <div class="row">
                <div class="col-md-4">
                    <?php
                    if ($categories->num_rows > 0) {
                        echo '<select class="form-control " name="category">';
                        while ($row = $categories->fetch_assoc()) {
                            ?>

                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                        }
                        echo '</select>';
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="phone" name="category2" placeholder="Whatsapp Number"
                           required="required style=" margin-top: 6%;">
                </div>


            </div>
            <br/><br/><br/>

            <input class="konnect-submit" type="submit" name="" id="" value="submit">

        </form>
    </div>
</section>
<br/>
<br/>
<br/>
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
<a target="_blank" style="position:fixed; bottom: 10px; right:10px;z-index:999"
   href="http://www.konnectplugins.com/template/recruit-plus-staffing-and-recruiting-wordpress-theme/"
   rel="nofollow"></a>
<!-- jQuery -->

<script src="assets/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/default.js"></script>
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

</script>
<!-- <script src="js/jquery-1.12.4.min.js"></script> -->

<!--======= Bootstrap =========-->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!--======= Touch Swipe =========-->
<script src="js/jquery.touchSwipe.min.js"></script>

<!--======= Customize =========-->
<script src="js/responsive_bootstrap_carousel.js"></script>

</body>
</html>
