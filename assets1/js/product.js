//Choose colors
$('.white').click(function(event) {
	if($(".white").hasClass("active")){
		$(".white").removeClass("active");
	} else {
		$(".white").addClass("active");
	}
});
$('.sand').click(function(event) {
	if($(".sand").hasClass("active")){
		$(".sand").removeClass("active");
	} else {
		$(".sand").addClass("active");
	}
});
$('.light-pink').click(function(event) {
	if($(".light-pink").hasClass("active")){
		$(".light-pink").removeClass("active");
	} else {
		$(".light-pink").addClass("active");
	}
});
$('.ash-grey').click(function(event) {
	if($(".ash-grey").hasClass("active")){
		$(".ash-grey").removeClass("active");
	} else {
		$(".ash-grey").addClass("active");
	}
});
$('.light-blue').click(function(event) {
	if($(".light-blue").hasClass("active")){
		$(".light-blue").removeClass("active");
	} else {
		$(".light-blue").addClass("active");
	}
});
$('.daisy').click(function(event) {
	if($(".daisy").hasClass("active")){
		$(".daisy").removeClass("active");
	} else {
		$(".daisy").addClass("active");
	}
});
$('.gold').click(function(event) {
	if($(".gold").hasClass("active")){
		$(".gold").removeClass("active");
	} else {
		$(".gold").addClass("active");
	}
});
$('.tennessee-orange').click(function(event) {
	if($(".tennessee-orange").hasClass("active")){
		$(".tennessee-orange").removeClass("active");
	} else {
		$(".tennessee-orange").addClass("active");
	}
});
$('.red').click(function(event) {
	if($(".red").hasClass("active")){
		$(".red").removeClass("active");
	} else {
		$(".red").addClass("active");
	}
});
$('.sapphire').click(function(event) {
	if($(".sapphire").hasClass("active")){
		$(".sapphire").removeClass("active");
	} else {
		$(".sapphire").addClass("active");
	}
});
$('.electric-green').click(function(event) {
	if($(".electric-green").hasClass("active")){
		$(".electric-green").removeClass("active");
	} else {
		$(".electric-green").addClass("active");
	}
});
$('.black').click(function(event) {
	if($(".black").hasClass("active")){
		$(".black").removeClass("active");
	} else {
		$(".black").addClass("active");
	}
});

$('.back_step').click(function (event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/create/design';
});

function rgb2hex(rgb) {
	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	function hex(x) {
		return ("0" + parseInt(x).toString(16)).slice(-2);
	}
	return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

$('.next_step').click(function (event) {
	var color_product =  document.getElementById("product-color-list").getElementsByClassName("active");
	var price = $('.price').val();
	var resultColorProduct = [];
	for (var i = 0; i < color_product.length; i++) {
		var res = rgb2hex(color_product[i].style.backgroundColor);
	    resultColorProduct.push(res);
	}
	console.log(resultColorProduct);
	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/create/get_product',
		type: 'post',
		data: {
			colorProduct : resultColorProduct,
			price : price
		},
		success:function(res){
			window.location.href = 'http://localhost:8012/teemarket/seller/create/launch';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
});













