<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Login Start -->
<section class="login-wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 ms-md-auto me-lg-5">
                <div class="card-box form-card bg-white">
                    <div class="form-card-header text-center mb-4">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-primary">Log in to your account</h1>
                        </div>
                        <p class="text-center fw-bold pb-1">Welcome back! Please enter your details.</p>
                    </div>
                    <div class="form-card-body">
                        <form class="cmxform" id="commentForm" method="post" action="">
                            <div class="mb-4 position-relative">
                                <input id="cemail" type="email" name="email" placeholder="Email Address" class="form-control" required />
                            </div>
                            <div class="form-field-wrap mb-3">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required />
                                <a href="javascript:void(0);" class="field-icon icon-hide password_preview"></a>
                            </div>
                            <div class="d-sm-flex justify-content-between align-items-center mb-5">
                                <div class="text-small text-secondary"><i class="icon-error lead fs-4 fw-medium align-middle"></i><span class="d-inline-block pt-1">Your email or password is incorrect</span></div>
                                <div class="text-end"><a href="./forgot-password.php" class="link-hover-underline link-secondary fw-bold">Forgot password ?</a></div>
                            </div>
                            <div><button type="submit" class="btn btn-primary w-100 submit">Sign in</button></div>
                        </form>
                    </div>
                    <div class="form-card-footer text-center">
                        <div class="title">
                            <h2 class="title-xs fw-bold">OR</h2>
                        </div>
                        <p class="lead fw-medium mb-4">Continue With</p>
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <a href="javascript:void(0);" class="form-icon shadow-normal mx-2"><img src="assets/images/google.svg" width="20" alt="Google"/></a>
                            <a href="javascript:void(0);" class="form-icon bg-fb-blue mx-2"><i class="icon-facebook text-white"></i></a>
                        </div>
                        <p class="text-small text-gray fw-medium">Don’t have an account? <a href="./registration.php" class="link-secondary link-hover-underline fw-bold">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bg"><img src="assets/images/Login_bg.webp" class="img-fluid" alt=""/></div>
    <div class="login-graphic-bg"><img src="assets/images/Login_graphic.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Login End -->

<?php
include("footer_common.php");
?>