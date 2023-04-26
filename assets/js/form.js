// Document is ready
$(document).ready(function () {
    $("#commentForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
        }
    });
    $("#forgotForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        }
    });
    $("#registerForm").validate({
        rules: {
            firstname: {
                required: true,
            },
            lastname: {
                required: true,
            },
            address: {
                required: true,
            },
            agree: {
                required: true,
            },
        }
    });
    $("#OtpVerification").validate({
        rules: {
            digit1: {
                required: true,
            },
            digit2: {
                required: true,
            },
            digit3: {
                required: true,
            },
            digit4: {
                required: true,
            },
            digit5: {
                required: true,
            },
            digit6: {
                required: true,
            },
        }
    });
    $("#profileUserDetailForm").validate({
        rules: {
            firstname: {
                required: true,
            },
            lastname: {
                required: true,
            },
            address: {
                required: true,
            },
        }    
    });
    $("#profileUserDetailEmailForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        }    
    });
    $("#profileUserDetailPasswordForm").validate({
        rules: {
            change_password: {
                required: true,
                minlength: 8
            },
        }    
    });
    
    $("#MembershipCheckoutForm").validate({
        rules: {
            address: {
                required: true,
            },
        }
    });
	
	$('input[name=cnumber]').payment('formatCardNumber');
	$('input[name=cvv]').payment('formatCardCVC');
	$('input[name=cvalidThru').payment('formatCardExpiry');
	
	/* Form validation using Stripe client-side validation helpers */
	jQuery.validator.addMethod("cnumber", function(value, element) {
		return this.optional(element) || Stripe.card.validateCardNumber(value);
	}, "Please specify a valid credit card number.");

	jQuery.validator.addMethod("cvalidThru", function(value, element) {    
		/* Parsing month/year uses jQuery.payment library */
		value = $.payment.cardExpiryVal(value);
		return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
	}, "Invalid expiration date.");

	jQuery.validator.addMethod("cvv", function(value, element) {
		return this.optional(element) || Stripe.card.validateCVC(value);
	}, "Invalid CVC.");
	
	$("#AddMasterCardForm").validate({
        rules: {
            chname: {
                required: true,
            },
            cnumber: {
                required: true,
				cnumber: true  
            },
            cvalidThru: {
                required: true,
				cvalidThru: true
            },
            cvv: {
                required: true,
				cvv: true
            },
            agree: {
                required: true,
            },
        }    
    });
    
});


(function($) {
    $(document).on("click", ".password_preview", function(e) {
        e.preventDefault();
        var current_task = $(this).hasClass("icon-hide") ? "show" : "hide";
        var $password_field = $(this).closest(".cmxform").find('input[name="password"]');
        if ($password_field.length === 0) {
             $password_field = $(this).closest(".form-field-wrap").find('input[name="password"]')
        }
        if ($password_field.length === 0) {
             $password_field = $(this).closest(".form-field-wrap").find('input[name="confirmpassword"]')
        }
        // if ($password_field.length === 0) {
        //     $password_field = $(this).closest(".user-registration-form-row").find('input[name="password_current"]')
        // }
        // if ($password_field.length === 0) {
        //     $password_field = $(this).closest(".user-registration-form-row").find('input[name="password_1"]')
        // }
        // if ($password_field.length === 0) {
        //     $password_field = $(this).closest(".user-registration-form-row").find('input[name="password_2"]')
        // }
        // if ($password_field.length === 0) {
        //     $password_field = $(this).closest(".field-password").find(".input-password")
        // }
        if ($password_field.length > 0) {
            switch (current_task) {
            case "show":
                $password_field.attr("type", "text");
                $(this).removeClass("icon-hide").addClass("icon-show");
                break;
            case "hide":
                $password_field.attr("type", "password");
                $(this).removeClass("icon-show").addClass("icon-hide");
                break
            }
        }
    })
})(jQuery)
    