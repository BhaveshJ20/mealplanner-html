<?php 
    include("header_common.php");
?>
<!-- Header Start -->
<header class="bg-white sticky-top">
    <?php include("header-default.php"); ?>
</header>
<!-- Header End -->

<!-- Pages -->
<section class="bg-primary">
    <div class="spacer-120"></div>
</section>
<section class="myprofile-wrap">
    <div class="container">
        <div class="card-box bg-white mb-4">
            <div class="profile-pic-wrap">
                <div class="profile-pic"><img src="assets/images/team2.png" class="image-mask" alt="" /></div>
                <a href="javascript:void(0);" class="profile-pic-add bg-primary"><i class="icon-camera text-dark fw-medium"></i></a>
            </div>
            <div class="plain-tabs">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link" id="nav-Profile-Settings-tab" data-bs-toggle="tab" data-bs-target="#nav-Profile-Settings" type="button" role="tab" aria-controls="nav-Profile-Settings" aria-selected="false">Profile Settings</button>
                        <button class="nav-link" id="nav-Payments-tab" data-bs-toggle="tab" data-bs-target="#nav-Payments" type="button" role="tab" aria-controls="nav-Payments" aria-selected="false">Payments</button>
                        <button class="nav-link active" id="nav-Membership-tab" data-bs-toggle="tab" data-bs-target="#nav-Membership" type="button" role="tab" aria-controls="nav-Membership" aria-selected="true">Membership</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-Profile-Settings" role="tabpanel" aria-labelledby="nav-Profile-Settings-tab" tabindex="0">
                        <div class="user-details p-md-5 p-sm-4 pt-4">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <form class="cmxform" id="profileUserDetailForm" method="post" action="">
                                        <div class="title mb-4">
                                            <h1 class="lead fw-bold">User Details</h1>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4 position-relative">
                                                    <input id="firstName" type="text" name="firstName" placeholder="Elsa" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4 position-relative">
                                                    <input id="lastName" type="text" name="lastName" placeholder="Beerbaum" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-4 position-relative">
                                                    <input id="address" type="text" name="address" placeholder="Ansgarstr, Wallenhorst, 49134" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="submit" class="btn btn-primary submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <form class="cmxform" id="profileUserDetailEmailForm" method="post" action="">
                                            <div class="title mb-4">
                                                <h1 class="lead fw-bold">Email </h1>
                                            </div>
                                            <div class="mb-4 position-relative">
                                                <input id="email" type="email" name="email" placeholder="elsa.beerbaum@gmail.com" class="form-control" required />
                                            </div>
                                            <div class="mb-4 text-end">
                                                <button type="button" class="btn btn-primary submit" data-bs-toggle="modal" data-bs-target="#MyProfileEmailVerifyModal" data-bs-whatever="change">Change</button>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="cmxform" id="profileUserDetailPasswordForm" method="post" action="">
                                                <div class="title mb-4">
                                                    <h1 class="lead fw-bold">Password</h1>
                                                </div>
                                                <div class="mb-4 position-relative">
                                                    <input id="change_password" type="password" name="password" placeholder="" class="form-control" required />
                                                </div>
                                                <div class="mb-4 text-end">
                                                    <button type="button" class="btn btn-primary submit" data-bs-toggle="modal" data-bs-target="#MyProfileChangePasswordModal" data-bs-whatever="Change">Change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="py-4">
                                        <p class="text-small text-gray fw-semibold">Deleting your account may cause you to lose saved recipes, collections, and preferences permanently. Deletions will follow our Privacy Notice and laws/regulations. Click <a href="#MyProfileDeactivateAccModal" class="link-primary fw-semibold" id="" data-bs-toggle="modal" data-bs-whatever="Delete Account">"Delete Account"</a>to proceed.</p>
                                    </div>
                                    <div class="row mt-md-4">
                                        <div class="col-5">
                                            <button type="button" class="btn btn-outline-dark w-100 submit" data-bs-toggle="modal" data-bs-target="#MyProfileLogoutModal" data-bs-whatever="logout">Logout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Payments" role="tabpanel" aria-labelledby="nav-Payments-tab" tabindex="0">
                        <div class="payment-details p-md-5 p-sm-4 pt-4">    
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="title">
                                            <h1 class="lead fw-bold">Payment Details</h1>
                                        </div>
                                        <a href="#ChoosePaymentMethodModal" class="icon-box-md bg-primary shadow-md text-dark" data-bs-toggle="modal" data-bs-whatever="Add Payment Method"><i class="icon-plus"></i></a>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 payment_card_wrap">
                                            <div class="payment-card bg-white my-3">
                                                <a href="javascript:void(0);" class="pay-card-select mb-2"><span class="pay-radio"></span></a>
                                                <div class="title d-xl-flex align-items-center justify-content-between">
                                                    <h4 class="title-xs text-gray fw-bold mb-3">mypaypal@emailaddress</h4>
                                                    <img src="assets/images/Paypal.svg" class="img-fluid mb-3" width="131" height="31" alt="PayPal"/>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end mt-auto">
                                                    <a href="javascript:void(0);" class="icon-box-md bg-primary shadow-md text-dark" data-bs-toggle="modal" data-bs-target="#MyProfilePayPalDeleteModal" data-bs-whatever="Delete"><i class="icon-delete"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 payment_card_wrap">
                                            <div class="payment-card bg-white my-3 selected">
                                                <a href="javascript:void(0);" class="pay-card-select mb-2 selected"><span class="pay-radio"></span></a>
                                                <div class="title d-xl-flex align-items-center justify-content-between">
                                                    <h4 class="title-xs text-gray fw-bold mb-3">XXXX XXXX XXXX 0809</h4>
                                                    <img src="assets/images/Mastercard.svg" class="img-fluid mb-3" width="41" height="26" alt="Mastercard"/>
                                                </div>
                                                <div class="lead fw-bold text-charcoal mb-3">Elsa Beerbaum</div>
                                                <div class="d-flex align-items-center justify-content-between mt-auto">
                                                    <div class="lead fw-bold text-gray">THRU <span class="text-charcoal">05/24</span></div><a href="javascript:void(0);" class="icon-box-md bg-primary shadow-md text-dark" data-bs-toggle="modal" data-bs-target="#MyProfileCardDeleteModal" data-bs-whatever="Delete"><i class="icon-delete"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title mt-5 mb-4">
                                        <h2 class="lead fw-bold">Payment History</h2>
                                    </div>
                                    <div class="table-responsive meal-table">
                                        <table class="table bg-white mb-0">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Due Date</th>
                                                    <th>Plan</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>16/03/2021</td>
                                                    <td>Monthly</td>
                                                    <td>$ 4.99</td>
                                                    <td><span class="bg-primary rounded-pill py-1 px-3 d-inline-block">Paid</span></td>
                                                    <td><a href="javascript:void(0);" class="text-dark"><i class="icon-download"></i> Downlod</a></td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>16/04/2021</td>
                                                    <td>Annually</td>
                                                    <td>$ 54.99</td>
                                                    <td><span class="bg-primary rounded-pill py-1 px-3 d-inline-block">Paid</span></td>
                                                    <td><a href="javascript:void(0);" class="text-dark"><i class="icon-download"></i> Downlod</a></td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>16/04/2021</td>
                                                    <td>Annually</td>
                                                    <td>$ 54.99</td>
                                                    <td><span class="bg-primary rounded-pill py-1 px-3 d-inline-block">Paid</span></td>
                                                    <td><a href="javascript:void(0);" class="text-dark"><i class="icon-download"></i> Downlod</a></td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>16/04/2021</td>
                                                    <td>Annually</td>
                                                    <td>$ 54.99</td>
                                                    <td><span class="bg-secondary text-white rounded-pill py-1 px-3 d-inline-block">Fail</span></td>
                                                    <td><a href="javascript:void(0);" class="text-dark"><i class="icon-download"></i> Downlod</a></td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>16/04/2021</td>
                                                    <td>Annually</td>
                                                    <td>$ 54.99</td>
                                                    <td><span class="bg-primary rounded-pill py-1 px-3 d-inline-block">Paid</span></td>
                                                    <td><a href="javascript:void(0);" class="text-dark"><i class="icon-download"></i> Downlod</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="nav-Membership" role="tabpanel" aria-labelledby="nav-Membership-tab" tabindex="0">
                        <div class="membership-details pt-md-5 py-4">
                            <div class="title mb-4 mb-lg-5 ps-lg-5">
                                <h1 class="lead fw-bold">Membership</h1>
                            </div>
                            <div class="card-box p-lg-5 p-4 mx-lg-4">
                                <div class="title mb-4 mb-lg-5">
                                    <h2 class="lead fw-bold">Payment Details</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column min-h-100">
                                            <div class="payment_card_wrap">
                                                <div class="payment-card normal bg-white mb-3">
                                                    <div class="title">
                                                        <a href="javascript:void(0);" class="pay-card-select text-gray d-flex align-items-center justify-content-between"><span class="pay-radio me-3"></span> XXXX XXXX XXXX 0809 <img src="assets/images/Mastercard.svg" width="41" height="26" class="img-fluid ms-auto" alt="Mastercard"></a>
                                                    </div>
                                                </div>
                                                <div class="payment-card normal bg-white my-3">
                                                    <div class="title">
                                                        <a href="javascript:void(0);" class="pay-card-select text-gray d-flex align-items-center justify-content-between"><span class="pay-radio me-3"></span> Paypal <img src="assets/images/Paypal-sm.svg" width="76" height="21" class="img-fluid ms-auto" alt="PayPal"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5 mb-lg-0">
                                                <a href="javascript:void(0);" class="btn btn-primary w-75">Add Payment Method</a>
                                            </div>
                                            <div class="mt-auto mb-5 mb-lg-0">
                                                <form class="cmxform" id="MembershipCheckoutForm" method="post" action="">
                                                    <div class="mb-4 form-field-wrap w-75">
                                                        <input id="address" type="text" name="address" placeholder="Address*" class="form-control" required />
                                                        <a href="javascript:void(0);" class="field-icon icon-question shadow-md" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="reg-custom-tooltip" data-bs-title="The address will be used exclusively for the purpose of generating invoices."></a>
                                                    </div>
                                                    <div class="">
                                                        <div class="title mb-4">
                                                            <h3 class="lead fw-bold">Summary</h3>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="text-small text-gray mb-4">Plan Amount</p>
                                                            <p class="lead text-gray fw-medium mb-4">$ 7.99</p>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="text-small text-gray mb-4">Tax</p>
                                                            <p class="lead text-gray fw-medium mb-4">$ 0.99</p>
                                                        </div>
                                                        <hr class="text-dark mt-0 mb-4"/>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="text-small text-gray mb-4">Total Amount</p>
                                                            <p class="lead text-gray fw-medium mb-4">$ 8.98</p>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <button type="submit" class="btn btn-primary w-75 submit" data-bs-toggle="modal" data-bs-target="#MakePaymentModal" data-bs-whatever="Make payment">Make payment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ps-lg-4">
                                        <div class="card-mini-box p-0">
                                            <div class="membership-img">
                                                <img src="assets/images/img2.jpg" class="img-full" alt=""/>
                                            </div>
                                            <div class="membership-info p-3 p-lg-4">
                                                <div class="membership-header">
                                                    <div class="title mb-4 mb-lg-5">
                                                        <h3 class="title-md fw-bold text-primary">1 Month</h3>
                                                        <p class="lead text-gray fw-medium">monthly billing</p>
                                                    </div>
                                                    <div class="title mb-4">
                                                        <h3 class="title-lg fw-bold">€ 7.99 <span class="lead fw-medium">/ per month</span></h3>
                                                    </div>
                                                </div>
                                                <div class="membership-list">
                                                    <p class="d-flex lead fw-medium my-4">
                                                        <i class="icon-checkmark me-2"></i><span>Perfect for full flexibility</span>
                                                    </p>
                                                    <p class="d-flex lead fw-medium my-4">
                                                        <i class="icon-checkmark me-2"></i><span>Structured shopping lists</span>
                                                    </p>
                                                    <p class="d-flex lead fw-medium my-4">
                                                        <i class="icon-checkmark me-2"></i><span>Extensively weekly plans</span>
                                                    </p>
                                                    <p class="d-flex lead fw-medium my-4">
                                                        <i class="icon-checkmark me-2"></i><span>Over 800 recipes</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Verifu Email Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileEmailVerifyModal" tabindex="-1" aria-labelledby="MyProfileEmailVerifyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">                
                    <div class="form-card-header text-center mb-4">
                        <div class="title mb-3">
                            <h1 class="title-sm fw-bold text-dark">Verify E - Mail Address</h1>
                        </div>
                        <p class="fw-bold text-primary mb-2">6 digit verification code sent to your e-mail address  </p>
                        <p class="text-gray">This one-time password will expire at <br/>00:20 sec </p>
                    </div>
                    <div class="form-card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-6"> 
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
                                    <div class="my-4"><button type="button" id="btn_submit" class="btn btn-primary w-100 submit" data-bs-toggle="modal" data-bs-target="#EmailChangedModal" data-bs-whatever="Verify" disabled>Verify</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-card-footer text-center"> 
                        <p class="text-small text-gray fw-medium">Don’t receive an OTP ? <a href="javascript:void(0);" id="send_again" class="link-secondary link-hover-underline fw-bold">Send Again</a></p>
                        <div id="mealapp" class="mt-4"></div>
                    </div>                
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Email Changed Successfully  -->
<div class="custom-modal">
    <div class="modal fade" id="EmailChangedModal" tabindex="-1" aria-labelledby="EmailChangedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-5">
                        <div class="col-lg-10">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">Your E-mail has been changed Successfully</h1>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-big bg-primary text-white mt-lg-4"><i class="icon-success"></i></div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Change Your Password -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileChangePasswordModal" tabindex="-1" aria-labelledby="MyProfileChangePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <form class="resetpassform" method="post" action="">
                        <div class="form-card-header text-center mb-4">
                            <div class="title mb-3">
                                <h1 class="title-sm fw-bold text-dark">Change Your Password</h1>
                            </div>
                            <p class="fw-bold text-primary mb-2">6 digit verification code sent to your e-mail address  </p>
                            <p class="text-gray">Enter your new password</p>
                        </div>
                        <div class="form-card-body">
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
                            <div class="form-field-wrap my-4">
                                <input id="confirmPassword" name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" required />
                                <a href="javascript:void(0);" class="field-icon icon-hide password_preview"></a>
                            </div>
                            <div class="mb-sm-5">							
                                <button type="button" class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#PasswordChangedSuccessModal " data-bs-whatever="continue" id="submit_btn" disabled>Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Password Changed Successfully  -->
