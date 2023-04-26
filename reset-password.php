<?php 
include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-normal.php"); ?>
</header>
<!-- Header End -->

<!-- Reset Password Start -->
<section class="login-wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 ms-md-auto me-lg-5">
                <div class="card-box form-card bg-white">
                    <div class="form-card-header text-center mb-4">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-primary">Reset Your Password</h1>
                        </div>
                        <p class="text-center fw-bold pb-1">Enter your new password</p>
                    </div>
                    <div class="form-card-body">
                        <form class="resetpassform" method="post" action="">
                            <div class="form-field-wrap mb-4">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required />
                                <a href="javascript:void(0);" class="field-icon icon-hide password_preview"></a>
                            </div>
							<div class="password-condition" id="passwordCriterion">
								<div class="password-strength-group" data-strength="">
									<div id="password-strength-meter" class="password-strength-meter d-flex mb-3">
										<div class="pass-progress me-2"></div>
										<div class="pass-progress me-2"></div>
										<div class="pass-progress me-2"></div>
										<div class="pass-progress me-2"></div>
										<div class="pass-progress me-2"></div>
									</div>
								</div>
								<ul class="pswd_info">
									<li data-criterion="length" class="mb-2 text-small">Must have at least 8 characters</li>
									<li data-criterion="capital" class="mb-2 text-small">At least 1 capital letter</li>
									<li data-criterion="small" class="mb-2 text-small">At least 1 lower case letter</strong></li>
									<li data-criterion="number" class="mb-2 text-small">At least 1 number</strong></li>
									<li data-criterion="special" class="mb-2 text-small">At least 1 special character</li>
								</ul>
							</div>
                            <!--div class="password-condition">
                                <p class="text-small mb-2">Must have at least 8 characters</p>
                                <div class="d-flex mb-3">
                                    <div class="pass-progress me-2"></div>
                                    <div class="pass-progress me-2"></div>
                                    <div class="pass-progress me-2"></div>
                                    <div class="pass-progress me-2"></div>
                                </div>
                                <p class="mb-2 text-small text-gray text-decoration-line-through">At least 1 lower case letter</p>
                                <p class="mb-2 text-small">At least 1 capital letter</p>
                                <p class="mb-2 text-small">At least 1 number</p>
                                <p class="mb-2 text-small">At least 1 special character</p>
                            </div-->
                            <div class="form-field-wrap my-4">
                                <input id="confirmPassword" name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" required />
                                <a href="javascript:void(0);" class="field-icon icon-hide password_preview"></a>
                            </div>						
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#resetPasswordModal" data-bs-whatever="continue" id="submit_btn" disabled>Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bg"><img src="assets/images/Login_bg.webp" class="img-fluid" alt=""/></div>
    <div class="login-graphic-bg"><img src="assets/images/Login_graphic.webp" class="img-fluid" alt=""/></div>
</section>
<!-- Reset Password End -->

<div class="custom-modal">
    <div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-5">
                        <div class="col-lg-7">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">Your password has been changed successfully</h1>
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