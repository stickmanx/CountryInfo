$(document).ready(function() {

	// display select menu
	$('#country').submit(function() {
		$.post (
			$(this).attr('action'),
			$(this).serialize(),
			function(data) {
				$('#country_dropdown').html(data.html);
			},
			"json"
		);
		return false;
	});

	// display select menu on load
	$('#country').submit();

	// submit country selection
	$('#country_selection').on('submit', '#country_select', function() {
		$.post (
			$(this).attr('action'),
			$(this).serialize(),
			function(data) {
				$('#country_information').html(data.html);
			},
			"json"
		);
		return false;
	});
});