<div class="custom-modal">
    <div class="modal fade" id="PasswordChangedSuccessModal" tabindex="-1" aria-labelledby="PasswordChangedSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-5">
                        <div class="col-lg-10">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">Your password has been changed Successfully</h1>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-big bg-primary text-white mt-lg-4"><i class="icon-success"></i></div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Deactivate Account Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileDeactivateAccModal" tabindex="-1" aria-labelledby="MyProfileDeactivateAccModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-8">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Deactivate your account instead of deleting.</h1>
                            </div>
                            <p class="text-vmall text-gray mb-4"><span class="text-primary fw-bold">Deleting your account</span> will permanently remove all your saved recipes, collections, and preferences, and disable connected appliances. </p>
                            <p class="text-vmall text-gray mb-4 mb-lg-5"><span class="text-primary fw-bold">Deactivating your account</span> temporarily disables it, and you can't access your saved recipes, collections, and preferences until you reactivate it.</p>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#MyProfileDeleteAccountConfirmModal " data-bs-whatever="Delete">Delete</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Deactivate</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Delete Account confirmation Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileDeleteAccountConfirmModal" tabindex="-1" aria-labelledby="MyProfileDeleteAccountConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Do you really want to Delete your account ?</h1>
                            </div>
                            <div class="icon-box-big bg-primary text-white mx-auto mb-5"><i class="icon-denied"></i></div>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#MyProfileThankYouModal" data-bs-whatever="Yes">Yes</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Thank You Message Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileThankYouModal" tabindex="-1" aria-labelledby="MyProfileThankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="title text-center mb-3">
                                <h1 class="title-sm fw-bold">We're grateful that you gave our meal planner a try.</h1>
                            </div>
                            <p class="text-small text-gray text-center mb-5">We value your membership with us and would hate to see you go.</p>
                            <div class="icon-box-big bg-primary text-white mx-auto"><i class="icon-like"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Choose Payment Method Modal -->
