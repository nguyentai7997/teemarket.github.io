$('.back-step').click(function (event) {
	window.location.href = 'http://localhost:8012/teemarket/design';
});

//Check input price
$(".price").keydown(function(event){
	if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 190 || event.keyCode == 110) {
		// Allow normal operation
		$(".price").keyup(function (event) {
			//Estimate Profit
			var price = Math.round($(".price").val() * 100) / 100
			var estimate = price - 7.50;
			$(".profit-item").html(estimate.toFixed(2));
		})
	} else {
		// Prevent the rest
		event.preventDefault();
	}
});

$(".price").change(function (event) {
	var price = Math.round($(".price").val() * 100) / 100;
	$(".price").val(price.toFixed(2));
	if (price < 7.50) {
		$(".price").val('7.50');
		$(".profit-item").html('0.00');

		$(".animsition").addClass("modal-open");
		$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
		$(".low-price").addClass("show");
		$(".low-price").css("display","block");
		$(".close-modal").click(function (event) {
			$(".low-price").removeClass("show");
			$(".low-price").css("display","none");
			$(".modal-backdrop").remove();
			$(".animsition").removeClass("modal-open");
			$(".price").focus();
		});
	}
	if (price > 28.00) {
		$(".price").val('28.00');
		$(".profit-item").html('20.50');
		$(".animsition").addClass("modal-open");
		$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
		$(".high-price").addClass("show");
		$(".high-price").css("display","block");
		$(".close-modal").click(function (event) {
			$(".high-price").removeClass("show");
			$(".high-price").css("display","none");
			$(".modal-backdrop").remove();
			$(".animsition").removeClass("modal-open");
			$(".price").focus();
		});
	}
})

$('.next-step').click(function (event) {
	var product_color_list =  document.getElementById("product-color-list").getElementsByClassName("active");
	var price = $('.price').val();
	var resultColors = [];
	for (var i = 0; i < product_color_list.length; i++) {
		var res = product_color_list[i].style.backgroundColor;
		resultColors.push(res);
	}
	$.ajax({
		url: 'http://localhost:8012/teemarket/get_product',
		type: 'post',
		data: {
			resultColors : resultColors,
			price : price
		},
		success:function(res){
			window.location.href = 'http://localhost:8012/teemarket/launch';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
});

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

if($(".bg-colors").hasClass("selected-color")){
	$(".designer-style-front").css("background-color",$(".bg-colors.selected-color").css("background-color"));
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













