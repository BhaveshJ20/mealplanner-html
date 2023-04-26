$('#password').keyup(function(event) {
	var password = $('#password').val();
	checkPasswordStrength(password, "passwordCriterion");
});

$('#confirmPassword').keyup(function(event) {
	var password = $('#confirmPassword').val();
	checkPasswordStrength(password, "cpasswordCriterion");
});

function checkPasswordStrength(password, field) {
	var number     = /([0-9])/;
	var upperCase  = /([A-Z])/;
	var lowerCase  = /([a-z])/;
	var specialCharacters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

	var characters     = (password.length >= 8 );
	var capitalletters = password.match(upperCase) ? 1 : 0;
	var loweletters    = password.match(lowerCase) ? 1 : 0;
	var numbers        = password.match(number) ? 1 : 0;
	var special        = password.match(specialCharacters) ? 1 : 0;

	this.update_info('length', password.length >= 8, field);
    this.update_info('capital', capitalletters, field);
    this.update_info('small', loweletters, field);
    this.update_info('number', numbers, field);
    this.update_info('special', special, field);

	var total = characters + capitalletters + loweletters + numbers + special;
	this.password_meter(total, field);
}

function update_info(criterion, isValid, field) {    
	var $passwordCriteria = $('#'+field).find('li[data-criterion="' + criterion + '"]');
	if ( ! isValid) {		
        $passwordCriteria.removeClass('text-gray text-decoration-line-through');
    } else {		
        $passwordCriteria.addClass('text-gray text-decoration-line-through');
    }
}
var class_arr=["pass-progress1","pass-progress2","pass-progress3","pass-progress4","pass-progress5"];
function password_meter(total, field) {
	 $("#"+field+" .password-strength-group").attr('data-strength', total);
	 $("#"+field+" .password-strength-meter div").attr('class', 'pass-progress me-2');
	 for(let i=1; i<= total; i++){
		$("#"+field+" .password-strength-meter div:nth-child("+i+")").addClass(class_arr[i-1]);
	 }
	 
	 if($('#password').val() !== $('#confirmPassword').val()){
		$("#submit_btn").prop('disabled', true);
	 }else{
		$("#submit_btn").prop('disabled', false); 
	 }
}