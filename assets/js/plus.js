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
	var regPN = /^[a-z0-9]{3,40}$/;
	if(publicname == '') {
		$('.pn-required').css('display','block');
		$('.pn-error').css('display','none');
		$('.pn-invalid').css('display', 'none');
		$('.public-name').text('public-name');
		$('.public-name').css('color','unset');
	} else {
		if (regPN.exec(publicname)){
			if (publicname == 'seller') {
				$('.pn-required').css('display','none');
				$('.pn-error').css('display', 'block');
				$('.pn-invalid').css('display', 'none');
				$('.public-name').text('public-name');
				$('.public-name').css('color','unset');
				toastr.error('Public name is already taken');
			} else {
				$.ajax({
					url: 'http://localhost:8012/teemarket/check_public_name',
					type: 'post',
					data: {
						publicname : publicname
					},
					success:function(res){
						if(res == 0){
							$('.pn-required').css('display','none');
							$('.pn-error').css('display','none');
							$('.pn-invalid').css('display', 'none');
							$('.public-name').text(publicname);
							$('.public-name').css('color','#fb8c00');
						}
						else {
							$('.pn-required').css('display','none');
							$('.pn-error').css('display', 'block');
							$('.pn-invalid').css('display', 'none');
							$('.public-name').text('public-name');
							$('.public-name').css('color','unset');
							toastr.error('Public name is already taken');
						}
					},
					error:function(res){
						console.log('Ajax call error');
					}
				});
			}
		} else {
			$('.pn-required').css('display','none');
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
	var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email == '') {
		$('.email-required').css('display', 'block');
		$('.email-error').css('display', 'none');
		$('.email-invalid').css('display', 'none');
	} else {
		if (regEmail.exec(email)){
			$('.email-invalid').css('display', 'none');
			$.ajax({
				url: 'http://localhost:8012/teemarket/check_email',
				type: 'post',
				data: {
					email : email
				},
				success:function(res){
					if(res == 0){
						$('.email-required').css('display', 'none');
						$('.email-error').css('display', 'none');
						$('.email-invalid').css('display', 'none');
					}
					else {
						$('.email-required').css('display', 'none');
						$('.email-error').css('display', 'block');
						$('.email-invalid').css('display', 'none');
					}
				},
				error:function(res){
					console.log("Ajax call error");
				}
			});
		} else {
			$('.email-required').css('display', 'none');
			$('.email-error').css('display', 'none');
			$('.email-invalid').css('display', 'block');
		}
	}
});


// Check Password Input
$("#password").change(function (event) {
	var password = $('#password').val();
	var reg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if (password == ''){
		$('.password-required').css('display','block');
		$('.password-error').css('display','none');
	} else{
		if (reg.exec(password)){
			$('.password-required').css('display','none');
			$('.password-error').css('display','none');
			var cfpassword  = $('#cfpassword').val();
			if (cfpassword == '' || cfpassword == password){
				$('.cfpassword-required').css('display', 'none');
				$('.cfpassword-error').css('display', 'none');
			} else {
				$('.cfpassword-required').css('display', 'none');
				$('.cfpassword-error').css('display', 'block');
			}
		} else {
			$('.password-required').css('display', 'none');
			$('.password-error').css('display','block');
		}
	}
});

// Check Confirm Password Input
$("#cfpassword").change(function(event){
	var password = $('#password').val();
	var cfpassword  = $('#cfpassword').val();
	if(cfpassword == password) {
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
	var fullname = $('#fullname').val();
	var publicname  = $('#publicname').val().toLowerCase();
	var email  = $('#email').val();
	var password  = $('#password').val();
	var cfpassword  = $('#cfpassword').val();

	var regFN = /\S/;
	var regPN = /^[a-z0-9]{3,40}$/;
	var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

	if (!regFN.exec(fullname)){
		$('.fn-required').css('display','block');
	}
	if (publicname == ''){
		$('.pn-required').css('display','block');
	}
	if (email == ''){
		$('.email-required').css('display','block');
	}
	if (password == ''){
		$('.password-required').css('display','block');
	}
	if (cfpassword == ''){
		$('.cfpassword-required').css('display','block');
	}
	if (!regFN.exec(fullname) || publicname == '' || email == '' || password == '' || cfpassword == ''){
		return;
	}

	if (regPN.exec(publicname)){
		if (publicname == 'seller') {
			toastr.error('Public name is already taken');
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
						toastr.error('Public name is already taken');
						return;
					}
				},
				error:function(res){
					console.log('Ajax call error');
					return;
				}
			});
		}
	} else {
		toastr.error('Invalid public name provided. Public names must be between 3 and 40 alphanumeric characters excluding special characters and spaces.');
		return;
	}

	if (regEmail.exec(email)){
		$('.email-invalid').css('display', 'none');
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
			fullname	: fullname,
			publicname	: publicname,
			email		: email,
			password	: password
		},success:function(res) {
			if(res == 0) {
				window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
			} else {
				console.log("Add error");
			}
		},error:function(res){
			console.log("Ajax call error");
		}
	})
});
