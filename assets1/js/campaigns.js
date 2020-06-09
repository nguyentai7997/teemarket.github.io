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


var chart = c3.generate({
	data: {
		x: 'x',
//        xFormat: '%Y%m%d', // 'xFormat' can be used as custom format of 'x'
		columns: [
			['x', '2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'],
//            ['x', '20130101', '20130102', '20130103', '20130104', '20130105', '20130106'],
			['ORDERS', 30, 200, 100, 400, 150, 250],
			['UNITS', 130, 340, 200, 1000, 250, 350]
		]
	},
	axis: {
		x: {
			type: 'timeseries',
			tick: {
				format: '%Y-%m-%d'
			}
		}
	}
});

setTimeout(function () {
	chart.load({
		columns: [
			['PROFIT', 400, 500, 450, 700, 600, 500]
		]
	});
}, 1000);

