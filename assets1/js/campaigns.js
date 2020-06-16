$(".more").click(function (event) {
	var obj = $(this).children();
	var id = obj[0].textContent
	window.location.href = 'http://localhost:8012/teemarket/seller/campaign_details/'+id;
})
