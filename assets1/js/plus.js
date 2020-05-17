//Click time campaigns
$('.today').click(function(event) {
	$(".today").addClass("active");
	$(".yesterday").removeClass("active");
	$(".days7").removeClass("active");
	$(".days30").removeClass("active");
	$(".alltime").removeClass("active");
	$(".customday").removeClass("active");
});
$('.yesterday').click(function(event) {
	$(".today").removeClass("active");
	$(".yesterday").addClass("active");
	$(".days7").removeClass("active");
	$(".days30").removeClass("active");
	$(".alltime").removeClass("active");
	$(".customday").removeClass("active");
});
$('.days7').click(function(event) {
	$(".today").removeClass("active");
	$(".yesterday").removeClass("active");
	$(".days7").addClass("active");
	$(".days30").removeClass("active");
	$(".alltime").removeClass("active");
	$(".customday").removeClass("active");
});
$('.days30').click(function(event) {
	$(".today").removeClass("active");
	$(".yesterday").removeClass("active");
	$(".days7").removeClass("active");
	$(".days30").addClass("active");
	$(".alltime").removeClass("active");
	$(".customday").removeClass("active");
});
$('.alltime').click(function(event) {
	$(".today").removeClass("active");
	$(".yesterday").removeClass("active");
	$(".days7").removeClass("active");
	$(".days30").removeClass("active");
	$(".alltime").addClass("active");
	$(".customday").removeClass("active");
});
$('.customday').click(function(event) {
	$(".today").removeClass("active");
	$(".yesterday").removeClass("active");
	$(".days7").removeClass("active");
	$(".days30").removeClass("active");
	$(".alltime").removeClass("active");
	$(".customday").addClass("active");
});

