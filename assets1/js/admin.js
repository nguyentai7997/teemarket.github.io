//Check Email Sign In
$("#inputEmail").change(function(event){
	var emailSignIn  = $('#inputEmail').val();
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
$("#inputPassword").change(function (event) {
	var passwordSignIn = $('#inputPassword').val();
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
	var emailSignIn  = $('#inputEmail').val();
	var passwordSignIn  = $('#inputPassword').val();

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
		url: 'http://localhost:8012/teemarket/admin/check_sign_in',
		type: 'post',
		data: {
			emailSignIn		: emailSignIn,
			passwordSignIn	: passwordSignIn
		},success:function(res) {
			if(res == 0) {
				window.location.href = 'http://localhost:8012/teemarket/admin/dashboard';
			} else {
				toastr.error('Incorrect login information, please try again.');
				toastr.error('Invalid credentials provided.');
			}
		},error:function(res){
			console.log("Ajax call error.");
		}
	})
});

$('._dashboard').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/dashboard';
});
$('.campaigns').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/campaigns';
});
$('.mockups').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/mockups';
});
$('.categories').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/categories';
});
$('.orders').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/orders';
});
$('.payouts').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/payouts';
});
$('.users').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/users';
});
//Log Out
$('.logout').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/admin/logout';
});
$(".back").click(function (event) {
	window.history.back();
});
$(".more").click(function (event) {
	var obj = $(this).children();
	var id = obj[0].textContent
	window.location.href = 'http://localhost:8012/teemarket/admin/campaign_details/'+id;
})


