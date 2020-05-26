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
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.sand').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 233, 186)");
});
$('.sand').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.light-pink').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 178, 196)");
});
$('.light-pink').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.ash-grey').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(214, 215, 217)");
});
$('.ash-grey').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.light-blue').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(140, 180, 232)");
});
$('.light-blue').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.daisy').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 254, 43)");
});
$('.daisy').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.gold').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 181, 2)");
});
$('.gold').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.tennessee-orange').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(255, 132, 0)");
});
$('.tennessee-orange').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.red').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(243, 0, 0)");
});
$('.red').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.sapphire').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 97, 179)");
});
$('.sapphire').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.electric-green').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(0, 172, 49)");
});
$('.electric-green').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
});

$('.black').hover(function(event) {
	$(".designer-style-front").css("background-color","rgb(11, 11, 11)");
});
$('.black').mouseout(function(event) {
	$(".designer-style-front").css("background-color",$(".selected-color").css("background-color"));
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













