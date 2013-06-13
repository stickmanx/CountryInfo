<!DOCTYPE html>
<html>
	<head>
		<!-- <link rel="stylesheet" href="css/stylesheet.css"> -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/main.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="wrapper">
			<h1>Info Grab</h1>
			<div id="country_selection">
				<form id="country" action="process.php" method="post">
					<input id="country_display" type="hidden" name="action" value="country_display"/>
				</form>
					<div id="country_dropdown"></div>
			</div>
			<h2>Country Information</h2>
			<div id="country_information"></div>
		</div>
	</body>
</html>