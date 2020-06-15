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

// $( ".animsition").ready(function() {
// 	console.log('abc');
//
// 	$.ajax({
// 		url: 'http://localhost:8012/teemarket/seller/get_orders_by_time',
// 		type: 'get'
// 		,success:function(res) {
// 			var obj = JSON.parse(res);
//
// 			var orders = [];
//
// 			for (var i=0; i < obj.length; i++){
// 				orders.push(obj[i].length);
// 			}
// 			//console.log(orders);
//
// 			var ctx = document.getElementById('myChart').getContext('2d');
// 			var chart = new Chart(ctx, {
// 				// The type of chart we want to create
// 				type: 'line',
//
// 				// The data for our dataset
// 				data: {
// 					labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00','07:00','08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00'],
// 					datasets: [{
// 						label: 'My First dataset',
// 						backgroundColor: 'rgb(255, 99, 71);',
// 						borderColor: 'rgb(255, 99, 132)',
// 						data: orders
// 					}]
// 				},
//
// 				// Configuration options go here
// 				options: {
// 					scales: {
// 						yAxes: [{
// 							ticks: {
// 								beginAtZero: true
// 							}
// 						}]
// 					},
// 					tooltips: {
// 						callbacks: {
// 							label: function(t, d) {
// 								var xLabel = d.datasets[t.datasetIndex].label;
// 								var yLabel = t.yLabel;
// 								console.log(yLabel);
//
// 								var orders = [];
// 								var tinhProfit = function(){
//
// 								}
// 								return 'Order' + ': ' + yLabel ;
//
// 							}
// 						}
// 					}
// 				}
// 			});
//
// 		},error:function(){
// 			console.log("Ajax call error.");
// 		}
// 	});
// });
$(".days30").click(function () {
	var array = new Array();
	for (var i = 29; i >= 0; i--){
		array.push(moment(Date.today().add(-i).days()).format('MMMM D'));
	}

	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/get_orders_30_days_left',
		type: 'get'
		,success:function(res) {
			var obj = JSON.parse(res);
			console.log(obj)

			var orders = [];

			for (var i=0; i < obj.length; i++){
				orders.push(obj[i].length);
			}
			// console.log(orders);

			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'line',

				// The data for our dataset
				data: {
					labels: array,
					datasets: [{
						label: 'My First dataset',
						backgroundColor: 'rgb(255, 99, 71);',
						borderColor: 'rgb(255, 99, 132)',
						data: orders
					}]
				},

				// Configuration options go here
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					},
					tooltips: {
						callbacks: {
							label: function(t, d) {
								var xLabel = d.datasets[t.datasetIndex].label;
								var yLabel = t.yLabel;
								console.log(yLabel);

								var orders = [];
								var tinhProfit = function(){

								}
								return 'Order' + ': ' + yLabel ;

							}
						}
					}
				}
			});

		},error:function(){
			console.log("Ajax call error.");
		}
	});
})