<div class="custom-modal">
    <div class="modal fade" id="ChoosePaymentMethodModal" tabindex="-1" aria-labelledby="ChoosePaymentMethodModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="title text-center mb-3">
                        <h1 class="title-sm fw-bold">Choose payment methods to add</h1>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-lg-8">
                            <div class="payment-card normal bg-white my-3">
                                <div class="title">
                                    <a href="#AddMasterCardModal" class="pay-card-select text-gray d-flex align-items-center justify-content-between" data-bs-toggle="modal" data-bs-whatever="Mastercard"><span class="pay-radio me-3"></span> Mastercard <img src="assets/images/Mastercard.svg" width="41" height="26" class="img-fluid ms-auto" alt="PayPal"></a>
                                </div>
                            </div>
                            <div class="payment-card normal bg-white my-3">
                                <div class="title">
                                    <a href="#AddPayPalDetailsModal" class="pay-card-select text-gray d-flex align-items-center justify-content-between" data-bs-toggle="modal" data-bs-whatever="Paypal"><span class="pay-radio me-3"></span> Paypal <img src="assets/images/Paypal-sm.svg" width="76" height="21" class="img-fluid ms-auto" alt="PayPal"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center my-lg-5 w-100">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#ChoosePaymentMethodModal" data-bs-whatever="Save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Add Master Card Modal -->
