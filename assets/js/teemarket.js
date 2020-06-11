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
	var account_type = seller;
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
				window.location.href = 'http://localhost:8012/teemarket/campaigns';
			} else {
				console.log("Insert error.");
			}
		},error:function(res){
			console.log("Ajax call error.");
		}
	});
});

//Add to cart
$('.add-cart').click(function (event) {
	var id = $(".product-id").val();
	var color_code = $(".bg-colors.active a").css("background-color");
	var size = $(".config-size-list li.active a").html();
	var quantity = $(".horizontal-quantity").val();
	if (size){
		$.ajax({
			url: 'http://localhost:8012/teemarket/add_to_cart',
			type: 'post',
			data: {
				id			: id,
				color_code	: color_code,
				size		: size,
				quantity	: quantity
			},success:function() {
				window.location.href = 'http://localhost:8012/teemarket/cart';
			},error:function(){
				console.log("Ajax call error.");
			}
		});
	} else {
		$(".size-required").css('display','block');
		toastr.error("Choose a size.");
		return;
	}
});

//Change quantity
$('.vertical-quantity').change(function (event) {
	var classQuantity = document.getElementsByClassName('vertical-quantity');

	var quantityArray = new Array();
	for (var i = 0; i < classQuantity.length; i++) {
		quantityArray.push(classQuantity[i].value);
	}
	var quantityString =  quantityArray.join('-');
	$.ajax({
		url: 'http://localhost:8012/teemarket/update_cart',
		type: 'post',
		dataType: 'json',
		data: {
			quantityString : quantityString
		},success:function(res){
			if(res.status){
				var total = 0;
				for (var i = 0; i < res.kq.length; i++) {
					total += (res.kq[i].quantity) * (res.kq[i].price);
				}
				toastr.success('Cart was update!');
				$('.total').html(total.toFixed(2));
			}
			else{
				console.log('Update cart error!');
			}
		},error:function(res){
			console.log('Ajax call fail');
		}
	})
});

//Check email when order
$(".email").change(function(event){
	var email  = $('.email').val();
	var regEmail1 = /\S/;
	var regEmail2 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!regEmail1.exec(email)) {
		$('.email-required').css('display', 'block');
		$('.email-invalid').css('display', 'none');
	} else {
		$('.email-required').css('display', 'none');
		if (regEmail2.exec(email)){
			$('.email-invalid').css('display', 'none');
		} else {
			$('.email-invalid').css('display', 'block');
		}
	}
});

//Check fullname when order
$('.fullname').change(function (event) {
	var fullname = $('.fullname').val();
	var reg = /\S/; //Ký tự không phải khoảng trắng
	if (!reg.exec(fullname)){
		$('.fn-required').css('display','block');
	} else {
		$('.fn-required').css('display','none');
	}
});

//Check address when order
$('.address').change(function (event) {
	var address = $('.address').val();
	var reg = /\S/; //Ký tự không phải khoảng trắng
	if (!reg.exec(address)){
		$('.address-required').css('display','block');
	} else {
		$('.address-required').css('display','none');
	}
});

//Check zip when order
$('.zip').change(function (event) {
	var zip = $('.zip').val();
	var reg = /\S/; //Ký tự không phải khoảng trắng
	var regZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
	if (!reg.exec(zip)){
		$('.zip-required').css('display','block');
	} else {
		$('.zip-required').css('display','none');
		if (regZip.exec(zip)){
			$('.zip-invalid').css('display','none');
		} else {
			$('.zip-invalid').css('display','block');
		}
	}
});