$( ".animsition").ready(function() {
	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/get_orders_by_time',
		type: 'get'
		,success:function(res) {
			var obj = JSON.parse(res);
			var orders = [];
			var units = [];
			var profits = [];
			for (i=0; i < obj.length; i++){
				if (obj[i].length == 0){
					orders.push(obj[i].length);
				} else {
					orders.push(obj[i].length-1);
				}
				if (obj[i] != '') {
					units.push(obj[i][obj[i].length-2]);
					profits.push(obj[i][obj[i].length-1]);
				} else {
					units.push("0");
					profits.push("0");
				}
			}
			var time = ["00:00","01:00","02:00","03:00","04:00","05:00","06:00","07:00","08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00","22:00","23:00"]
			var allData =[];
			for (i = 0; i < obj.length; i++){
				if (obj[i].length == 0){
					var data = {
						"time": time[i],
						"orders": obj[i].length,
						"units": 0,
						"profits": 0
					};
					allData.push(data);
				} else {
					var data = {
						"time": time[i],
						"orders": obj[i].length-1,
						"units": units[i],
						"profits": profits[i]
					};
					allData.push(data);
				}
			}

			// Themes begin
			am4core.useTheme(am4themes_kelly);
			am4core.useTheme(am4themes_animated);
			// Themes end

			var chart = am4core.create("chartdiv", am4charts.XYChart);

			chart.data = allData;

			chart.dateFormatter.inputDateFormat = "HH";
			var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
			dateAxis.renderer.minGridDistance = 60;
			dateAxis.startLocation = 0.5;
			dateAxis.endLocation = 0.5;
			dateAxis.baseInterval = {
				timeUnit: "hour",
				count: 1
			}

			var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
			valueAxis.tooltip.disabled = true;

			var series = chart.series.push(new am4charts.LineSeries());
			series.dataFields.dateX = "time";
			series.name = "Orders";
			series.dataFields.valueY = "orders";
			series.tooltipHTML = "<span style='font-size:14px; color:#000000;'><b>Orders: {valueY.value}</b></span>";
			series.tooltipText = "[#000]{valueY.value}[/]";
			series.tooltip.background.fill = am4core.color("#FFF");
			series.tooltip.getStrokeFromObject = true;
			series.tooltip.background.strokeWidth = 3;
			series.tooltip.getFillFromObject = false;
			series.fillOpacity = 0.6;
			series.strokeWidth = 2;
			series.stacked = true;

			var series2 = chart.series.push(new am4charts.LineSeries());
			series2.name = "Units";
			series2.dataFields.dateX = "time";
			series2.dataFields.valueY = "units";
			series2.tooltipHTML = "<span style='font-size:14px; color:#000000;'><b>Units: {valueY.value}</b></span>";
			series2.tooltipText = "[#000]{valueY.value}[/]";
			series2.tooltip.background.fill = am4core.color("#FFF");
			series2.tooltip.getFillFromObject = false;
			series2.tooltip.getStrokeFromObject = true;
			series2.tooltip.background.strokeWidth = 3;
			series2.sequencedInterpolation = true;
			series2.fillOpacity = 0.6;
			series2.stacked = true;
			series2.strokeWidth = 2;

			var series3 = chart.series.push(new am4charts.LineSeries());
			series3.name = "Profits";
			series3.dataFields.dateX = "time";
			series3.dataFields.valueY = "profits";
			series3.tooltipHTML = "<span style='font-size:14px; color:#000000;'><b>Profit: ${valueY.value}</b></span>";
			series3.tooltipText = "[#000]{valueY.value}[/]";
			series3.tooltip.background.fill = am4core.color("#FFF");
			series3.tooltip.getFillFromObject = false;
			series3.tooltip.getStrokeFromObject = true;
			series3.tooltip.background.strokeWidth = 3;
			series3.sequencedInterpolation = true;
			series3.fillOpacity = 0.6;
			series3.defaultState.transitionDuration = 1000;
			series3.stacked = true;
			series3.strokeWidth = 2;

			chart.cursor = new am4charts.XYCursor();
			chart.cursor.xAxis = dateAxis;
			// chart.scrollbarX = new am4core.Scrollbar();

			// Add a legend
			chart.legend = new am4charts.Legend();
			chart.legend.position = "bottom";

			// axis ranges
			var range = dateAxis.axisRanges.create();
			range.date = new Date(2001, 0, 1);
			range.endDate = new Date(2003, 0, 1);
			range.axisFill.fill = chart.colors.getIndex(7);
			range.axisFill.fillOpacity = 0.2;

			range.label.text = "Fines for speeding increased";
			range.label.inside = true;
			range.label.rotation = 90;
			range.label.horizontalCenter = "right";
			range.label.verticalCenter = "bottom";

			var range2 = dateAxis.axisRanges.create();
			range2.date = new Date(2007, 0, 1);
			range2.grid.stroke = chart.colors.getIndex(7);
			range2.grid.strokeOpacity = 0.6;
			range2.grid.strokeDasharray = "5,2";


			range2.label.text = "Motorcycle fee introduced";
			range2.label.inside = true;
			range2.label.rotation = 90;
			range2.label.horizontalCenter = "right";
			range2.label.verticalCenter = "bottom";
		},error:function(){
			console.log("Ajax call error.");
		}
	});
}); // end animision.ready()