<div class="custom-modal">
    <div class="modal fade" id="AddMasterCardModal" tabindex="-1" role="dialog" aria-labelledby="AddMasterCardModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="title text-center mb-3">
                        <h1 class="title-sm fw-bold">Add card details </h1>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-lg-8">                        
                            <form class="cmxform" id="AddMasterCardForm" method="post" action="">
                                <div class="payment-card normal bg-white my-4 selected">
                                    <div class="title">
                                        <a href="javascript:void(0);" class="pay-card-select text-gray d-flex align-items-center justify-content-between selected"><span class="pay-radio me-3"></span> Mastercard <img src="assets/images/Mastercard.svg" width="41" height="26" class="img-fluid ms-auto" alt="PayPal"></a>
                                    </div>
                                </div>
                                <div class="mb-4 position-relative">
                                    <input id="chname" type="text" name="chname" placeholder="Card holder name" class="form-control" required />
                                </div>
                                <div class="mb-4 position-relative">
                                    <input id="cnumber" type="text" name="cnumber" class="form-control" placeholder="Credit Card Number" required />
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4 position-relative">
                                            <input id="cvalidThru" type="text" name="cvalidThru" class="form-control" placeholder="Valid Thru ( MM / YY )" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4 position-relative">
                                            <input id="cvv" type="text" name="cvv" class="form-control" placeholder="CVV / CVC" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check d-inline-block mb-4 position-relative">
                                    <input class="form-check-input" type="checkbox" name="agree" value="" id="agree" />
                                    <label class="form-check-label text-gray" for="agree">
                                    Save card for future payments 
                                    </label>
                                </div> 
                                <div class="mb-lg-5 mb-4"><button type="submit" id="add_card_btn" class="btn btn-primary w-100" data-bs-target="#AddMasterCardModal" data-bs-whatever="Save">Save</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Add PayPal Details Modal -->
