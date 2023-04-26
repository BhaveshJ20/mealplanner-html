<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Email Verification Start -->
<section class="login-wrap">
    <div class="container">
    <!-- HTML to write -->
        <div class="row">     
            <div class="col-xl-5 col-lg-6 col-md-8 ms-md-auto me-lg-5">
                <div class="card-box form-card bg-white">
                    <div class="form-card-header text-center mb-5">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-primary">Verify E - Mail Address</h1>
                        </div>
                        <p class="fw-bold mb-2">6 digit verification code sent to your e-mail address </p>
                        <p class="text-gray">This one-time password will expire at <br/>00:20 sec </p>
                    </div>
                    <div class="form-card-body">
                        <form class="cmxform" id="OtpVerification" method="post" action="">
                            <div class="row g-2">
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit1" name="digit1" data-next="digit2" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit2" name="digit2" data-next="digit3" data-previous="digit1" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit3" name="digit3" data-next="digit4" data-previous="digit2" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit4" name="digit4" data-next="digit5" data-previous="digit3" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit5" name="digit5" data-next="digit6" data-previous="digit4" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                                <div class="col-2 mb-3 position-relative">
                                    <input type="tel" id="digit6" name="digit6" data-previous="digit5" placeholder="" class="form-control form-control-square text-primary" required />
                                </div>
                            </div>
                            <div class="my-4"><button type="button" id="btn_submit" class="btn btn-primary w-100 submit" data-bs-toggle="modal" data-bs-target="#registerSuccessModal" data-bs-whatever="Verify" disabled>Verify</button></div>
                        </form>
                    </div>
                    <div class="form-card-footer text-center"> 
                        <p class="text-small text-gray fw-medium">Don’t receive an OTP ? <a href="javascript:void(0);" id="send_again" class="link-secondary link-hover-underline fw-bold">Send Again</a></p>
                        <div id="mealapp" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bg"><img src="assets/images/Login_bg.png" class="img-fluid" alt=""/></div>
    <div class="login-graphic-bg"><img src="assets/images/Login_graphic.png" class="img-fluid" alt=""/></div>
</section>
<!-- Email Verification End -->

<div class="custom-modal">
    <div class="modal fade" id="registerSuccessModal" tabindex="-1" aria-labelledby="registerSuccessLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-5">
                        <div class="col-lg-6">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">Congratulations ! Your account has been created Successfully</h1>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-big bg-primary text-white mt-lg-4"><i class="icon-success"></i></div>
                </div>
            </div>
        </div>   
    </div>
</div>

<?php
include("footer_common.php");
?>