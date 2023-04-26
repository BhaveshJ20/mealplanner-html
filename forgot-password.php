<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Forgot Password Start -->
<section class="login-wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 ms-md-auto me-lg-5">
                <div class="card-box form-card bg-white">
                    <div class="form-card-header text-center mb-4">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-primary">Forgot Password</h1>
                        </div>
                        <p class="text-center fw-bold pb-1">Enter your Email Address to reset the password</p>
                    </div>
                    <div class="form-card-body">
                        <form class="cmxform" id="forgotForm" method="post" action="">
                            <div class="mb-4 position-relative">
                                <input id="forgotemail" type="email" name="email" class="form-control" placeholder="Email Address" required />
                            </div>
                            <div><button type="submit" class="btn btn-primary w-100 submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bg"><img src="assets/images/Login_bg.png" class="img-fluid" alt=""/></div>
    <div class="login-graphic-bg"><img src="assets/images/Login_graphic.png" class="img-fluid" alt=""/></div>
</section>
<!-- Forgot Password End -->

<?php
include("footer_common.php");
?>