<div class="custom-modal">
    <div class="modal fade" id="AddPayPalDetailsModal" tabindex="-1" aria-labelledby="AddPayPalDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="title text-center mb-3">
                        <h1 class="title-sm fw-bold">Paypal Details</h1>
                    </div>
                    <p class="text-gray text-small text-center">Your <b>mypaypal@emailaddress</b> has been verified.</p>
                    <div class="row justify-content-center w-100">
                        <div class="col-lg-8">
                            <div class="payment-card bg-white normal my-lg-5 my-4 selected">
                                <div class="title">
                                    <a href="#AddPayPalDetailsModal" class="pay-card-select text-gray d-flex align-items-center justify-content-between selected"><span class="pay-radio me-3"></span> Paypal <img src="assets/images/Paypal-sm.svg" width="76" height="21" class="img-fluid ms-auto" alt="PayPal"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#AddPayPalDetailsModal" data-bs-whatever="Save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- PayPal Delete Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfilePayPalDeleteModal" tabindex="-1" aria-labelledby="MyProfilePayPalDeleteModallLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Do you really want to delete your PayPal ?</h1>
                            </div>
                            <div class="icon-box-big bg-primary text-white mx-auto mb-5"><i class="icon-denied"></i></div>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#MyProfileThankYouModal" data-bs-whatever="Yes">Yes</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Card Delete Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileCardDeleteModal" tabindex="-1" aria-labelledby="MyProfileCardDeleteModallLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Do you really want to delete your Credit Card ?</h1>
                            </div>
                            <div class="icon-box-big bg-primary text-white mx-auto mb-5"><i class="icon-denied"></i></div>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#MyProfileThankYouModal" data-bs-whatever="Yes">Yes</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Choose Subscribe Modal -->
