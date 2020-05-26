//Check Full Name Input
$('#fullname').change(function (event) {
	var fullname = $('#fullname').val();
	var regFN = /\S/; //Ký tự không phải khoảng trắng
	if (!regFN.exec(fullname)){ //TH Full Name chỉ toàn khoảng trắng
		$('.fn-required').css('display','block');
	} else {
		$('.fn-required').css('display','none');
	}
});

// Check Public Name Input
$("#publicname").change(function(event){
	var publicname  = $('#publicname').val().toLowerCase();
	var regPN1 = /\S/;
	var regPN2 = /^[a-z0-9]{3,40}$/;
	if(!regPN1.exec(publicname)) { //Th public name chi toan khoang trang
		$('.pn-required').css('display','block');
		$('.pn-error').css('display','none');
		$('.pn-invalid').css('display', 'none');
		$('.public-name').text('public-name');
		$('.public-name').css('color','unset');
	} else {
		$('.pn-required').css('display','none');
		if (regPN2.exec(publicname)){
			$('.pn-invalid').css('display', 'none');
			if (publicname == 'seller' || publicname == 'admin') {
				$('.pn-error').css('display', 'block');
				$('.public-name').text('public-name');
				$('.public-name').css('color','unset');
				toastr.error('Public name is already taken.');
			} else {
				$.ajax({
					url: 'http://localhost:8012/teemarket/check_public_name',
					type: 'post',
					data: {
						publicname : publicname
					},
					success:function(res){
						if(res == 0){
							$('.pn-error').css('display','none');
							$('.public-name').text(publicname);
							$('.public-name').css('color','#fb8c00');
						}
						else {
							$('.pn-error').css('display', 'block');
							$('.public-name').text('public-name');
							$('.public-name').css('color','unset');
							toastr.error('Public name is already taken.');
						}
					},
					error:function(res){
						console.log('Ajax call error.');
					}
				});
			}
		} else {
			$('.pn-error').css('display','none');
			$('.pn-invalid').css('display', 'block');
			$('.public-name').text('public-name');
			$('.public-name').css('color','unset');
			toastr.error('Invalid public name provided. Public names must be between 3 and 40 alphanumeric characters excluding special characters and spaces.');
		}
	}
});

// Check Email Input
$("#email").change(function(event){
	var email  = $('#email').val();
	var regEmail1 = /\S/;
	var regEmail2 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!regEmail1.exec(email)) {
		$('.email-required').css('display', 'block');
		$('.email-error').css('display', 'none');
		$('.email-invalid').css('display', 'none');
	} else {
		$('.email-required').css('display', 'none');
		if (regEmail2.exec(email)){
			$('.email-invalid').css('display', 'none');
			$.ajax({
				url: 'http://localhost:8012/teemarket/check_email',
				type: 'post',
				data: {
					email : email
				},
				success:function(res){
					if(res == 0){
						$('.email-error').css('display', 'none');
					}
					else {
						$('.email-error').css('display', 'block');
					}
				},
				error:function(res){
					console.log("Ajax call error.");
				}
			});
		} else {
			$('.email-error').css('display', 'none');
			$('.email-invalid').css('display', 'block');
		}
	}
});


// Check Password Input
$("#password").change(function (event) {
	var password = $('#password').val();
	var regPass1 = /\S/;
	var regPass2 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if (!regPass1.exec(password)){
		$('.password-required').css('display','block');
		$('.password-error').css('display','none');
		if (password == ""){
			$('.cfpassword-required').css('display', 'none');
			$('.cfpassword-error').css('display', 'none');
		}
	} else{
		$('.password-required').css('display','none');
		if (regPass2.exec(password)){
			$('.password-error').css('display','none');
			$('.cfpassword-required').css('display', 'none');
			var cfpassword  = $('#cfpassword').val();
			if (cfpassword == "" || cfpassword == password){
				$('.cfpassword-error').css('display', 'none');
			} else {
				$('.cfpassword-error').css('display', 'block');
			}
		} else {
			$('.password-error').css('display','block');
			$('.cfpassword-error').css('display', 'none');
		}
	}
});

// Check Confirm Password Input
$("#cfpassword").change(function(event){
	var password = $('#password').val();
	var cfpassword  = $('#cfpassword').val();
	if (password == '' || password == cfpassword){
		$('.cfpassword-required').css('display', 'none');
		$('.cfpassword-error').css('display', 'none');
	} else {
		if(cfpassword == '') {
			$('.cfpassword-required').css('display', 'block');
			$('.cfpassword-error').css('display', 'none');
		} else {
			$('.cfpassword-required').css('display', 'none');
			$('.cfpassword-error').css('display', 'block');
		}
	}
});

