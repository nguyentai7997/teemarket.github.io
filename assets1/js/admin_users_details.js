$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'csvHtml5',
		]
	} );
} );

$('.seller-request').click(function(event) {
	$('#example_wrapper').remove();
	var id_user = $('.id').val();
	$(".seller-request").addClass("active");
	$(".seller-orders").removeClass("active");

	$(".animsition").addClass("modal-open");
	$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
	$(".modal-loading").addClass("show");
	$(".modal-loading").css("display","block");
	$.ajax({
		url: 'http://localhost:8012/teemarket/admin/get_requestes_of_seller',
		type: 'post',
		data: {
			id_user : id_user,
		},success:function(res) {
			var obj = JSON.parse(res);
			var allData =[];
			for (i = 0; i < obj.length; i++){
				var data = [
					obj[i]['id'],
					obj[i]['time'],
					'$'+obj[i]['payout_requested'],
					obj[i]['payment_mode'],
					obj[i][0],
					obj[i]['status'].toUpperCase(),
					obj[i]['pay_time'],
					'<i class="icon fa-pencil-square font-size-20 edit-payout" style="color: #3f51b5;cursor: pointer" aria-hidden="true"><input type="text" value="'+obj[i]['id_seller']+'" class="sr-only"></i>',
				];
				allData.push(data);
			}

			$(".count").html(obj.length);
			$('.panel-body').append('<table class=\"table table-hover dataTable table-striped w-full text-center\" id=\"example\"></table>');
			$('#example').DataTable( {
				data: allData,
				"columns": [
					{ "title": "ID Request" },
					{ "title": "Time Request" },
					{ "title": "Payout Request" },
					{ "title": "Payment Mode" },
					{ "title": "Payment Method" },
					{ "title": "Status" },
					{ "title": "Time Update" },
					{ "title": "Edit" },
				],
				dom: 'Bfrtip',
				buttons: [
					'csvHtml5',
				]
			} );
			$(".modal-loading").removeClass("show");
			$(".modal-loading").css("display","none");
			$(".modal-backdrop").remove();
			$(".animsition").removeClass("modal-open");
		},error:function(){
			console.log("Ajax call error.");
		}
	});
});

$('.seller-orders').click(function(event) {
	$('#example_wrapper').remove();
	var id_user = $('.id').val();
	$(".seller-request").removeClass("active");
	$(".seller-orders").addClass("active");
	$(".animsition").addClass("modal-open");
	$(".animsition").append("<div class=\"modal-backdrop fade show\"></div>");
	$(".modal-loading").addClass("show");
	$(".modal-loading").css("display","block");
	$.ajax({
		url: 'http://localhost:8012/teemarket/admin/get_orders_of_seller',
		type: 'post',
		data: {
			id_user : id_user,
		},success:function(res) {
			var obj = JSON.parse(res);
			var allData =[];
			for (i = 0; i < obj.length; i++){
				var data = [
					obj[i]['time'],
					obj[i]['title'],
					obj[i]['id'],
					obj[i]['email'],
					obj[i]['country'],
					obj[i]['quantity'],
					'$'+(obj[i]['quantity']*(obj[i]['price'])).toFixed(2),
					'$7.50',
					'$'+(obj[i]['quantity']*(obj[i]['price']-7.50)).toFixed(2),
					obj[i]['status'],
				];
				allData.push(data);
			}
			$(".count").html(obj.length);
			$('.panel-body').append('<table class=\"table table-hover dataTable table-striped w-full text-center\" id=\"example\"></table>');
			$('#example').DataTable( {
				data: allData,
				"columns": [
					{ "title": "Date" },
					{ "title": "CName" },
					{ "title": "OrderID" },
					{ "title": "Email" },
					{ "title": "Country" },
					{ "title": "Items" },
					{ "title": "Subtotal" },
					{ "title": "Cost" },
					{ "title": "Profit" },
					{ "title": "Flag" },
				],
				dom: 'Bfrtip',
				buttons: [
					'csvHtml5',
				]
			} );
			$(".modal-loading").removeClass("show");
			$(".modal-loading").css("display","none");
			$(".modal-backdrop").remove();
			$(".animsition").removeClass("modal-open");
		},error:function(){
			console.log("Ajax call error.");
		}
	});
});
