// vars
let result = document.querySelector('.result'),
	img_result = document.querySelector('.img-result'),
	img_w = document.querySelector('.img-w'),
	img_h = document.querySelector('.img-h'),
	options = document.querySelector('.options'),
	save = document.querySelector('.save'),
	cropped = document.querySelector('.cropped'),
	dwn = document.querySelector('.download'),
	upload = document.querySelector('#file-input'),
	cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
	if (e.target.files.length) {
		// start file reader
		const reader = new FileReader();
		reader.onload = (e)=> {
			if(e.target.result){
				// create new image
				let img = document.createElement('img');
				img.id = 'image';
				img.src = e.target.result
				// clean result before
				result.innerHTML = '';
				// append new image
				result.appendChild(img);
				// show save btn and options
				save.classList.remove('hide');
				options.classList.remove('hide');
				// init cropper
				cropper = new Cropper(img);
			}
		};
		reader.readAsDataURL(e.target.files[0]);
	}
});

//Click button remove image
$('.remove-image').click(function (event) {
	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/create/remove_design',
		type: 'post',
		success:function(res){
			window.location.href = 'http://localhost:8012/teemarket/seller/create/design';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
});

$('.next-step').click(function(event) {
	var src_image= $('#image').attr('src');
	var color_design = $('.bg-colors.active').css('background-color');
	if ($("#image").length){
		$.ajax({
			url: 'http://localhost:8012/teemarket/seller/create/get_design',
			type: 'post',
			data: {
				src_image : src_image,
				color_design : color_design
			},
			success:function(res){
				window.location.href = 'http://localhost:8012/teemarket/seller/create/product';
			},
			error:function(res){
				console.log("Ajax call error.");
			}
		});
	} else {
		$(".animsition").addClass("modal-open");
		$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
		$(".modal-danger").addClass("show");
		$(".modal-danger").css("display","block");
		$(".close-modal").click(function (event) {
			$(".modal-danger").removeClass("show");
			$(".modal-danger").css("display","none");
			$(".modal-backdrop").remove();
			$(".animsition").removeClass("modal-open");
		});
	}
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
	$(".designer-style-front").css("background-color","rgb(252, 252, 252)");
}
if($(".sand").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 233, 186)");
}
if($(".light-pink").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 178, 196)");
}
if($(".ash-grey").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(214, 215, 217)");
}
if($(".light-blue").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(140, 180, 232)");
}
if($(".daisy").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(243, 254, 43)");
}
if($(".gold").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 181, 2)");
}
if($(".tennessee-orange").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 132, 0)");
}
if($(".red").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(243, 0, 0)");
}
if($(".sapphire").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(0, 97, 179)");
}
if($(".electric-green").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(0, 172, 49)");
}
if($(".black").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(11, 11, 11)");
}

//Hover and mouseout color
$('.white').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(252, 252, 252)");
});
$('.white').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.sand').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 233, 186)");
});
$('.sand').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.light-pink').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 178, 196)");
});
$('.light-pink').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.ash-grey').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(214, 215, 217)");
});
$('.ash-grey').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.light-blue').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(140, 180, 232)");
});
$('.light-blue').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.daisy').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 254, 43)");
});
$('.daisy').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.gold').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 181, 2)");
});
$('.gold').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.tennessee-orange').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 132, 0)");
});
$('.tennessee-orange').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.red').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 0, 0)");
});
$('.red').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.sapphire').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 97, 179)");
});
$('.sapphire').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.electric-green').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 172, 49)");
});
$('.electric-green').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

$('.black').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(11, 11, 11)");
});
$('.black').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});

















