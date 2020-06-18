//Check input up design
$('#file-upload').change(function (event) {
	var fi = document.getElementById('file-upload');
	if (fi.files.length > 0) {      // FIRST CHECK IF ANY FILE IS SELECTED.
		for (var i = 0; i <= fi.files.length - 1; i++) {
			var fileName, fileExtension;

			// FILE NAME AND EXTENSION.
			fileName = fi.files.item(i).name;
			fileExtension = fileName.replace(/^.*\./, '');

			// CHECK IF ITS AN IMAGE FILE.
			// TO GET THE IMAGE WIDTH AND HEIGHT, WE'LL USE fileReader().
			if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
				readImageFile(fi.files.item(i));             // GET IMAGE INFO USING fileReader().
			}
			else {
				// IF THE FILE IS NOT AN IMAGE.
				$(".animsition").addClass("modal-open");
				$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
				$(".invalid-image").addClass("show");
				$(".invalid-image").css("display","block");
				$(".close-modal").click(function (event) {
					$("input[type='file']").val('');
					$(".invalid-image").removeClass("show");
					$(".invalid-image").css("display","none");
					$(".modal-backdrop").remove();
					$(".animsition").removeClass("modal-open");
				});
			}
		}
	}
})

// GET THE IMAGE WIDTH AND HEIGHT USING fileReader() API.
function readImageFile(file) {
	var reader = new FileReader(); // CREATE AN NEW INSTANCE.
	reader.readAsDataURL(file);
	reader.onload = function (e) {
		var img = new Image();
		img.src = e.target.result;

		img.onload = function () {
			var w = this.width;
			var h = this.height;

			if (w < 800 || h < 800) { // If width and height too small
				$(".animsition").addClass("modal-open");
				$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
				$(".invalid-size").addClass("show");
				$(".invalid-size").css("display","block");
				$(".close-modal").click(function (event) {
					$("input[type='file']").val('');
					$(".invalid-size").removeClass("show");
					$(".invalid-size").css("display","none");
					$(".modal-backdrop").remove();
					$(".animsition").removeClass("modal-open");
				});
			} else {
				var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/teemarket/upload';
				var CLOUDINARY_UPLOAD_PRESET = 'dfr3fs5c';

				var imgPreview = document.getElementById('img-preview');
				var formData = new FormData();
				formData.append('file',file);
				formData.append('upload_preset',CLOUDINARY_UPLOAD_PRESET);

				$(".animsition").addClass("modal-open");
				$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
				$(".modal-loading").addClass("show");
				$(".modal-loading").css("display","block");

				axios({
					url : CLOUDINARY_URL,
					method : 'POST',
					headers: {
						'CONTENT-TYPE' : 'application/x-www-form-urlencoded'
					},
					data : formData
				}).then(function (res) {
					imgPreview.src = res.data.secure_url;
					$(".modal-loading").removeClass("show");
					$(".modal-loading").css("display","none");
					$(".modal-backdrop").remove();
					$(".animsition").removeClass("modal-open");
				}).catch(function (err) {
					console.error(err);
				});
			}
		}
	};
}

//Click button remove image
$('.remove-image').click(function (event) {
	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/remove_design',
		type: 'post',
		success:function(res){
			window.location.href = 'http://localhost:8012/teemarket/seller/design';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
});

$('.next-step').click(function(event) {
	var src_image= $('#img-preview').attr('src');
	var color_design = $('.bg-colors.active').css('background-color');
	if (src_image != ''){
		$.ajax({
			url: 'http://localhost:8012/teemarket/seller/get_design',
			type: 'post',
			data: {
				src_image : src_image,
				color_design : color_design
			},
			success:function(res){
				window.location.href = 'http://localhost:8012/teemarket/seller/product';
			},
			error:function(res){
				console.log("Ajax call error.");
			}
		});
	} else {
		$(".animsition").addClass("modal-open");
		$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
		$(".not-image").addClass("show");
		$(".not-image").css("display","block");
		$(".close-modal").click(function (event) {
			$(".not-image").removeClass("show");
			$(".not-image").css("display","none");
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
if($(".white").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(252, 252, 252)");
}
$('.white').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(252, 252, 252)");
});
$('.white').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".sand").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 233, 186)");
}
$('.sand').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 233, 186)");
});
$('.sand').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".light-pink").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 178, 196)");
}
$('.light-pink').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 178, 196)");
});
$('.light-pink').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".ash-grey").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(214, 215, 217)");
}
$('.ash-grey').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(214, 215, 217)");
});
$('.ash-grey').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".light-blue").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(140, 180, 232)");
}
$('.light-blue').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(140, 180, 232)");
});
$('.light-blue').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".daisy").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(243, 254, 43)");
}
$('.daisy').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 254, 43)");
});
$('.daisy').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".gold").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 181, 2)");
}
$('.gold').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 181, 2)");
});
$('.gold').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".tennessee-orange").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(255, 132, 0)");
}
$('.tennessee-orange').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 132, 0)");
});
$('.tennessee-orange').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".red").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(243, 0, 0)");
}
$('.red').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 0, 0)");
});
$('.red').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".sapphire").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(0, 97, 179)");
}
$('.sapphire').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 97, 179)");
});
$('.sapphire').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".electric-green").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(0, 172, 49)");
}
$('.electric-green').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 172, 49)");
});
$('.electric-green').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
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
if($(".black").hasClass("active")){
	$(".designer-style-front").css("background-color","rgb(11, 11, 11)");
}
$('.black').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(11, 11, 11)");
});
$('.black').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".bg-colors.active").css("background-color"));
});



























