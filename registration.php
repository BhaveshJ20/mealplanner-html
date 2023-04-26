<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Registration Start -->
<section class="login-wrap">
    <div class="container">
    <!-- HTML to write -->
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 ms-md-auto me-lg-5">
                <div class="card-box form-card bg-white">
                    <div class="form-card-header text-center mb-4">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-primary">Welcome to Meal Planner!</h1>
                        </div>
                        <p class="text-center fw-bold pb-1">Sign Up for a free 7-days trial</p>
                    </div>
                    <div class="form-card-body">
                        <form class="cmxform" id="registerForm" method="post" action="">
                            <div class="mb-4 position-relative">
                                <input id="firstname" type="text" name="firstname" placeholder="First Name*" class="form-control" required />
                            </div>
                            <div class="mb-4 position-relative">
                                <input id="lastname" type="text" name="lastname" placeholder="Last Name*" class="form-control" required />
                            </div>
                            <div class="mb-4 form-field-wrap">
                                <input id="address" type="text" name="address" placeholder="Address*" class="form-control" required />
                                <a href="javascript:void(0);" class="field-icon icon-question" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="reg-custom-tooltip" data-bs-title="The address will be used exclusively for the purpose of generating invoices."></a>
                            </div>
                            <select class="form-select mb-md-5 mb-4">
                                <option data-display="How did you hear about us ?">How did you hear about us ?</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                                <option value="3">Other option</option>
                            </select>
                            <div class="form-check d-inline-block mb-4 position-relative">
                                <input class="form-check-input" type="checkbox" name="agree" value="" id="agree" />
                                <label class="form-check-label text-gray" for="agree">
                                By registering with Meal Panner you accept the <a href="javascript:void(0);" class="text-secondary">General terms & conditions</a>  and <a href="javascript:void(0);" class="text-secondary">privacy policy.</a>
                                </label>
                            </div> 
                            <div class="mb-4"><button type="submit" class="btn btn-primary w-100 submit">Sign Up</button></div>
                        </form>
                    </div>
                    <div class="form-card-footer text-center"> 
                        <p class="text-small text-gray fw-medium">Already have an account ? <a href="./login.php" class="link-secondary link-hover-underline fw-bold">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bg"><img src="assets/images/Login_bg.webp" class="img-fluid" alt=""/></div>
    <div class="login-graphic-bg"><img src="assets/images/Login_graphic.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Registration End -->

<?php
include("footer_common.php");
?>