//Complete order
$('.complete-order').click(function (event) {
	var email  = $('.email').val();
	var fullname = $('.fullname').val();
	var address = $('.address').val();
	var countries = $('.countries').val();
	var states = $('.states').val();
	var cities = $('.cities').val();
	var zip = $('.zip').val();

	//Tao cac id san pham thanh 1 chuoi
	var classId = document.getElementsByClassName('id');
	var idArray = new Array();
	for (var i = 0; i < classId.length; i++) {
		idArray.push(classId[i].value);
	}
	var idString =  idArray.join('-');

	//Tao cac size san pham thanh 1 chuoi
	var classSize = document.getElementsByClassName('size');
	var sizeArray = new Array();
	for (var i = 0; i < classSize.length; i++) {
		sizeArray.push(classSize[i].value);
	}
	var sizeString =  sizeArray.join('-');

	//Tao cac id_color thanh 1 chuoi
	var classIdColor = document.getElementsByClassName('id-color');
	var idColorArray = new Array();
	for (var i = 0; i < classIdColor.length; i++) {
		idColorArray.push(classIdColor[i].value);
	}
	var idColorString =  idColorArray.join('-');

	//Tao cac quantity thanh 1 chuoi
	var classQuantity = document.getElementsByClassName('quantity');
	var quantityArray = new Array();
	for (var i = 0; i < classQuantity.length; i++) {
		quantityArray.push(classQuantity[i].value);
	}
	var quantityString =  quantityArray.join('-');

	// console.log(idString);
	// console.log(sizeString);
	// console.log(idColorString);
	// console.log(quantityString);

	var reg = /\S/; //Ký tự không phải khoảng trắng
	var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/;

	if (!reg.exec(email)){
		$('.email-required').css('display','block');
	}
	if (!reg.exec(fullname)){
		$('.fn-required').css('display','block');
	}
	if (!reg.exec(address)){
		$('.address-required').css('display','block');
	}
	if (!reg.exec(countries)){
		$('.country-required').css('display','block');
	}
	if (!reg.exec(states)){
		$('.state-required').css('display','block');
	}
	if (!reg.exec(cities)){
		$('.city-required').css('display','block');
	}
	if (!reg.exec(zip)){
		$('.zip-required').css('display','block');
	}

	if (!reg.exec(email) || !reg.exec(fullname) || !reg.exec(address) || !reg.exec(countries) || !reg.exec(states) || !reg.exec(cities) || !reg.exec(zip)){
		return;
	}

	if (!regEmail.exec(email)){
		return;
	}

	if (!regZip.exec(zip)){
		return;
	}

	$.ajax({
		url: 'http://localhost:8012/teemarket/insert_order',
		type: 'post',
		data: {
			email			: email,
			fullname		: fullname,
			address			: address,
			countries		: countries,
			states			: states,
			cities			: cities,
			zip				: zip,
			idString		: idString,
			sizeString		: sizeString,
			idColorString	: idColorString,
			quantityString	: quantityString
		},success:function() {
			$(".animsition").addClass("modal-open");
			$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
			$(".modal-primary").addClass("show");
			$(".modal-primary").css("display","block");
			$(".close-modal").click(function (event) {
				$(".modal-primary").removeClass("show");
				$(".modal-primary").css("display","none");
				$(".modal-backdrop").remove();
				$(".animsition").removeClass("modal-open");
				window.location.href = 'http://localhost:8012/teemarket';
			});
		},error:function(){
			console.log("Ajax call error.");
		}
	});
})

//Choose Size
$('.size-s').click(function(event) {
	$(".size-s").addClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-m').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").addClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-l').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").addClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-xl').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").addClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-2xl').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").addClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-3xl').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").addClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-4xl').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").addClass("active");
	$(".size-5xl").removeClass("active");
	$(".size-required").css('display','none');
});
$('.size-5xl').click(function(event) {
	$(".size-s").removeClass("active");
	$(".size-m").removeClass("active");
	$(".size-l").removeClass("active");
	$(".size-xl").removeClass("active");
	$(".size-2xl").removeClass("active");
	$(".size-3xl").removeClass("active");
	$(".size-4xl").removeClass("active");
	$(".size-5xl").addClass("active");
	$(".size-required").css('display','none');
});