<div class="custom-modal">
    <div class="modal fade" id="ChooseSubscribeModal" tabindex="-1" aria-labelledby="ChooseSubscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-4">
                        <div class="col-lg-6">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">You can only subscribe the next plan ones your existing plan expires</h1>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-big bg-primary text-white"><i class="icon-success"></i></div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Make Payment Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MakePaymentModal" tabindex="-1" aria-labelledby="MakePaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center pb-4 pb-lg-5">
                        <div class="col-lg-8">
                            <div class="title text-center">
                                <h1 class="title-sm fw-bold">You have successfully subscribed to our plan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box-big bg-primary text-white"><i class="icon-success"></i></div>
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Logout Modal -->
<div class="custom-modal">
    <div class="modal fade" id="MyProfileLogoutModal" tabindex="-1" aria-labelledby="MyProfileLogoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="title text-center mb-5">
                                <h1 class="title-sm fw-bold">Are you sure you want to logout ?</h1>
                            </div>
                            <div class="icon-box-big bg-primary text-white mx-auto mb-5"><i class="icon-logout"></i></div>
                            <div class="d-sm-flex justify-content-sm-between justify-content-center">
                                <div class="text-center mb-4 mb-md-0"><button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#MyProfileThankYouModal" data-bs-whatever="Yes">Yes</button></div>
                                <div class="text-center"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<?php
    include("footer_common.php");
?>