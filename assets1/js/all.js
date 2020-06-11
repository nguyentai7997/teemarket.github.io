$('.campaigns').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
});
$('.option').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/campaign_details';
});
$('.create-campaign').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/design';
});
$('.orders').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/orders';
});
$('.payouts').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/payouts';
});
$('.settings').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/account';
});
//Log Out
$('.logout').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/logout';
});
