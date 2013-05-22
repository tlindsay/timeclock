<html>
	<head>
		<!DOCTYPE html>
		<html lang="en">
		<link rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="css/flat/flat-ui.css">
		<link rel="stylesheet" type="text/css" href="css/clock.css">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
					<p>Florence-Lauderdale Public Library</p>
		</div>
		<br style="clear:both;">
		<div class="container">
			<div class="span8">
				<div class="hero-unit">
					<div class="header">
						<h1><a href="/">Welcome</a></h1>
						<div class="subheader">
							<p>to the Florence-Lauderdale Public Library.</p>
						</div>
					</div>
					<div id="login">
						<form action="login.php" method="post">
							<input type="number" placeholder="Barcode" name="barcode" length="14">
							<br>
							<input type="number" placeholder="PIN" name="pin" length="4">
							<br>
							<input type="submit" value="Go to Work!" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-warning">
						</form>
					</div>
				</div>
			</div>
			<div class="span4" id="splash">
				<img src="img/logo.png" alt="Florence-Lauderdale Public Library">
			</div>
		</div>
		<br style="clear:both;">
		<hr>
	</body>
</html>