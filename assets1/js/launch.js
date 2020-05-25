$('.next_step').click(function (event) {
	console.log('abc');
   var title = $('.title').val();
   var description = $('.description').val();
   var url = $('.url').val();
   var categorize= $('select[name=categorize] option').filter(':selected').val();
   var end = $('.end').val();
   var total_days = 7;

	$.ajax({
		url: 'http://localhost:8012/teemarket/seller/create/get_launch',
		type: 'post',
		data: {
			title : title,
			description : description,
			url : url,
			categorize : categorize,
			end : end,
			total_days : total_days
		},
		success:function(res){
			//window.location.href = 'http://localhost:8012/teemarket/seller/create/product';
		},
		error:function(res){
			console.log("Ajax call error.");
		}
	});
})