//Choose color
$('.white').click(function(event) {
	$(".white").addClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
	$(".size-required").css('display','none');
});
$('.sand').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").addClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
	$(".size-required").css('display','none');
});
$('.light-pink').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").addClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
	$(".size-required").css('display','none');
});
$('.ash-grey').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").addClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
	$(".size-required").css('display','none');
});
$('.light-blue').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").addClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
	$(".size-required").css('display','none');
});
$('.daisy').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").addClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
});
$('.gold').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").addClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
});
$('.tennessee-orange').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").addClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
});
$('.red').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").addClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
});
$('.sapphire').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").addClass("active");
	$(".electric-green").removeClass("active");
	$(".black").removeClass("active");
});
$('.electric-green').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").addClass("active");
	$(".black").removeClass("active");
});
$('.black').click(function(event) {
	$(".white").removeClass("active");
	$(".sand").removeClass("active");
	$(".light-pink").removeClass("active");
	$(".ash-grey").removeClass("active");
	$(".light-blue").removeClass("active");
	$(".daisy").removeClass("active");
	$(".gold").removeClass("active");
	$(".tennessee-orange").removeClass("active");
	$(".red").removeClass("active");
	$(".sapphire").removeClass("active");
	$(".electric-green").removeClass("active");
	$(".black").addClass("active");
});

if($(".white").hasClass("active")){
	$(".product-design").css("background-color","rgb(252, 252, 252)");
}
if($(".sand").hasClass("active")){
	$(".product-design").css("background-color","rgb(255, 233, 186)");
}
if($(".light-pink").hasClass("active")){
	$(".product-design").css("background-color","rgb(255, 178, 196)");
}
if($(".ash-grey").hasClass("active")){
	$(".product-design").css("background-color","rgb(214, 215, 217)");
}
if($(".light-blue").hasClass("active")){
	$(".product-design").css("background-color","rgb(140, 180, 232)");
}
if($(".daisy").hasClass("active")){
	$(".product-design").css("background-color","rgb(243, 254, 43)");
}
if($(".gold").hasClass("active")){
	$(".product-design").css("background-color","rgb(255, 181, 2)");
}
if($(".tennessee-orange").hasClass("active")){
	$(".product-design").css("background-color","rgb(255, 132, 0)");
}
if($(".red").hasClass("active")){
	$(".product-design").css("background-color","rgb(243, 0, 0)");
}
if($(".sapphire").hasClass("active")){
	$(".product-design").css("background-color","rgb(0, 97, 179)");
}
if($(".electric-green").hasClass("active")){
	$(".product-design").css("background-color","rgb(0, 172, 49)");
}
if($(".black").hasClass("active")){
	$(".product-design").css("background-color","rgb(11, 11, 11)");
}

//Hover and mouseout color
$('.white').hover(function(event) {
	$(".product-design").css("background-color","rgb(252, 252, 252)");
});
$('.white').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.sand').hover(function(event) {
	$(".product-design").css("background-color","rgb(255, 233, 186)");
});
$('.sand').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.light-pink').hover(function(event) {
	$(".product-design").css("background-color","rgb(255, 178, 196)");
});
$('.light-pink').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.ash-grey').hover(function(event) {
	$(".product-design").css("background-color","rgb(214, 215, 217)");
});
$('.ash-grey').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.light-blue').hover(function(event) {
	$(".product-design").css("background-color","rgb(140, 180, 232)");
});
$('.light-blue').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.daisy').hover(function(event) {
	$(".product-design").css("background-color","rgb(243, 254, 43)");
});
$('.daisy').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.gold').hover(function(event) {
	$(".product-design").css("background-color","rgb(255, 181, 2)");
});
$('.gold').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.tennessee-orange').hover(function(event) {
	$(".product-design").css("background-color","rgb(255, 132, 0)");
});
$('.tennessee-orange').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.red').hover(function(event) {
	$(".product-design").css("background-color","rgb(243, 0, 0)");
});
$('.red').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.sapphire').hover(function(event) {
	$(".product-design").css("background-color","rgb(0, 97, 179)");
});
$('.sapphire').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.electric-green').hover(function(event) {
	$(".product-design").css("background-color","rgb(0, 172, 49)");
});
$('.electric-green').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});

$('.black').hover(function(event) {
	$(".product-design").css("background-color","rgb(11, 11, 11)");
});
$('.black').mouseout(function(event) {
	$(".product-design").css("background-color",$(".bg-colors.active a").css("background-color"));
});
