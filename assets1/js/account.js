//Check current password input
$('#current-pass').change(function(event) {
	var current_pass = $('#current_pass').val();
	var regPass = /\S/;
	if (!regPass.exec(current_pass)){
		$('.current-pass-required').css('display','block');
	} else{
		$('.current-pass-required').css('display','none');
	}
});

//Check new password input
$('#new-pass').change(function(event) {
	var new_pass = $('#new-pass').val();
	var regPass1 = /\S/;
	var regPass2 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if (!regPass1.exec(new_pass)){
		$('.new-pass-required').css('display','block');
		$('.new-pass-error').css('display','none');
	} else{
		$('.new-pass-required').css('display','none');
		if (regPass2.exec(new_pass)){
			$('.new-pass-error').css('display','none');
			$('.cf-pass-required').css('display', 'none');
			var cf_pass = $('#cf-pass').val();
			if (cf_pass == new_pass){
				$('.cf-pass-error').css('display', 'none');
			} else {
				$('.cf-pass-error').css('display', 'block');
			}
		} else {
			$('.new-pass-error').css('display','block');
			$('.cf-pass-error').css('display', 'none');
		}
	}
});

//Check confirm password input
$('#cf-pass').change(function(event) {
	var new_pass = $('#new-pass').val();
	var cf_pass = $('#cf-pass').val();
	if (new_pass == ''){
		$('.cf-pass-required').css('display', 'none');
		$('.cf-pass-error').css('display', 'none');
	} else {
		if(cf_pass == new_pass) {
			$('.cf-pass-required').css('display', 'none');
			$('.cf-pass-error').css('display', 'none');
		} else {
			if(cf_pass == '') {
				$('.cf-pass-required').css('display', 'block');
				$('.cf-pass-error').css('display', 'none');
			} else {
				$('.cf-pass-required').css('display', 'none');
				$('.cf-pass-error').css('display', 'block');
			}
		}
	}
});


$('.change-password').click(function(event) {
	var current_pass = $('#current-pass').val();
	var new_pass = $('#new-pass').val();
	var cf_pass = $('#cf-pass').val();

	var regExp = /\S/;
	var regPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

	if (!regExp.exec(current_pass)){
		$('.current-pass-required').css('display','block');
	}
	if (!regExp.exec(new_pass)){
		$('.new-pass-required').css('display','block');
	}
	if (!regExp.exec(cf_pass)){
		$('.cf-pass-required').css('display','block');
	}
	if (!regExp.exec(current_pass) || !regExp.exec(new_pass) || !regExp.exec(cf_pass)){
		return;
	}

	if (!regPass.exec(new_pass)){
		return;
	}

	if (cf_new_pass != new_pass){
		return;
	}

	// $.ajax({
	// 	url: 'http://localhost:8012/teemarket/seller/settings/change_password',
	// 	type: 'post',
	// 	dataType: 'json',
	// 	data: {
	// 		current_pass: current_pass,
	// 		new_pass	: new_pass,
	// 		cf_new_pass	: cf_new_pass,
	// 	},success:function(res) {
	// 		if(res == 0) {
	// 			window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
	// 		} else {
	// 			console.log("Insert error.");
	// 		}
	// 	},error:function(res){
	// 		console.log("Ajax call error.");
	// 	}
	// });
});
