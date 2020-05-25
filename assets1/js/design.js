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
$('.remove_image').click(function (event) {
	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/create/remove_design',
		type: 'post',
		success:function(res){
			console.log("Remove success")
			window.location.href = 'http://localhost:8012/teemarket/seller/create/design';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
});

// save on click
// save.addEventListener('click',(e)=>{
// 	e.preventDefault();
// 	// get result to data uri
// 	let imgSrc = cropper.getCroppedCanvas({
// 		width: img_w.value // input value
// 	}).toDataURL();
// 	// remove hide class of img
// 	cropped.classList.remove('hide');
// 	img_result.classList.remove('hide');
// 	// show image cropped
// 	cropped.src = imgSrc;
// 	dwn.classList.remove('hide');
// 	dwn.download = 'imagename.png';
// 	dwn.setAttribute('href',imgSrc);
// });

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

$('.next_step').click(function(event) {
	var src_image= $('#image').attr('src');
    var color_design = $('.bg-colors.active').css('background-color');
	// var image =  document.getElementById("result").innerHTML;
	// console.log(image);
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
		toastr.error("Unfortunately, you can't sell a blank item. You need to add text or art before you can continue.");
	}
});















