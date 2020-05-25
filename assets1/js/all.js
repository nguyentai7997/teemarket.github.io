$('.campaigns').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/campaigns';
});
$('.create-campaign').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/create/design';
});
$('.orders').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/orders';
});
$('.payouts').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/settings/payouts';
});
$('.settings').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/seller/settings/account';
});
//Log Out
$('.logout').click(function(event) {
	window.location.href = 'http://localhost:8012/teemarket/logout';
});