//Click button Sign Up
$('.signup').click(function(event) {
	var account_type = 1;
	var fullname = $('#fullname').val();
	var publicname  = $('#publicname').val().toLowerCase();
	var email  = $('#email').val();
	var password  = $('#password').val();
	var cfpassword  = $('#cfpassword').val();

	var regExp = /\S/;
	var regPN = /^[a-z0-9]{3,40}$/;
	var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

	if (!regExp.exec(fullname)){
		$('.fn-required').css('display','block');
	}
	if (!regExp.exec(publicname)){
		$('.pn-required').css('display','block');
	}
	if (!regExp.exec(email)){
		$('.email-required').css('display','block');
	}
	if (!regExp.exec(password)){
		$('.password-required').css('display','block');
	}
	if (!regExp.exec(cfpassword)){
		$('.cfpassword-required').css('display','block');
	}
	if (!regExp.exec(fullname) || !regExp.exec(publicname) || !regExp.exec(email) || !regExp.exec(password) || !regExp.exec(cfpassword)){
		return;
	}

	if (regPN.exec(publicname)){
		if (publicname == 'seller' || publicname == 'admin') {
			toastr.error('Public name is already taken.');
			return;
		} else {
			$.ajax({
				url: 'http://localhost:8012/teemarket/check_public_name',
				type: 'post',
				data: {
					publicname : publicname
				},
				success:function(res){
					if(res == 0){
					}
					else {
						toastr.error('Public name is already taken.');
						return;
					}
				},
				error:function(res){
					console.log('Ajax call error.');
					return;
				}
			});
		}
	} else {
		toastr.error('Invalid public name provided. Public names must be between 3 and 40 alphanumeric characters excluding special characters and spaces.');
		return;
	}

	if (regEmail.exec(email)){
		$.ajax({
			url: 'http://localhost:8012/teemarket/check_email',
			type: 'post',
			data: {
				email : email
			},
			success:function(res){
				if(res == 0){
				}
				else {
					return;
				}
			},
			error:function(res){
				console.log("Ajax call error");
				return;
			}
		});
	} else {
		return;
	}

	if (!regPass.exec(password)){
		return;
	}

	if (cfpassword != password){
		return;
	}

	$.ajax({
		url: 'http://localhost:8012/teemarket/insert_seller',
		type: 'post',
		dataType: 'json',
		data: {
			account_type: account_type,
			fullname	: fullname,
			publicname	: publicname,
			email		: email,
			password	: password
		},success:function(res) {
			if(res == 0) {
				window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
			} else {
				console.log("Insert error.");
			}
		},error:function(res){
			console.log("Ajax call error.");
		}
	});
});

//Check Email Sign In
$("#emailSignIn").change(function(event){
	var emailSignIn  = $('#emailSignIn').val();
	var regEmailSignIn1 = /\S/;
	var regEmailSignIn2 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (!regEmailSignIn1.exec(emailSignIn)) {//TH Email chi toan khoang trang
		$('.email-required').css('display', 'block');
		$('.email-invalid').css('display', 'none');
	} else {
		$('.email-required').css('display', 'none');
		if (regEmailSignIn2.exec(emailSignIn)){
			$('.email-invalid').css('display', 'none');
		} else {
			$('.email-invalid').css('display', 'block');
		}
	}
});

// Check Password Sign In
$("#passwordSignIn").change(function (event) {
	var passwordSignIn = $('#passwordSignIn').val();
	var regPasswordSignIn = /\S/;
	if (!regPasswordSignIn.exec(passwordSignIn)){ //TH Password chi toan khoang trang
		$('.password-required').css('display','block');
		$('.password-error').css('display','none');
	} else{
		$('.password-required').css('display','none');
		if (passwordSignIn.length < 8){
			$('.password-error').css('display','block');
		} else {
			$('.password-error').css('display','none');
		}
	}
});

//Click button Sign In
$('.signin').click(function(event) {
	var emailSignIn  = $('#emailSignIn').val();
	var passwordSignIn  = $('#passwordSignIn').val();

	var regEmailSignIn = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regExp = /\S/;

	if (!regExp.exec(emailSignIn)){
		$('.email-required').css('display','block');
	}
	if (!regExp.exec(passwordSignIn)){
		$('.password-required').css('display','block');
	}

	if (!regExp.exec(emailSignIn) || !regExp.exec(passwordSignIn)){
		return;
	}

	if (!regEmailSignIn.exec(emailSignIn)){
		return;
	}

	if (passwordSignIn.length < 8){
		return;
	}

	$.ajax({
		url: 'http://localhost:8012/teemarket/check_sign_in',
		type: 'post',
		data: {
			emailSignIn		: emailSignIn,
			passwordSignIn	: passwordSignIn
		},success:function(res) {
			if(res == 0) {
				window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
			} else {
				toastr.error('Incorrect login information, please try again.');
				toastr.error('Invalid credentials provided.');
			}
		},error:function(res){
			console.log("Ajax call error.");
		}
	})
});
